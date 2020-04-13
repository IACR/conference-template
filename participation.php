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

      <h2 class="indPageTitle">
        Participation Guidelines
      </h2>
      <div class="row">
        <div class="col-12">
          <p>
            This information is not yet available. Thank you for your patience.
          </p>

          <!-- TODO: this page needs info like links to webinars, how to navigate between sessions, etc -->
        </div>
      </div>

    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
