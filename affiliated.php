<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> affiliated events"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> affiliated events"/>

    <title>
      <?php echo $META['shortName'];?> Affiliated Events
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
     <h3 class="pageSubtitle">
       Affiliated Events
     </h3>
      <p>
        As this is Eurocrypt's first time as an online event, we have few affiliated events.
      </p>
    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
