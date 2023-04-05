<!DOCTYPE html>
<html lang="en">

<head>
  <?php // The header includes the head tag and start of body
  require "includes/head.php";
  ?>
  <meta property="og:title" content="<?php echo $META['shortName']; ?>" />
  <meta name="twitter:title" content="<?php echo $META['shortName']; ?>" />

  <title>
    <?php echo $META['shortName']; ?>
  </title>

</head>

<body class="home">
  <?php require "includes/nav.php"; ?>

  <main class="container p-4">

    <!-- NOTE: below is placeholder content. please replace contents with
      your own content when ready. this content serves to give you an idea of
      what the structure of this page has looked like in the past -->
    <p>
      <?php echo $META['shortName']; ?> will take place in
      <?php echo $META['city'] . ', ' . $META['country']; ?>
      on <?php echo $META['dates']; ?>.
      <?php echo $META['shortName']; ?> is organized by
      <a href="https://iacr.org/">the International Association for
        Cryptologic Research</a> (IACR). This will be the <?php echo $META['name']; ?>.
    </p>

    <!-- NOTE: when registration is open, uncomment the giant
      registration button below. If you need more than one link, uncomment
      the div with three buttons below -->
    <!-- <a href="registration.php" class="btn customBtn-warm btn-lg
      btn-block w-50 mx-auto mb-4">
      Register now
    </a> -->

    <!-- NOTE: these buttons are for when you need more than just one
      front and center call to action -->
    <!-- <div class="d-flex flex-wrap justify-content-center justify-content-lg-between">
      <a href="affiliated.php" class="btn customBtn-warm btn-lg px-lg-5 mb-3 mb-lg-4">
        Affiliated events
      </a>
      <a href="program.php" class="btn customBtn-warm btn-lg px-lg-5 mb-3 mb-lg-4">
        Conference program
      </a>
      <a href="swag.php" class="btn customBtn-warm btn-lg px-lg-5 mb-3 mb-lg-4">
        Want swag?
      </a>
    </div> -->

    <div class="row">
      <div class="col-md-6">
        <?php require "includes/important_dates.php"; ?>
      </div>

      <!-- NOTE: Update this to add a row at the top as you add features to
        the site. -->
      <div class="col-md-6 mt-4 mt-md-0">
        <article class="customCard">
          <h4 class="customCardHeader">
            Website Updates
          </h4>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-6 col-lg-4">
              28 Mar <?php echo date("Y"); ?>
            </h6>
            <p class="col-7 col-md-6 col-lg-8">
              <a href="callforpapers.php">Call for papers</a> page updated
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-6 col-lg-4">
              20 Mar <?php echo date("Y"); ?>
            </h6>
            <p class="col-7 col-md-6 col-lg-8">
              Website launched
            </p>
          </div>
        </article>
      </div>
    </div>

  </main>

  <?php include "includes/footer.php"; ?>
</body>

</html>