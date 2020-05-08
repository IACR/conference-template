<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?>"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?>"/>

    <title>
      <?php echo $META['shortName'];?>
    </title>
    <style>
      body {
      background-color: white;
      }
     main {
       background-color: white;
     }
    </style>
  </head>
  <body class="home">
    <?php
    //require "includes/nav.php";
    ?>

  <main class="container-fluid" style="height:100vh">

      <h1 class="text-center display-1">
        Time until session starts
      </h1>
      <div id="clockdiv" class="d-flex flex-row justify-content-center display-1">
        <div class="d-none p-2 text-center">
          <span class="days"></span>
          <div class="smalltext">Days</div>
        </div>
        <div class="d-none p-2 text-center">
          <span class=" hours"></span>
        </div>
        <div class="p-2 text-center">
          <span class="minutes"></span> :
          <span class="seconds"></span>
        </div>
      </div>
      <h1 class="display-5 text-center mb-5">
        Thank you to our sponsors
      </h1>
      <div class="w-75 mx-auto">
          <div class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-item active">
            <img src="images/sponsors/mozilla.png" class="img-fluid align-middle">
          </div>
          <div class="carousel-item">
            <img src="images/sponsors/google.png" class="d-block img-fluid w-50 mx-auto">
          </div>
          <div class="carousel-item">
            <img src="images/sponsors/nsf.gif" class="d-block img-fluid w-75 mx-auto">
          </div>
          <div class="carousel-item">
            <img src="images/sponsors/auditchain.png" class="d-block img-fluid mx-auto w-100">
          </div>
          <div class="carousel-item">
            <img src="images/sponsors/AWS.png" class="d-block img-fluid mx-auto w-100">
          </div>
          <div class="carousel-item">
            <img src="images/sponsors/cloudFlare.png" class="d-block img-fluid mx-auto w-100">
          </div>
          <div class="carousel-item">
            <img src="images/sponsors/ethereumFoundation.png" class="d-block img-fluid mx-auto w-100">
          </div>
      </div>
  </main>
<script>
 function getTimeRemaining(endtime) {
   var t = Date.parse(endtime) - Date.parse(new Date());
   var seconds = Math.floor((t / 1000) % 60);
   var minutes = Math.floor((t / 1000 / 60) % 60);
   var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
   var days = Math.floor(t / (1000 * 60 * 60 * 24));
   return {
     'total': t,
     'days': days,
     'hours': hours,
     'minutes': minutes,
     'seconds': seconds
   };
 }

 function initializeClock(id, endtime) {
   var clock = document.getElementById(id);
   var daysSpan = clock.querySelector('.days');
   var hoursSpan = clock.querySelector('.hours');
   var minutesSpan = clock.querySelector('.minutes');
   var secondsSpan = clock.querySelector('.seconds');

   function updateClock() {
     var t = getTimeRemaining(endtime);

     daysSpan.innerHTML = t.days;
     hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
     minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
     secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

     if (t.total <= 0) {
       clearInterval(timeinterval);
     }
   }

   updateClock();
   var timeinterval = setInterval(updateClock, 1000);
 }

 var deadline = new Date(Date.parse('2020-05-11T13:00:00Z'));
 initializeClock('clockdiv', deadline);
</script>

  </main>

<?php
  include "includes/footer.php";
  ?>
</body>
</html>
