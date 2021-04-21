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

      <!-- NOTE: below is standard placeholder text for when the page is under construction. please delete this entire <div class="row"> and all elements contained within it when ready to add other content -->
      <!-- <div class="row">
        <div class="col-12">
          <p>
            This information is not yet available. Thank you for your patience.
          </p>
        </div>
      </div> -->

      <h3 class="pageSubtitle text-center mt-4">
        General Co-Chairs
      </h3>

      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-sm-6 text-center mb-2 editMe">
          <h4 class="subSubtitle">
            Important Professor #1
          </h4>
          <p class="text-center">
            University of Peer Review<br>
            China
          </p>
        </aside>
        <aside class="col-12 col-sm-6 text-center mb-2 editMe">
          <h4 class="subSubtitle">
            World-Famous Researcher
          </h4>
          <p class="text-center">
            Institute for the Advancement of Causative Research<br>
            Singapore
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5 editMe">
          <a href="mailto:doNotEmailMe@fakeDomain.com">
            <img src="images/icons/email.svg" class="icon" />
          </a>&nbsp;
          doNotEmailMe@fakeDomain.com
        </div>
      </div>

      <h3 class="pageSubtitle text-center mt-4">
        Program Co-Chairs
      </h3>

      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-sm-6 text-center mb-2 editMe">
          <h4 class="subSubtitle">
            SmartGuy McWriter
          </h4>
          <p class="text-center">
            Synonym College<br>
            Romania
          </p>
        </aside>
        <aside class="col-12 col-sm-6 text-center mb-2 editMe">
          <h4 class="subSubtitle">
            Ellis Papers
          </h4>
          <p class="text-center">
            Society for Promotion of Encryption<br>
            Senegal
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center editMe">
          <a href="mailto:reallyDoNotEmailMe@fakeDomain.com">
            <img src="images/icons/email.svg" class="icon" />
          </a>&nbsp;
          reallyDoNotEmailMe@fakeDomain.com
        </div>
      </div>

    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
