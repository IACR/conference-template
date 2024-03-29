<?php
/* This is included on several pages to have a single place
   where dates are recorded. The dates should be consistent
   with what is in json/metadata.json, which is why we use
   $META['submitdate'] and $META['dates'].
*/
function showDate($key, $title) {
  global $META;
  if (!array_key_exists($key, $META) || $META[$key] == null) {
    return;
  }
  $date = $META[$key];
  echo <<< EOR
   <div class="customCardRow row">
    <h6 class="dateTitle col-5 col-md-6 col-lg-4">
      $date
    </h6>
    <p class="col-7 col-md-6 col-lg-8">
      $title
    </p>
  </div>
  EOR;
}
?>
<article class="customCard">
  <h4 class="customCardHeader">
    Important dates
  </h4>
  <?php showDate('submitdate', 'Submission deadline'); ?>
  <?php showDate('firstRound', 'First round notification'); ?>
  <?php showDate('rebuttalDue', 'Rebuttal deadline'); ?>
  <?php showDate('finalNotif', 'Final notification'); ?>
  <?php showDate('finalVers', 'Final versions due'); ?>
  <!-- An example of a custom date not in metadata.json. -->
  <!--
  <div class="customCardRow row">
    <h6 class="dateTitle col-5 col-md-4">
      1 Jan 1970
    </h6>
    <p class="col-7 col-md-8">
      Custom date description
    </p>
  </div>
  -->
  <?php showDate('startdate', 'Conference begins'); ?>
  <div class="customCardFooter text-start small">
    <img src="images/icons/info.svg" class="icon" alt="info icon" /> Further details are 
    available on the <a href="papersubmission.php">paper submission page</a>.
  </div>
</article>
