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
    <div class="row mb-2">
      <article class="col-12">
        <p>
          <span class="long_conf"><?php echo $META['shortName'];?></span> will take place in
          <span class="conf_location"><?php echo $META['city'] . ', ' . $META['country'];?></span>
          on <span class="conf_dates"><?php echo $META['dates'];?></span>.
          <span class="conf_name"><?php echo $META['shortName'];?></span> is organized by
          <a href="http://iacr.org/">the International Association for Cryptologic Research</a> (IACR).
        </p>
        <p class="editMe">
          Please visit the <a href="./callforpapers.php">call for papers</a> page while we work on
          adding more information to our other pages. Thank you for your patience.
        </p>
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
              March 28 2020
            </h6>
            <p class="col-7 col-md-8">
              <a href="./callforpapers.php">Call for papers</a> page updated
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              March 20 2020
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
