<?php
// This implements an ajax call to get the current program.
// We need this because it needs to add the current URLs for
// session. We do this by fetching the basic program.json
// created in the program editor, fetch the current URLs of
// the sessions, and populate the URLs in the program. The
// schema is modified by adding a youtubeUrl, zoomUrl, and
// chatUrl into each session.
$editorData = json_decode(file_get_contents('json/program.json'), TRUE);
header('Content-Type: application/json');
foreach($editorData['days'] as $dayindex => &$day) {
  foreach ($day['timeslots'] as $timeslotindex => &$timeslot) {
    foreach($timeslot['sessions'] as $sessionindex => &$session) {
      //      var_dump($session);
      foreach($session['talks'] as $talkindex => &$talk) {
          $talk['paperUrl'] = 'https://dx.doi.org/10.1007/978-3-030-26948-7_5';
          $talk['slidesUrl'] = 'https://iacr.org/submit/files/slides/2020/eurocrypt/kdev/2/slides.pdf';
          $talk['videoUrl'] = 'https://iacr.org/submit/files/slides/2020/eurocrypt/kdev/2/slides.pdf';
      }
      if ($session['talks']) {
        $session['session_url'] = 'participation.php#webinars';
        if (strcmp($day['date'], '2020-05-12') < 0) {
           $session['youtubeUrl'] = 'https://youtu.be/Zgms_hs366M';
           $session['chatUrl'] = 'https://slack.com/app_redirect?channel=C011W4M60AZ';
         } else {
           $session['zoomUrl'] = 'https://iacr.org/virtualconferences/ec2020/?dest=282938741kjhkhskbwkjhihskufskhoiu4y5wkggjgjgag';
         }
      }
    }
  }
}
echo json_encode($editorData);
?>
