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
        New Page Title
      </h2>
      <div class="row">
        <div class="col-12">
          <p>
            This information is not yet available. Thank you for your patience.
          </p>
        </div>
      </div>

    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
