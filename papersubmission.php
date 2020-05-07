<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> paper submission"/>

    <title>
      Paper Submission for <?php echo $META['shortName'];?>
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Paper Submission
      </h2>

          <!-- NOTE: below is standard placeholder text for when the page
           is under construction. please delete the <p> below when you
           finish editing the content.  -->
      <p>
          The submission server is now available.
          Please see the <a href="https://asiacrypt.iacr.org/2020/callforpapers.php">call for papers</a> page for further instructions.
      </p>
      <p class="text-center">
        <a href="https://secure.iacr.org/websubrev/ac2020/submit/" target="_blank" class="btn btn-lg btn-warning"
           role="button">Submission Server</a>
      </p>
    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
