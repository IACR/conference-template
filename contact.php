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

    <main class="container-lg px-4 px-lg-0">
      <h2 class="indPageTitle">
        Contact
      </h2>

      <!-- To add/edit contact information, please edit names and affiliations in
      json/metadata.json -->
      <h3 class="pageSubtitle text-center mt-4">
        General co-chairs
      </h3>

      <div class="row mt-3 mt-md-4">
        <?php
          $theClass = count($META['GENERAL_CHAIRS'])==1 ? 'col-12' : 'col-12 col-sm-6';
          foreach ($META['GENERAL_CHAIRS'] as $person) {
            $name = $person['name'];
            $affiliation = $person['affiliation'];
            $country = $person['country'];
            echo <<< EOR
            <aside class="$theClass text-center mb-2">
              <h4 class="subSubtitle">
                $name
              </h4>
              <h6>
                $affiliation<br>
                <small>$country</small>
              </h6>
            </aside>
            EOR;
          }
        ?>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:doNotEmailMe@fakeDomain.com">
            <img src="images/icons/mail.svg" class="icon" />
          </a> doNotEmailMe@fakeDomain.com
        </div>
      </div>

      <!-- To add/edit contact information, please edit names and affiliations in
      json/metadata.json -->
      <h3 class="pageSubtitle text-center mt-4">
        Program co-chairs
      </h3>

      <div class="row mt-3 mt-md-4">
        <?php
          $theClass = count($META['PC_CHAIRS'])==1 ? 'col-12' : 'col-12 col-sm-6';
          foreach ($META['PC_CHAIRS'] as $person) {
            $name = $person['name'];
            $affiliation = $person['affiliation'];
            $country = $person['country'];
            echo <<< EOR
            <aside class="$theClass text-center mb-2">
              <h4 class="subSubtitle">
                $name
              </h4>
              <h6>
                $affiliation<br>
                <small>$country</small>
              </h6>
            </aside>
            EOR;
          }
        ?>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:reallyDoNotEmailMe@fakeDomain.com">
            <img src="images/icons/mail.svg" class="icon" />
          </a> reallyDoNotEmailMe@fakeDomain.com
        </div>
      </div>

    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
