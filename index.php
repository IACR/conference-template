<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>

    <title>
      <?php echo $META['shortName'];?>
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

  <main class="container mt-3 mt-lg-4 p-4">

    <!-- NOTE: below is placeholder content. please replace contents with your own content when ready. this content serves to give you an idea of what the structure of this page has looked like in the past -->
    <div class="row mb-2">
      <article class="col-12">
        <p>
          <span class="long_conf"><?php echo $META['name'];?></span> will take place in
          <span class="conf_location"><?php echo $META['city'] . ', ' . $META['country'];?></span>
          on <span class="conf_dates"><?php echo $META['dates'];?></span>.
          <span class="conf_name"><?php echo $META['name'];?></span> is organized by <a href="http://iacr.org/">the International Association for Cryptologic Research</a> (IACR).
        </p>
        <p>
          Please visit the <a href="./callforpapers.php">call for papers</a> page while we work on adding more information to our other pages. Thank you for your patience.
        </p>
      </article>
    </div>

    <div class="row mt-4">
      <div class="col-lg-6">
        <article class="customCard">
          <h4 class="customCardHeader">
            Example Dates
          </h4>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              Feb 13 2050
            </h6>
            <p class="col-7 col-md-8">
              Submission deadline at 04:00:00 UTC
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              March 30 2050
            </h6>
            <p class="col-7 col-md-8">
              First round notification
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              April 5 2050
            </h6>
            <p class="col-7 col-md-8">
              Rebuttals due by 11:45:00 UTC
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              April 22 2050
            </h6>
            <p class="col-7 col-md-8">
              Final notification
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              July 5 2050
            </h6>
            <p class="col-7 col-md-8">
              Camera-ready version
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              Sept 1 2050
            </h6>
            <p class="col-7 col-md-8">
              Conference begins
            </p>
          </div>
          <div class="customCardFooter">
            <img src="images/icons/exclamation.svg" class="icon" /> To convert UTC to your local time zone, <a href="https://www.timeanddate.com/time/zone/timezone/utc">click here</a>.
          </div>
        </article>
      </div>

      <div class="col-lg-6 mt-4 mt-lg-0">
        <article class="customCard">
          <h4 class="customCardHeader">
            Website Updates
          </h4>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              April 20 2017
            </h6>
            <p class="col-7 col-md-8">
              Web developer added a cool new feature to the site
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              April 18 2017
            </h6>
            <p class="col-7 col-md-8">
              Updates for demo of this site
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              March 28 2017
            </h6>
            <p class="col-7 col-md-8">
              <a href="./callforpapers.php">Call for papers</a> page updated
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              March 20 2017
            </h6>
            <p class="col-7 col-md-8">
              Website launched
            </p>
          </div>
        </article>
      </div>
    </div>

    <h3 class="pageSubtitle mt-4">
      Example Sponsors
    </h3>
    <a href="http://kaymckelly.com/">
      <img src="./images/demo/examplesponsor1.png" alt="black and white vector graphic of an elephant" class="sponsorLogo firstLogo" />
    </a>
    <a href="http://kaymckelly.com/">
      <img src="./images/demo/examplesponsor2.png" alt="deep blue vector graphic of a map pin with a piece missing from the circle at the top" class="sponsorLogo" />
    </a>

  </main>

  <?php include "includes/footer.php";?>
</body>
</html>
