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
        Given the COVID-19 crisis, many of the affiliated events have chosen to cancel. However, those listed below have moved to an online event, as Eurocrypt 2020 has done.
      </p>

      <h4 class="subSubtitle">
        <a href="https://cbcrypto.dii.univpm.it/">CBCrypto: International Workshop on Code-Based Cryptography</a>
      </h4>
      <h6>
        Saturday 9 May and Sunday 10 May 2020
      </h6>
      <p>
        Organizers: Marco Baldi (Universit&agrave; Politecnica delle Marche), Edoardo Persichetti (Florida Atlantic University), Paolo Santini (Universit&agrave; Politecnica delle Marche)
      </p>
    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
