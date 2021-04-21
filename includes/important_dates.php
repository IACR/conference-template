<?php
/* This is included on several pages to have a single place
   where dates are recorded. The dates should be consistent
   with what is in json/metadata.json, which is why we use
   $META['submitdate'] and $META['dates'].
*/
?>
<article class="customCard">
  <h4 class="customCardHeader">
    Important Dates
  </h4>
  <div class="customCardRow row">
    <h6 class="dateTitle col-5 col-md-4">
      <?php echo $META['submitdate'];?>
    </h6>
    <p class="col-7 col-md-8">
      Submission deadline at 21:00 UTC
    </p>
  </div>
  <div class="customCardRow row">
    <h6 class="dateTitle col-5 col-md-4">
      <?php echo $META['firstRound'];?>
    </h6>
    <p class="col-7 col-md-8">
      First round notification
    </p>
  </div>
  <div class="customCardRow row">
    <h6 class="dateTitle col-5 col-md-4">
      <?php echo $META['rebuttalDue'];?>
    </h6>
    <p class="col-7 col-md-8">
      Rebuttal deadline at 11:45 UTC
    </p>
  </div>
  <div class="customCardRow row">
    <h6 class="dateTitle col-5 col-md-4">
      <?php echo $META['finalNotification'];?>
    </h6>
    <p class="col-7 col-md-8">
      Final notification
    </p>
  </div>
  <div class="customCardRow row">
    <h6 class="dateTitle col-5 col-md-4">
      <?php echo $META['finalNotification'];?>
    </h6>
    <p class="col-7 col-md-8">
      Final version due
    </p>
  </div>
  <div class="customCardRow row">
    <h6 class="dateTitle col-5 col-md-4">
      <?php echo $META['startdate'];?>
    </h6>
    <p class="col-7 col-md-8">
      Conference begins
    </p>
  </div>
  <div class="customCardFooter">
    <img src="images/icons/exclamation.svg" class="icon" /> For further details,
    consult the <a href="papersubmission.php">paper submission page</a>.
  </div>
</article>
