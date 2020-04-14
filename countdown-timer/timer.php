<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> "/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> "/>

    <title>
      <?php echo $META['shortName'];?>
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">

      <!-- NOTE: below is standard placeholder text for when the page is under construction. please delete this entire <div class="row"> when ready to add other content -->
      <h2 class="indPageTitle">
        Countdown Timer
      </h2>
      <div class="row">
        <div class="col-12">
          <p>
            The purpose and usage of this timer is intended for the virtual conferences. Between sessions, a chair may wish to display this timer so viewers will know when talks will resume.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-6">
          <!-- TODO: required fields are hour/minute/second dropdowns, timezone (see https://www.tickcounter.com/ for basic idea) -->
          <!-- TODO: optional fields are repeat option, date -->
        </div>
      </div>

    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
