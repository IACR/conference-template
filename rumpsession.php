<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> rump session"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> rump session"/>

    <title>
      <?php echo $META['shortName'];?> Rump Session
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Rump Session
      </h2>

      <!-- NOTE: below is standard placeholder text for when the page is under construction.
           IACR does not have a standard way to organize rump session submissions, but you
           can always use the program editor to create your program: https://iacr.org/tools/program
           and then copy stuff from program.php and js/program.js.
      -->
      <p>
        This information is not yet available, but will become
        available prior to the conference start date.
        Thank you for your patience.
      </p>

    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
