<!DOCTYPE html>
<html lang="en">

<head>
  <?php // The header includes the head tag and start of body
  require "includes/head.php";
  ?>
  <meta property="og:title" content="<?php echo $META['shortName']; ?> " />
  <meta name="twitter:title" content="<?php echo $META['shortName']; ?> " />

  <title>
    <?php echo $META['shortName']; ?> Accommodations
  </title>

  <style>
    /* NOTE: why Bootstrap doesn't offer an equal column option natively is beyond me */
    @media (min-width: 768px) {
      .flex-even {
        flex: 1;
      }
    }

    .travelIcon {
      width: 1.3em;
      height: 1.3em;
      filter: invert(16%) sepia(91%) saturate(6408%) hue-rotate(156deg) brightness(92%) contrast(88%);
      margin-right: 1rem;
      margin-top: 0.25rem;
    }
  </style>
</head>

<body>
  <?php require "includes/nav.php"; ?>

  <main class="container-lg px-4 px-lg-0">

    <h2 class="indPageTitle">
      Accommodations
    </h2>
    <!-- NOTE: below is an example of how additional information could be
      formatted on this page -->
    <h3 class="pageSubtitle mt-4">
      On-campus accommodations
    </h3>
    <p>
      We hope we'll have this option.
    </p>

    <div class="d-flex flex-wrap flex-md-nowrap justify-content-around justify-content-start-md">
      <section class="flex-even mt-3 px-md-4">
        <h4 class="subSubtitle text-center mb-3">
          Dormitory rooms
        </h4>
        <p>
          Most convenient but not always the poshest.
        </p>
        <p>
          Once plans are finalized, there will be a link below.
        </p>
        <a href="https://kaymckelly.com" class="btn customBtn-warm blockBtn disabled mb-4 mb-md-0" role="button" target="_blank">
          Register for dorms
        </a>
      </section>

      <section class="flex-even mt-4 mt-md-3 px-md-4">
        <h4 class="subSubtitle text-center mb-3">
          University Campus Hotel
        </h4>
        <div class="d-flex">
          <img src="images/icons/location.svg" class="travelIcon" />
          <address>
            Somewhere on Earth<br>
            Probably not in the ocean
          </address>
        </div>
        <div class="d-flex">
          <img src="images/icons/phone.svg" class="travelIcon" />
          <address>
            123.012.9876
          </address>
        </div>
        <p class="mt-3">
          Rates: guess ;)
        </p>
        <p>
          Locals don't stay here. Hopefully you won't hear the
          student parties while you're with us.
        </p>
      </section>
    </div>

    <h3 class="pageSubtitle mt-4">
      Off-campus accommodations
    </h3>
    <p>
      For those who choose not to stay on-site, the following is a list of
      hotels that have provided room blocks for
      <?php echo $META['shortName']; ?>. Those who choose to stay off-site are
      responsible for making their own reservations. Early reservations are
      advised since August is a popular tourist season for the area.
    </p>
    <aside class="alert customAlert-warm">
      <img src="images/icons/alert-triangle.svg" class="icon" />
      All prices are subject to change and do not include tax; prices should
      be confirmed by calling the hotels directly. Room blocks may be
      released as early as two months prior to the conference. You must
      mention Crypto 2020 when you are making your reservations so you will
      be eligible for any special rates that may be available. Other hotels
      are available in the area.
    </aside>

    <div class="d-flex flex-wrap flex-md-nowrap justify-content-around justify-content-start-md">
      <section class="flex-even mt-3 px-md-4">
        <h4 class="subSubtitle text-center mb-3">
          Extra Posh Hotel
        </h4>
        <div class="d-flex">
          <img src="images/icons/location.svg" class="travelIcon" />
          <address>
            The fancy downtown area
          </address>
        </div>
        <div class="d-flex">
          <img src="images/icons/phone.svg" class="travelIcon" />
          <address>
            458.927.0634<br>
            Fax: 444.127.1212
          </address>
        </div>
        <p class="mt-3">
          Rates: how much you got?
        </p>
        <p>
          For the most discerning of conference attendees. Free breakfast,
          wifi, and extra pillows. Even though we can't legally say it,
          children explicitly unwelcome.
        </p>
        <a class="btn customBtn-warm blockBtn mb-4 mb-md-0" role="button" href="https://kaymckelly.com" target="_blank">
          Reservations
        </a>
      </section>

      <section class="flex-even mt-4 mt-md-3 px-md-4">
        <h4 class="subSubtitle text-center mb-3">
          Acceptable Inn
        </h4>
        <div class="d-flex">
          <img src="images/icons/location.svg" class="travelIcon" />
          <address>
            In town
          </address>
        </div>
        <div class="d-flex">
          <img src="images/icons/phone.svg" class="travelIcon" />
          <address>
            413.872.9561
          </address>
        </div>
        <p class="mt-3">
          Rates: pocket change?
        </p>
        <p>
          Some information on the internet led you to believe this is a
          reasonable place to stay, and it is. Just don't expect luxury for
          this price. We expect you to scavenge for breakfast. No mini
          cereal boxes here!
        </p>
        <a class="btn customBtn-warm blockBtn mb-4 mb-md-0" role="button" href="https://kaymckelly.com" target="_blank">
          Reservations
        </a>
      </section>
    </div>

  </main>

  <?php include "includes/footer.php"; ?>
</body>

</html>