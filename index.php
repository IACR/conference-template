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
          <span class="long_conf"><?php echo $META['shortName'];?></span>, the <span class="long_conf"><?php echo $META['name'];?></span>,
          will take place virtually on <span class="conf_dates"><?php echo $META['dates'];?></span>.
          <span class="conf_name"><?php echo $META['shortName'];?></span> is organized by
          <a href="http://iacr.org/">the International Association for Cryptologic Research</a> (IACR).
          <!-- and <a href=""> Korea Institute of Information Security and Cryptology </a> (KIISC). -->
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
              Oct 7 2020
            </h6>
            <p class="col-7 col-md-8">
              Thanks to <a href="https://www.mitsubishielectric.com/">Mitsubishi</a> for being a <a href="./sponsors.php">sponsor</a>
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              Oct 5 2020
            </h6>
            <p class="col-7 col-md-8">
              <a href="./registration.php">Registration</a> is open
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              Sep 23 2020
            </h6>
            <p class="col-7 col-md-8">
              <a href="./acceptedpapers.php">The list of accepted papers</a> is now online
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              May 7 2020
            </h6>
            <p class="col-7 col-md-8">
              <a href="https://secure.iacr.org/websubrev/ac2020/submit/">Submission server</a> opened
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              Apr 21 2020
            </h6>
            <p class="col-7 col-md-8">
              CFP revised
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              Mar 21 2020
            </h6>
            <p class="col-7 col-md-8">
              CFP updated
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              Mar 10 2020
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
