<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> sponsors"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> sponsors"/>

    <title>
      Sponsors for <?php echo $META['shortName'];?>
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Sponsors
      </h2>

      <div class="row">
        <section class="col-12">
          <p>
            <span class="conf_name"><?php echo $META['shortName'];?></span> relies on sponsors to help ensure student participation. Please contact the <a href="./contact.php">General Chair</a> if your company is interested in sponsoring this conference.
          </p>
        </section>
      </div>

      <!-- NOTE: below is placeholder content. please uncomment and replace with your own content when ready. make sure to verify that all included sponsors are current, with appropriate links. -->
      <!-- <h3 class="pageSubtitle mt-4">
        Platinum Level
      </h3>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/ethereumFoundation.png" alt="Ethereum Foundation" title="Ethereum Foundation" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/AWS.png" alt="AWS" title="AWS" class="sponsorPageLogo">
          </a>
        </div>
      </div>

      <hr />
      <h3 class="pageSubtitle mt-4">
        Gold Level
      </h3>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/cloudFlare.png" alt="Cloudflare" title="Cloudflare" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/inpher.png" alt="Inpher" title="Inpher" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/google.png" alt="Google" title="Google" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/jPMorgan.jpg" alt="JPMorgan" title="JPMorgan" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/nsf.gif" alt="National Science Foundation" title="National Science Foundation" class="sponsorPageLogo">
          </a>
        </div>
      </div>

      <hr />
      <h3 class="pageSubtitle mt-4">
        Silver Level
      </h3>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/nucypher.png" alt="NuCypher" title="NuCypher" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/QEDit.png" alt="QED-it" title="QED-it" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/mozilla.png" alt="Mozilla" title="Mozilla" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/iotex.png" alt="IoTeX" title="IoTeX" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/ibm.png" alt="IBM" title="IBM" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/auditchain.png" alt="Auditchain" title="Auditchain" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/protocolLabs.png" alt="Protocol Labs" title="Protocol Labs" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/poa.jpg" alt="POA" title="POA" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://kaymckelly.com">
            <img src="./images/sponsors/iohk.png" alt="IOHK" title="IOHK" class="sponsorPageLogo">
          </a>
        </div>
      </div> -->
    </main>
    <?php include "includes/footer.php"; ?>
  </body>
</html>
