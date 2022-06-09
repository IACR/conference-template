<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> contact information"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> contact information"/>

    <title>
      <?php echo $META['shortName'];?> Contacts
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Contact
      </h2>

      <!-- To add/edit contact information, edit the file linked below (includes/chairs.php).
      BE AWARE that this will change this information on the callforpapers.php page as well! -->
      <div class="d-flex">
        <?php require "includes/chairs.php"; ?>
      </div>

    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
