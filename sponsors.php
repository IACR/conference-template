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
            <?php echo $META['shortName'];?> relies on sponsors to help ensure student participation. Please contact the <a href="contact.php">General Chair</a> if your company is interested in sponsoring this conference.
          </p>
        </section>
      </div>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://www.kaist.ac.kr/en/">
            <img src="./images/sponsors/kaist.png" alt="KAIST" title="KAIST" class="sponsorPageLogo" />
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="http://www.dime.or.kr/">
            <img src="./images/sponsors/dime.png" alt="DIME" title="DIME" class="sponsorPageLogo" />
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://www.etri.re.kr/eng/main/main.etri">
            <img src="./images/sponsors/etri.png" alt="ETRI" title="ETRI" class="sponsorPageLogo" />
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://www.daejeon.go.kr/dre/index.do">
            <img src="./images/sponsors/daejeon.png" alt="DAEJEON" title="DAEJEON" class="sponsorPageLogo" />
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://www.springer.com/">
            <img src="./images/sponsors/springer.svg" alt="SPRINGER" title="SPRINGER" class="sponsorPageLogo" />
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://kiisc.or.kr/">
            <img src="./images/sponsors/kiisc.png" alt="KIISC" title="KIISC" class="sponsorPageLogo" />
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://www.mitsubishielectric.com/">
            <img src="./images/sponsors/mitsubishi.png" alt="MITSUBISHI" title="MITSUBISHI" class="sponsorPageLogo" />
          </a>
        </div>
      </div>
    </main>
    <?php include "includes/footer.php"; ?>
  </body>
</html>
