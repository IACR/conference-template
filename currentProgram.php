<?php
// This implements an ajax call to get the current program.
// We need this because it needs to add the current URLs for
// session. We do this by fetching the basic program.json
// created in the program editor, fetch the current URLs of
// the sessions, and populate the URLs in the program. The
// schema is modified by adding a youtubeUrl, zoomUrl, and
// chatUrl into each session. zoomUrl is encrypted and directs
// to iacr.org/virtualconferences where registration is verified.

// We use $year, $eventtype, and $shortName from metadata.json.
$META = json_decode(file_get_contents("json/metadata.json"), true);
$shortName = $META['shortName'];
$eventtype = $META['eventtype'];
$yearstr = strval($META['year']);
$baseUrl = 'https://' . $META['eventtype'] . '.iacr.org/' . $yearstr . '/';
$confname = $META['eventtype'] . $yearstr;  // e.g., 'fse2020'

require('/var/www/lib/vendor/autoload.php');
require('/var/www/lib/calendar/calendar.php');
// These are used for encrypting and authenticating URLs
require('/var/www/data/lib.php');
require_once('creds.php');

use \Eluceo\iCal\Component\Calendar;
use \Eluceo\iCal\Component\Event;

// Note that dates and times should be in UTC. $date is YYYY-mm-dd
// and times are hh:mm.
// This function returns an array of links.
function getCalendarLinks($date, $starttime, $endtime, $session) {
  global $shortName;
  global $baseUrl;
  $tz = new DateTimeZone('UTC');
  $from = DateTime::createFromFormat('Y-m-d H:i', "$date $starttime", $tz);
  $to = DateTime::createFromFormat('Y-m-d H:i', "$date $endtime", $tz);
  $description = '';
  if (!empty($session['location'])) {
    $description .= $session['location']['name'] . "\n";
  }
  if (!empty($session['zoomUrl'])) {
    $description .= 'Zoom url: ' . $session['zoomUrl'] . "\n";
  }
  if (!empty($session['chatUrl'])) {
    $description .= 'Chat: ' . $session['chatUrl'] . "\n";
  }
  $url = $baseUrl . 'program.php#' . $session['id'];
  $description .= "Links will appear at: $url\n\n";
  if (!empty($session['moderator'])) {
    $description .= $session['moderator'] . ".\n";
  }
  if (!empty($session['talks'])) {
    $description .= "\nPapers included:\n\n";
    foreach($session['talks'] as $talk) {
      $description .= $talk['title'];
      if (!empty($talk['authors'])) {
        $description .= '; ' . implode(', ', $talk['authors']);
      }
      $description .= "\n\n";
    }
  }
  $google = googleCalendarLink("$shortName: " . $session['session_title'],
                               $from->format('Ymd\THis\Z'),
                               $to->format('Ymd\THis\Z'),
                               $description);
  $links = array('Google calendar' => $google);
  $calendar = new Calendar($baseUrl);
  $event = new Event();
  $event->setDtStart($from);
  $event->setDtEnd($to);
  $event->setSummary("$shortName: " . $session['session_title']);
  $event->setDescription($description);
  $calendar->addComponent($event);
  $links['iCal and Outlook'] = 'data:text/calendar;charset=utf8;base64,' . base64_encode($calendar->render());
  return $links;
}

function proxyUrl($tablename, $url) {
  global $encrypt_key;
  $key = $encrypt_key;
  $cipher = 'AES-256-CBC';
  $ivlen = openssl_cipher_iv_length($cipher);
  $iv = openssl_random_pseudo_bytes($ivlen);
  $dest = openssl_encrypt($url, $cipher, $key, 0, $iv);
  $auth = get_hmac($tablename . $url);
  $args = http_build_query(array('dest' => base64_encode($dest),
                                 'iv' => base64_encode($iv),
                                 'ivlen' => $ivlen,
                                 'conf' => $tablename,
                                 'auth' => $auth));
  return 'https://iacr.org/virtualconferences/?' . $args;
}

$editorData = json_decode(file_get_contents('json/program.json'), TRUE);
//$editorData = json_decode(file_get_contents('https://iacr.org/tools/program/ajax.php?id=313&iacrref=foo'), TRUE);
$extraLinks = json_decode(file_get_contents('json/extraLinks.json'), TRUE);
$youtube = $extraLinks['youtube'];
$slides = $extraLinks['slides'];
$zoom = $extraLinks['zoom'];
if (array_key_exists('speakers', $extraLinks)) {
  // An array from paperId to a string with names of speakers.
  $speakers = $extraLinks['speakers'];
} else {
  $speakers = array();
}
// These are a hack for PKC.
$misc = $extraLinks['misc'];
header('Content-Type: application/json');
foreach($editorData['days'] as $dayindex => &$day) {
  foreach ($day['timeslots'] as $timeslotindex => &$timeslot) {
    foreach($timeslot['sessions'] as $sessionindex => &$session) {
      if (isset($misc[$session['id']])) {
        $obj = $misc[$session['id']];
        $session['miscUrl'] = array('url' => proxyUrl($confname, $obj['url']),
                                    'title' => $obj['title']);
      }
      if (isset($zoom[$session['id']])) {
        $session['zoomUrl'] = proxyUrl($confname, $zoom[$session['id']]);
      }
      // These are for past recordings.
      if (isset($extraLinks['youtube'][$session['id']])) {
//        $session['youtubeUrl'] = proxyUrl($confname, $extraLinks['youtube'][$session['id']]);
        $session['youtubeUrl'] = $extraLinks['youtube'][$session['id']];
      }
      if (isset($extraLinks['chat'][$session['id']])) {
        $session['chatUrl'] = proxyUrl($confname, $extraLinks['chat'][$session['id']]);
      } else {
        // for testing
        // $session['chatUrl'] = proxyUrl($confname, 'https://chat.iacr.org/');
      }
      if (!empty($session['talks'])) {
        foreach($session['talks'] as $talkindex => &$talk) {
          if (isset($talk['paperId'])) {
            $talkid = $talk['paperId'];
          } else {
            $talkid = $talk['id'];
          }
          if (isset($speakers[$talkid])) {
            $talk['speakers'] = $speakers[$talkid];
          }
          if (isset($youtube[$talkid])) {
            $talk['videoUrl'] = $youtube[$talkid];
          }
          if (isset($talk['pubkey']) && isset($slides[$talk['pubkey']])) {
            $talk['slidesUrl'] = $slides[$talk['pubkey']];
          }
        }
        $session['session_url'] = 'participation.php#attendSession';
      }
      if ($session['session_title'] !== 'Break') {
        // Generate a link to create an event on Google calendar
        $calendar = getCalendarLinks($day['date'], $timeslot['starttime'], $timeslot['endtime'], $session);
        if ($calendar) {
          $session['calendar'] = $calendar;
        }
      }
    }
  }
}
echo json_encode($editorData);
?>
