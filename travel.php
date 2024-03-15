<!DOCTYPE html>
<html lang="en">

<head>
  <?php // The header includes the head tag and start of body
  require "includes/head.php";
  ?>
  <meta property="og:title" content="<?php echo $META['shortName']; ?> travel and venue" />
  <meta name="twitter:title" content="<?php echo $META['shortName']; ?> travel and venue" />

  <style>
    div#venuemap {
      height: 400px;
      width: 100%;
      border: 1px solid #CCC;
    }

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

  <title>
    <?php echo $META['shortName']; ?> Travel & Venue
  </title>

  <link rel="stylesheet" href="https://iacr.org/libs/js/leafletjs/leaflet.css" />
</head>

<body>
  <?php require "includes/nav.php"; ?>

  <main class="container p-4">
    <h2 class="indPageTitle">
      Travel & Venue Information
    </h2>

    <p>
      This information is not yet available. Thank you for your patience.
    </p>

    <!-- NOTE: below is placeholder content derived from the Crypto
      2019 conference. please uncomment and replace with your own
      content when ready. this code is here to give you an idea of
      what the structure of this page has looked like in the past -->
    <div class="row">
      <section class="col-md-8">
        <p>
          The conference will be held on the campus of the University of
          California, Santa Barbara (UCSB). UCSB is located approximately two
          miles from the <a href="http://www.flysba.com/">Santa Barbara
            airport</a>, and about 10 miles from the city center of Santa
          Barbara. The airport is served by over 20 flights a day from major
          US hub airports. Many rental car agencies are available in the
          immediate area. Santa Barbara is approximately 100 miles (160km)
          north of the Los Angeles airport and 350 miles (560km) south of San
          Francisco.
        </p>
      </section>

      <div class="col-md-4">
        <div class="alert customAlert-cool" role="alert">
          <img src="images/icons/alert-triangle.svg" class="icon" />
          <!-- NOTE: this could be a warning that hotels book up fast in the season -->
          Bring a sweater and/or jacket. Santa Barbara
          can be cold at night. (This is crucial for the beach party!)
        </div>
      </div>
    </div>

    <div id="venuemap" class="mt-2">
    </div>

    <!-- NOTE: below is an example of how additional information could be
      formatted on this page -->
    <h3 class="pageSubtitle mt-4">
      On-Campus Accommodations
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
      Off-Campus Accommodations
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

  <script src="https://iacr.org/libs/js/leafletjs/leaflet-src.js"></script>

  <script>
    // You can recover latitude & longitude from this page:
    // https://iacr.org/events/edit.php
    var mymap = L.map('venuemap').setView([<?php echo $META['longitude'] . ',' . $META['latitude']; ?>], 13);
    var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18,
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });

    tiles.addTo(mymap);

    var points = [{
        name: 'Conference venue',
        longitude: <?php echo $META['longitude']; ?>,
        latitude: <?php echo $META['latitude']; ?>
      },
      {
        name: 'Airport',
        longitude: 34.424,
        latitude: -119.8365
      }
    ];

    for (let i = 0; i < points.length; i++) {
      let point = points[i];
      var marker = L.marker([point.longitude, point.latitude]).addTo(mymap);
      marker.bindPopup("<p>" + point.name + "</p>");
    }
  </script>

  <?php include "includes/footer.php"; ?>
</body>

</html>