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

    .travelIcon {
      width: 1.3em;
      height: 1.3em;
      filter: brightness(0) saturate(100%) invert(31%) sepia(57%) saturate(2045%) hue-rotate(292deg) brightness(87%) contrast(87%);
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

  <main class="container-lg px-4 px-lg-0">
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

    <!-- an example of how to organize travel info follows from Asiacrypt 2026 -->
    <!-- <h3 class="pageSubtitle mt-4">
      Getting from Hong Kong International Airport to the venue
    </h3>
    <div class="row">
      <article class="col-sm-6 col-xxl-3 mt-2 mt-xxl-1">
        <h4 class="subSubtitle mb-3">
          By train + taxi
        </h4>
        <div class="d-flex">
          <img src="images/icons/watch.svg" class="travelIcon" />
          <p>30-40 minutes travel time</p>
        </div>
        <div class="d-flex">
          <img src="images/icons/currency.svg" class="travelIcon" />
          <p>HK$155-175 total</p>
        </div>
        <p>
          You can take the Airport Express from Hong Kong International Airport to Kowloon
          Station. Once you arrive at Kowloon Station, you will take a short taxi ride to the
          hotel (approximately 10-15 minutes).
        </p>
        <p>
          The estimated total cost above includes the Airport
          Express fare of HK$105 with Octopus or HK$115 with other payment
          methods, plus around HK$50-60 for the taxi ride.
        </p>
        <p>
          Please note that some taxis may not accept credit card payment. Check with the taxi
          driver before boarding.
        </p>
      </article>
      <article class="col-sm-6 col-xxl-3 mt-2 mt-xxl-1">
        <h4 class="subSubtitle mb-3">
          By train only
        </h4>
        <div class="d-flex">
          <img src="images/icons/watch.svg" class="travelIcon" />
          <p>45 minutes travel time</p>
        </div>
        <div class="d-flex">
          <img src="images/icons/currency.svg" class="travelIcon" />
          <p>HK$120-142.50 total</p>
        </div>
        <p>
          Take the Airport Express from Hong Kong International Airport to Hong Kong
          Station. From there, follow the signs and walk through the underground passage to
          Central Station. Then take the Tsuen Wan Line towards Tsuen Wan and get off at
          Tsim Sha Tsui Station.
        </p>
        <p>
          If you use an Octopus card, the estimated cost is HK$120, covering the Airport Express fare
          with free MTR interchange when using the same Octopus within the
          specified time. If you use other payment methods, the estimated cost is HK$142.5, including HK$130 for the
          Airport Express and HK$12.5 for the MTR fare from Central to Tsim Sha Tsui.
        </p>
      </article>
      <article class="col-sm-6 col-xxl-3 mt-3 mt-xxl-1">
        <h4 class="subSubtitle mb-3">
          By bus
        </h4>
        <div class="d-flex">
          <img src="images/icons/watch.svg" class="travelIcon" />
          <p>60-75 minutes travel time, depending on traffic</p>
        </div>
        <div class="d-flex">
          <img src="images/icons/currency.svg" class="travelIcon" />
          <p>HK$35 total</p>
        </div>
        <p>
          Airport buses offer a lower-cost way to reach Tsim Sha Tsui, though the journey is
          generally slower and may be affected by traffic conditions. The most convenient route
          is Cityflyer route A21, which runs directly from Hong
          Kong International Airport to the Tsim Sha Tsui area via Nathan Road.
        </p>
        <p>
          Buses run every 10-30 minutes. The nearest stop to the conference venue is Middle Road
          or Nathan Road.
        </p>
      </article>
      <article class="col-sm-6 col-xxl-3 mt-3 mt-xxl-1">
        <h4 class="subSubtitle mb-3">
          By taxi
        </h4>
        <div class="d-flex">
          <img src="images/icons/watch.svg" class="travelIcon" />
          <p>30-40 minutes travel time, depending on traffic</p>
        </div>
        <div class="d-flex">
          <img src="images/icons/currency.svg" class="travelIcon" />
          <p>HK$330-420 total</p>
        </div>
        <p>
          You can also take a taxi or Uber directly from Hong Kong International Airport to the
          venue. Be aware that some taxis may not accept credit card payment. Please check with the taxi
          driver before boarding.
        </p>
      </article>
    </div> -->
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