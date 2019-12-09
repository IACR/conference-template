<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
        require "includes/head.php";
          ?>
    <style>
      div#venuemap {
	margin-top: 15px;
	height: 600px;
	width: 100%;
	border: 1px solid #ccc;
      }
    </style>
    <title><?php echo $META['shortName'];?> Travel and Venue </title>
    <link rel="stylesheet" href="https://iacr.org/libs/js/leafletjs/leaflet.css"/>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container mt-5">

      <div class="row">
        <div class="col-sm-12">
          <h2 class="indPageTitle">
            Travel Information
          </h2>
        </div>
      </div>

      <!-- NOTE: below is standard placeholder text for when the page is under construction. please delete this entire <div class="row"> and all elements contained within it when ready to add other content -->
      <div class="row">
        <div class="col-sm-12">
          <p>
            This information is not yet available. Thank you for your patience. If it were, this is what it might look like.
          </p>
        </div>
      </div>

      <!-- NOTE: below is placeholder content derived from the Crypto
      2019 conference. please uncomment and replace with your own
      content when ready. this code is here to give you an idea of
      what the structure of this page has looked like in the past -->
      <div class="row align-items-center">
        <section class="col-sm-8">
          <p>
            The conference will be held on the campus of the
	    University of California, Santa Barbara (UCSB). UCSB is
	    located approximately two miles from
	    the <a href="http://www.flysba.com/">Santa Barbara
	    airport</a>, and about 10 miles from the city center of
	    <?php echo $META['city'];?>.  The airport is served by
	    over 20 flights a day from major US hub airports. Many
	    rental car agencies are available in the immediate
	    area. Santa Barbara is approximately 100 miles (160km)
	    north of the Los Angeles airport and 350 miles (560km)
	    south of San Francisco.
	  </p>
          <p>
            Information about on-site accommodations and local hotels
            can be
            found <a href="./accommodations.html">here</a>. Also, maps
            of the <a href="http://kaymckelly.com">general area</a>
            and a visit to <a href="http://kaymckelly.com">my home
            page</a> may be useful.
          </p>
        </section>
        <div class="col-sm-4">
	  <div class="alert alert-success" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&ensp;
            Bring a sweater and/or jacket. <?php echo $META['city'];?>
	    can be cold at night. (This is crucial for the beach party!)
	  </div>
	</div>
      </div>
      <div id="venuemap">
      </div>
    </main>
    <script src="https://iacr.org/libs/js/leafletjs/leaflet-src.js"></script>
    <script>
      var mymap = L.map('venuemap').setView([<?php echo $META['longitude'] . ',' . $META['latitude'];?>], 13);
      var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
      {maxZoom: 18,
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      });
     tiles.addTo(mymap);
     // You can define points on the map below.  If you want to add hotels,
     // you should probably do a separate map on the accomodations.php file.
     var points = [{name: 'Venue: UCSB',
		    latitude: <?php echo $META['latitude'];?>,
		    longitude: <?php echo $META['longitude'];?> },
		   {name: 'Santa Barbara Airport',
		    latitude: -119.8365,
		    longitude: 34.424} ];
     for (let i = 0; i < points.length; i++) {
       let point = points[i];
       var marker = L.marker([point.longitude, point.latitude]).addTo(mymap);
       marker.bindPopup("<p>" + point.name + "</p>");
     }
    </script>
    <?php include "includes/footer.php"; ?>
  </body>
</html>
