<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> sponsors"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> sponsors"/>

    <title>
      <?php echo $META['shortName'];?> Sponsors
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container">
      <h2 class="indPageTitle">
        Sponsors
      </h2>

      <p>
        <?php echo $META['shortName'];?> relies on sponsors to help ensure
        student participation. Please contact the
        <a href="contact.php">General Chair(s)</a> if your company is
        interested in sponsoring this conference.
      </p>

      <!-- NOTE: below is placeholder content. Please uncomment and replace
      with your own content when ready. Make sure to verify that all included
      sponsors are current, with appropriate links. We recommend saving sponsor
      logos under /images/sponsors for better organization. Remember to change
      both the image source path and url, as well as alt text and title on the
      image. -->
      <!-- <h3 class="pageSubtitle mt-4">
        Platinum Level
      </h3>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/ethereumFoundation.png" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/AWS.png" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
      </div>

      <hr />
      <h3 class="pageSubtitle mt-4">
        Gold Level
      </h3>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/cloudFlare.png" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/inpher.png" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/google.png" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/jPMorgan.jpg" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/nsf.gif" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
      </div>

      <hr />
      <h3 class="pageSubtitle mt-4">
        Silver Level
      </h3>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/nucypher.png" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/QEDit.png" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/mozilla.png" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/iotex.png" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/ibm.png" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/auditchain.png" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/protocolLabs.png" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/poa.jpg" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kaymckelly.com" target="_blank">
            <img src="images/sponsors/iohk.png" alt="NAME" title="NAME" class="sponsorPageLogo">
          </a>
        </div>
      </div> -->
    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
