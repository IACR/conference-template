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
      #headerImage {
        background-image:
        url("images/banners/grayHive.jpg");
        background-size: cover;
        background-position: center center;
        height: 28vh;
        color: #102A83;
      }
      #headerGradient {
        /* TODO: add gradient if titles don't show up */
      }
      /* h1 {
        background-color: rgba(38, 109, 211, 0.3);
        padding: .5rem;
        border-radius: 10px;
      } */
      #clockdiv {
        font-size: 1.8rem;
      }
      /* div#clockbg {
        background-color: rgba(38, 109, 211, 0.6);
        padding: .5rem;
        border-radius: 10px;
      } */
      /* a#homelink {
        color: #f3f3fb;
      }
      a#homelink:hover {
        color: #f3f3fb;
      } */
      footer {
        display: none;
      }
    </style>
  </head>
  <body class="home">
    <!-- TODO: find a new tone because this one is v annoying -->
    <audio id="ringtone" src="timer/melody.mp3" preload="auto"></audio>

    <header id="headerImage">
      <div id="headerGradient" class="d-flex justify-content-between">
        <a id="homelink" href="https://crypto.iacr.org/2020/">
          <h1 class="mt-4 ml-5 display-3">
            <?php echo $META['shortName'];?>
          </h1>
        </a>
      <div id="clockdiv" class="mt-5 justify-content-center mr-4">
          <div id="clockbg">
            <span class="mr-3">Time until session starts:</span>
            <span class="minutes"></span>:<span class="seconds"></span>
          </div>
        </div>
      </div>
    </header>
    <main class="container-fluid p-4">
      <h2 class="indPageTitle text-center">
        Many thanks to our sponsors
      </h2>

      <div id="sponsorslideshow" class="mt-4 w-75 mx-auto">
        <section class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/sponsors/kaist.png" class="d-block w-50 mx-auto" alt="KAIST">
            </div>

            <div class="carousel-item">
              <img src="images/sponsors/dime.png" class="d-block w-50 mx-auto" alt="DIME">
            </div>

            <div class="carousel-item">
              <img src="images/sponsors/etri.png" class="d-block w-50 mx-auto" alt="ETRI">
            </div>

            <div class="carousel-item">
              <img src="images/sponsors/daejeon.png" class="d-block w-50 mx-auto" alt="DAEJON">
            </div>

            <div class="carousel-item">
              <img src="images/sponsors/springer.svg" class="d-block w-50 mx-auto" alt="Springer">
            </div>

            <div class="carousel-item">
              <img src="images/sponsors/kiisc.png" class="d-block w-50 mx-auto" alt="KIISC">
            </div>

            <div class="carousel-item">
              <img src="images/sponsors/mitsubishi.png" class="d-block w-50 mx-auto" alt="Mitsubishi">
            </div>
          </div>
        </section>
      </div>
    </main>
    <!-- NOTE: you need this, even though you don't display it, as it includes jQuery -->
    <?php include "includes/footer.php"; ?>

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

          minutesSpan.innerText = ('0' + t.minutes).slice(-2);
          secondsSpan.innerText = ('0' + t.seconds).slice(-2);

          if (t.total <= 0) {
            clearInterval(timeinterval);
            document.getElementById('ringtone').play();
          }
        }
        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
      }
    </script>

    <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3>
              Set Timer
            </h3>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label id="inputLabel" for="minutes-input">Enter the number of minutes</label>
              <input type="number" class="form-control" id="minutes-input" name="minutes">
            </div>
            <button class="btn btn-primary" role="button" onClick="setMinutes()">Start timer</button>
          </div>
        </div>
      </div>
    </div>


    <script>
      function setMinutes() {
        let input = document.getElementById('minutes-input');
        if (input.value > 0) {
          let now = Date.now();
          now += input.value * 60000;
          let deadline = new Date(now);
          initializeClock('clockdiv', deadline);
          $('#inputModal').modal('hide');
        }
      }

      $(document).ready(function() {
        $('#inputModal').modal('show');
      });
    </script>
</body>
</html>
