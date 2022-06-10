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

      <!-- To add/edit contact information, please edit names and affiliations in
      json/metadata.json -->
      <h3 class="pageSubtitle text-center mt-4">
        General Co-Chairs
      </h3>

      <!-- NOTE: if you only have one general chair, please uncomment the following div,
      then remove or comment out the div below containing the PHP -->
      <!-- <div class="row mt-3 mt-md-4">
        <aside class="col-12 text-center mb-2">
          <h4 class="subSubtitle">
            <?php echo $META['GENERAL_CHAIRS'][0]['name'] ?>
          </h4>
          <p class="text-center">
            <?php echo $META['GENERAL_CHAIRS'][0]['affiliation'] ?>
          </p>
        </aside>
      </div> -->

      <div class="row mt-3 mt-md-4">
        <?php
          foreach ($META['GENERAL_CHAIRS'] as $person) {
            $name = $person['name'];
            $affiliation = $person['affiliation'];
            echo <<< EOR
            <aside class="col-12 col-sm-6 text-center mb-2">
              <h4 class="subSubtitle">
                $name
              </h4>
              <p class="text-center">
                $affiliation
              </p>
            </aside>
            EOR;
          }
        ?>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:reallyDoNotEmailMe@fakeDomain.com">
            <img src="images/icons/email.svg" class="icon" />
          </a> reallyDoNotEmailMe@fakeDomain.com
        </div>
      </div>

      <!-- To add/edit contact information, please edit names and affiliations in
      json/metadata.json -->
      <h3 class="pageSubtitle text-center mt-4">
        Program Co-Chairs
      </h3>

      <!-- NOTE: if you only have one program chair, please uncomment the following div,
      then remove or comment out the div below containing the PHP  -->
      <!-- <div class="row mt-3 mt-md-4">
        <aside class="col-12 text-center mb-2">
          <h4 class="subSubtitle">
            <?php echo $META['PC_CHAIRS'][0]['name'] ?>
          </h4>
          <p class="text-center">
            <?php echo $META['PC_CHAIRS'][0]['affiliation'] ?>
          </p>
        </aside>
      </div> -->

      <div class="row mt-3 mt-md-4">
        <?php
          foreach ($META['PC_CHAIRS'] as $person) {
            $name = $person['name'];
            $affiliation = $person['affiliation'];
            echo <<< EOR
            <aside class="col-12 col-sm-6 text-center mb-2">
              <h4 class="subSubtitle">
                $name
              </h4>
              <p class="text-center">
                $affiliation
              </p>
            </aside>
            EOR;
          }
        ?>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:doNotEmailMe@fakeDomain.com">
            <img src="images/icons/email.svg" class="icon" />
          </a> doNotEmailMe@fakeDomain.com
        </div>
      </div>

    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
