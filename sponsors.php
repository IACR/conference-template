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
            <span class="conf_name"><?php echo $META['shortName'];?></span> relies on sponsors to help ensure student participation. Please contact the <a href="contact.php">General Chairs</a> if your company is interested in sponsoring this conference.
          </p>
        </section>
      </div>

      <!-- NOTE: below is placeholder content. please uncomment and replace with your own content when ready. make sure to verify that all included sponsors are current, with appropriate links. -->
      <h3 class="pageSubtitle mt-4">
        Diamond Level
      </h3>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://tii.ae/">
            <img src="./images/sponsors/eurocrypt2020/tiilogo.png" alt="Technology Innovation Institute" title="Technology Innovation Institute" class="sponsorPageLogo">
          </a>
        </div>
      </div>

      <hr />
      <h3 class="pageSubtitle mt-4">
        Gold Level
      </h3>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://www.calibra.com/">
            <img src="./images/sponsors/eurocrypt2020/calibra.png" alt="Calibra" title="Calibra" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://usa.visa.com/about-visa/visa-research.html">
            <img src="./images/sponsors/eurocrypt2020/VisaResearch.png" alt="Visa Research" title="Visa Research" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://www.google.com">
            <img src="./images/sponsors/eurocrypt2020/google.png" alt="Google" title="Google" class="sponsorPageLogo">
          </a>
        </div>
      </div>

      <hr />
      <h3 class="pageSubtitle mt-4">
        Silver Level
      </h3>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://cloudflare.com/">
            <img src="./images/sponsors/eurocrypt2020/cloudflare.png" alt="Cloudflare" title="Cloudflare" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://www.research.ibm.com/">
            <img src="./images/sponsors/eurocrypt2020/IBM-Research-logo.png" alt="IBM Research" title="IBM Research" class="sponsorPageLogo">
          </a>
        </div>
      </div>

      <hr />
      <h3 class="pageSubtitle mt-4">
        Bronze Level
      </h3>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://www.cea.fr/">
            <img src="./images/sponsors/eurocrypt2020/CEAlogo.png" alt="CEA" title="CEA" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://cryptoexperts.com/">
            <img src="./images/sponsors/eurocrypt2020/crx.png" alt="CryptoExperts" title="CryptoExperts" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between bg-dark">
          <a href="https://hardwear.io/">
            <img src="./images/sponsors/eurocrypt2020/hardwear_logo.png" alt="hardwear.io" title="hardwear.io" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://www.intrinsic-id.com/">
            <img src="./images/sponsors/eurocrypt2020/Logo-Intrinsic-ID_238x40.png" alt="Intrinsic ID" title="Intrinsic ID" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://pqshield.com/">
            <img src="./images/sponsors/eurocrypt2020/pqshield.jpg" alt="PQShield" title="PQShield" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://www.rambus.com/security/">
            <img src="./images/sponsors/eurocrypt2020/rambus.png" alt="Rambus" title="Rambus" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://www.platon.network/">
            <img src="./images/sponsors/eurocrypt2020/PlatON.png" alt="PlatON" title="PlatON" class="sponsorPageLogo">
          </a>
        </div>
      </div>
    </main>
    <?php include "includes/footer.php"; ?>
  </body>
</html>
