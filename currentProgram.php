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
// These are used for encrypting and authenticating URLs
require('/var/www/data/lib.php');
require_once('creds.php');

function proxyUrl($tablename, $url) {
  global $encrypt_key;
  $key = $encrypt_key;
  $cipher = 'AES-256-CBC';
  $ivlen = openssl_cipher_iv_length($cipher);
  $iv = openssl_random_pseudo_bytes($ivlen);
  $dest = openssl_encrypt($url, $cipher, $key, 0, $iv);
  $auth = get_hmac($tablename . $url);
  $args = http_build_query(array(
    'dest' => base64_encode($dest),
    'iv' => base64_encode($iv),
    'ivlen' => $ivlen,
    'conf' => $tablename,
    'auth' => $auth
  ));
  return 'https://iacr.org/virtualconferences/?' . $args;
}

$editorData = json_decode(file_get_contents('json/program.json'), TRUE);
$extraLinks = json_decode(file_get_contents('json/extraLinks.json'), TRUE);

$youtube = $extraLinks['youtube'];
$slides = $extraLinks['slides'];
$zoom = $extraLinks['zoom'];
// $attendance = $extraLinks['attendance'];
$eprint = $extraLinks['eprint'];

if (array_key_exists('speakers', $extraLinks)) {
  // An array from paperId to a string with names of speakers.
  $speakers = $extraLinks['speakers'];
} else {
  $speakers = array();
}

header('Content-Type: application/json');
foreach ($editorData['days'] as $dayindex => &$day) {
  foreach ($day['timeslots'] as $timeslotindex => &$timeslot) {
    foreach ($timeslot['sessions'] as $sessionindex => &$session) {
      if (isset($zoom[$session['id']])) {
        $session['zoomUrl'] = proxyUrl($confname, $zoom[$session['id']]);
      }
      if (isset($extraLinks['youtube'][$session['id']])) {
        $session['youtubeUrl'] = $extraLinks['youtube'][$session['id']];
      }

      if (!empty($session['talks'])) {
        foreach ($session['talks'] as $talkindex => &$talk) {
          if (isset($talk['paperId'])) {
            $talkid = $talk['paperId'];
          }
          if (isset($speakers[$talkid])) {
            $talk['speakers'] = $speakers[$talkid];
          }
          if (isset($youtube[$talkid])) {
            $talk['videoUrl'] = $youtube[$talkid];
          }
          // NOTE: occasionally you may need to swap $talkid for $talk['pubkey'] where applicable; the necessity of this change depends on the structure of program.json and/or extraLinks.json. the reverse may also be true. if something's not displaying correctly on the program page, try this.
          if (isset($talk['paperId']) && isset($slides[$talk['paperId']])) {
            $talk['slidesUrl'] = $slides[$talk['paperId']];
          }
          if (isset($eprint[$talkid])) {
            $talk['eprint'] = 'https://eprint.iacr.org/' . $eprint[$talkid];
          }
        }
      }
    }
  }
}
echo json_encode($editorData);
?>
