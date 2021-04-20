<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> travel and venue"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> travel and venue"/>

    <style>
      div#venuemap {
        margin-top: 15px;
        height: 600px;
        width: 100%;
        border: 1px solid #CCC;
      }

      ul.hotel-info {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      ul.hotel-info li {
        padding-left: 28px;
        display: block;
      }

      ul.hotel-info li:empty {
        height: 1.2rem;
      }

      ul.hotel-info li.email {
        background: url('images/icons/email.svg') no-repeat left 4px;
        background-size: 18px;
      }

      ul.hotel-info li.location {
        background: url('images/icons/location.svg') no-repeat left 4px;
        background-size: 18px;
      }

      ul.hotel-info li.phone {
        background: url('images/icons/phone.svg') no-repeat left 4px;
        background-size: 18px;
      }
    </style>

    <title>
      <?php echo $META['shortName'];?> Travel & Venue
    </title>

    <link rel="stylesheet" href="https://iacr.org/libs/js/leafletjs/leaflet.css"/>
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
          <p class="editMe">
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
            <img src="images/icons/exclamation.svg" class="icon" />
            <!-- NOTE: this could be a warning that hotels book up fast in the season -->
            <span class="editMe">Bring a sweater and/or jacket. Santa Barbara
              can be cold at night. (This is crucial for the beach party!)</span>
          </div>
        </div>
      </div>

      <div id="venuemap">
      </div>

      <!-- TODO: change the way icons are displayed because yikes, why did
      you do it this way?!? -->
      <!-- NOTE: below is an example of how additional information could be
      formatted on this page -->
      <!-- <h3 class="pageSubtitle mt-4">
        On-Campus Accommodations
      </h3>
      <p>
        On-campus accomodations consist of dormitory rooms (dorms) and a small
        number of hotel-style rooms at the Club &amp; Guest House. For attendees
        staying on campus, free shuttle bus service is available between here
        and the airport. In addition, parking is also available at no cost to
        attendees who reside on-site. A permit can be requested from the front
        desk upon arrival.
      </p>
      <p>
        Note that children under the age of 13 cannot stay in on-site
        accommodations, so those bringing younger children will need to make
        separate arrangements in one of the nearby hotels.
      </p>

      <div class="row justify-content-around">
        <section class="col-lg-4 col-md-6 d-flex flex-column mt-4">
          <h4 class="subSubtitle text-center">
            Dormitory rooms
          </h4>
          <p>
            Reasonably priced accommodations are available in the university
            residence halls (dorms) for conference attendees and their
            registered guests. These have shared bathrooms for the floor.
          </p>
          <p>
            Once on-site registration is available, there will be a link below.
          </p>
          <a href="http://kaymckelly.com" class="btn customBtn-warm btn-block disabled mb-5 mt-auto" role="button">
            Register for dorms
          </a>
        </section>

        <section class="col-lg-4 col-md-6 d-flex flex-column mt-4">
          <h4 class="subSubtitle text-center">
            Club &amp; Guest House at UC Santa Barbara
          </h4>
          <address>
            <ul class="hotel-info">
              <li class="location">
                Building 581
              </li>
              <li>
                University of California
              </li>
              <li>
                Santa Barbara, CA 93106
              </li>
              <?php // NOTE: this li is used for spacing purposes only ?>
              <li></li>
              <li class="phone">
                805.893.7781
              </li>
              <li class="email">
                simon.herrera@theclub.ucsb.edu
              </li>
            </ul>
          </address>
          <p>
            Rates: $100 single/double (Sunday - Thursday). Please note that
            Friday &amp; Saturday rates may differ.
          </p>
          <p>
            Well-appointed guest rooms all come with lagoon and ocean views and
            guests enjoy two complimentary deluxe continental breakfasts.
            Conference meeting locations are within a 5-minute walking distance
            from The Guest House.
          </p>
        </section>
      </div>

      <h3 class="pageSubtitle mt-4">
        Off-Campus Accommodations
      </h3>
      <p>
        For those who choose not to stay on-site, the following is a list of
        hotels that have provided room blocks for
        <?php echo $META['shortName'];?>. Note that none of the hotels is
        walking distance to the venue. Those who choose to stay off-site are
        responsible for making their own reservations. Early reservations are
        advised since August is a popular season in Santa Barbara.
      </p>
      <aside class="alert customAlert-warm">
        <img src="images/icons/exclamation.svg" class="icon" />
        All prices are subject to change and do not include tax; prices should
        be confirmed by calling the hotels directly. Room blocks may be
        released as early as two months prior to the conference. You must
        mention Crypto 2020 when you are making your reservations so you will
        be eligible for any special rates that may be available. Other hotels
        are available in the area.
      </aside>

      <div class="row justify-content-around">
        <section class="col-lg-4 col-md-6 d-flex flex-column mt-4">
          <h4 class="subSubtitle text-center">
            Best Western South Coast Inn
          </h4>
          <address>
            <ul class="hotel-info">
              <li class="location">
                5620 Calle Real
              </li>
              <li>
                Goleta, CA 93117
              </li>
              <?php // NOTE: this li is used for spacing purposes only ?>
              <li></li>
              <li class="phone">
                805.967.3200
              </li>
              <li>
                Fax: 805.683.4466
              </li>
            </ul>
          </address>
          <p>
            Rates: $177 single/double (Sunday - Thursday). $223 (Friday and
            Saturday).
          </p>
          <p>
            Five minutes from the University; newly renovated. Breakfast Buffet
            daily. Complimentary afternoon beverages Monday through Thursday.
            Free local calls. Refrigerator, coffeemaker, hairdryer and wifi
            for free internet access in all rooms. Pool and spa. Morning and
            evening shuttle to UCSB and airport 7:30am to 10:00pm.
          </p>
          <a class="btn customBtn-warm btn-block mt-auto" role="button"
          href="https://www.hotelsone.com/goleta-hotels-us/best-western-plus-south-coast-inn.html">
            Reservations
          </a>
        </section>
        <section class="col-lg-4 col-md-6 d-flex flex-column mt-4">
          <h4 class="subSubtitle text-center">
            Pacifica Suites
          </h4>
          <address>
            <ul class="hotel-info">
              <li class="location">
                5490 Hollister Ave
              </li>
              <li>
                Goleta, CA 93111
              </li>
              <?php // NOTE: this li is used for spacing purposes only ?>
              <li></li>
              <li class="phone">
                805.893.6722
              </li>
              <li>
                Fax: 805.683.4121
              </li>
            </ul>
          </address>
          <p>
            Rates: $209 single/double (Sunday - Wednesday). $249 single/double
            (Thursday, Friday, Saturday).
          </p>
          <p>
            Rate includes up to two complimentary cooked-to-order breakfasts,
            two rooms, high-speed wireless internet, two TVs, microwave, stereo,
            refrigerator, pool and hot tub. Complimentary beverages served
            from 5:00 to 7:00pm. With 24-hour advance notice, will provide
            shuttle service to and from the Santa Barbara Airport, 8:00am to
            5:00pm.
          </p>
          <a class="btn customBtn-warm btn-block mt-auto" role="button"
          href="https://www.pacificasuites.com">
            www.pacificasuites.com
          </a>
        </section>
      </div> -->
    </main>

    <script src="https://iacr.org/libs/js/leafletjs/leaflet-src.js"></script>

    <script>
     // You can recover latitude & longitude from this page:
     // https://iacr.org/events/edit.php
     var mymap = L.map('venuemap').setView([<?php echo $META['longitude'] . ',' . $META['latitude'];?>], 13);
     var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                              maxZoom: 18,
                              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                            });

     tiles.addTo(mymap);

     var points = [{name: 'Conference Venue: UCSB',
                    latitude: <?php echo $META['latitude'];?>,
                    longitude: <?php echo $META['longitude'];?> },
                   {name: 'Santa Barbara Airport',
                    latitude: -119.8365,
                    longitude: 34.424},
                   {name: 'Best Western South Coast Inn',
                    latitude: -119.8198,
                    longitude: 34.44197},
                   {name: 'Pacifica Suites',
                    latitude: -119.8159,
                    longitude: 34.436806},
                   {name: 'The Club &amp; Guest House at UC Santa Barbara',
                    latitude: -119.851345,
                    longitude: 34.411853},
                   {name: 'Dormitory accomodations (various)',
                    latitude: -119.84423,
                    longitude: 34.4111}];

     for (let i = 0; i < points.length; i++) {
       let point = points[i];
       var marker = L.marker([point.longitude, point.latitude]).addTo(mymap);
       marker.bindPopup("<p>" + point.name + "</p>");
     }
    </script>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
