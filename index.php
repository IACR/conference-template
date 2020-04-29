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

  </head>
  <body class="home">
    <?php require "includes/nav.php"; ?>

  <main class="container p-4">

    <!-- NOTE: below is placeholder content. please replace contents with your own content when ready. this content
    serves to give you an idea of what the structure of this page has looked like in the past -->
    <p class="alert alert-info">
      <b>
        Due to the coronavirus spread, Eurocrypt 2020 will be
        virtual. The dates of this event are (close to) the original
        dates: May 11-15 2020. We suggest you read the
        <a href="participation.php">participation guidelines</a>
        to see what it will be like.
      </b>
    </p>

    <div class="row mb-2">
      <article class="col-12">
        <p>
          <!-- <span class="long_conf"><?php echo $META['shortName'];?></span> will take place 
          <span class="conf_location"><?php echo $META['city'] . ', ' . $META['country'];?></span>
          on <span class="conf_dates"><?php echo $META['dates'];?></span>.-->
            <span class="long_conf"><?php echo $META['shortName'];?></span> is the 39th Annual International Conference on the Theory and Applications of Cryptographic Techniques. Eurocrypt is one of the three flagship conferences of <a href="http://iacr.org/">the International Association for Cryptologic Research</a> (IACR). This is the first Eurocrypt to be run as a virtual conference.
        </p>
        <!-- <p class="editMe">
          Please visit the <a href="./callforpapers.php">call for papers</a> page while we work on
          adding more information to our other pages. Thank you for your patience.
        </p>-->
        <!-- TODO: place countdown timer to next session here perhaps? -->
      </article>
    </div>

    <div class="row mt-4">
      <div class="col-lg-6">
        <?php require "includes/important_dates.php";?>
      </div>

      <!-- NOTE: Update this to add a row at the top as you add features to the site. -->
      <div class="col-lg-6 mt-4 mt-lg-0">
        <article class="customCard">
          <h4 class="customCardHeader">
            Website Updates
          </h4>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              April 28 2020
            </h6>
            <p class="col-7 col-md-8">
              <a href="program.php">Tentative program</a> is now online.
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              April 18 2020
            </h6>
            <p class="col-7 col-md-8">
              Conference website updated for virtual conference. Further details will
              appear on new site.
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              April 7 2020
            </h6>
            <p class="col-7 col-md-8">
              It has been decided that due to the coronavirus spread
              Eurocrypt 2020 will be virtual.
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              February 21 2020
            </h6>
            <p class="col-7 col-md-8">
              <a href="acceptedpapers.php">The list of accepted papers</a> is now online.
            </p>
          </div>
<!--          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              February 20 2020
            </h6>
            <p class="col-7 col-md-8">
              <a href="stipends.php">Deadline for student stipend
              application (Round II)</a> has been extended.
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              February 14 2020
            </h6>
            <p class="col-7 col-md-8">
              <a href="stipends.php">Deadline for student stipend
              application (Round I)</a> is now closed.
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              December 12 2019
            </h6>
            <p class="col-7 col-md-8">
              <a href="stipends.php">Deadline for student stipend
              application (Round I)</a> is now open
            </p>
          </div>-->
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              September 10 2019
            </h6>
            <p class="col-7 col-md-8">
              Submission server is now open.
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              June 21 2019
            </h6>
            <p class="col-7 col-md-8">
              <a href="./callforpapers.php">Call for papers</a> page updated
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              April 1 2019
            </h6>
            <p class="col-7 col-md-8">
              Call for affiliated events is now open.
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              February 12 2019
            </h6>
            <p class="col-7 col-md-8">
              Website launched
            </p>
          </div>
        </article>
      </div>
    </div>

  </main>

  <?php include "includes/footer.php";?>
</body>
</html>
