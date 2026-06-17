<!DOCTYPE html>
<html lang="en">

<head>
  <?php // The header includes the head tag and start of body
  require "includes/head.php";
  ?>
  <meta property="og:title" content="<?php echo $META['shortName']; ?> sponsors" />
  <meta name="twitter:title" content="<?php echo $META['shortName']; ?> sponsors" />

  <title>
    <?php echo $META['shortName']; ?> Sponsors
  </title>

  <style>
    .gold {
      position: relative;
      display: inline-block;
      border: 2px solid rgb(247, 229, 166);
      border-left: 8px solid rgb(247, 229, 166);
      min-height: 200px;
      border-radius: 6px;
    }

    .gold::before {
      content: "Gold sponsors";
      position: absolute;
      left: -33px;
      writing-mode: vertical-lr;
      transform: rotate(-180deg);
      white-space: nowrap;
      color: rgb(247, 229, 166);
      font-size: 1.3em;
      font-weight: bold;
    }

    .silver {
      position: relative;
      display: inline-block;
      border: 2px solid rgb(207, 212, 221);
      border-left: 8px solid rgb(207, 212, 221);
      min-height: 200px;
      border-radius: 6px;
    }

    .silver::before {
      content: "Silver sponsors";
      position: absolute;
      left: -33px;
      writing-mode: vertical-lr;
      transform: rotate(-180deg);
      white-space: nowrap;
      color: rgb(207, 212, 221);
      font-size: 1.3em;
      font-weight: bold;
    }

    .silver img {
      max-width: 300px;
      max-height: 120px;
    }

    .bronze {
      position: relative;
      display: inline-block;
      border: 2px solid rgb(220, 175, 133);
      border-left: 8px solid rgb(220, 175, 133);
      min-height: 200px;
      border-radius: 6px;
    }

    .bronze::before {
      content: "Bronze sponsors";
      position: absolute;
      left: -33px;
      writing-mode: vertical-lr;
      transform: rotate(-180deg);
      white-space: nowrap;
      color: rgb(220, 175, 133);
      font-size: 1.3em;
      font-weight: bold;
    }

    /* if more padding than usual is needed than what sponsorPageLogo provides */
    .maxiPad {
      padding: 3.5rem !important;
    }
  </style>
</head>

<body>
  <?php require "includes/nav.php"; ?>

  <main class="container-lg px-4 px-lg-0">
    <h2 class="indPageTitle">
      Sponsors
    </h2>

    <p>
      <?php echo $META['shortName']; ?> relies on sponsors to help ensure
      student participation. Please contact the
      <a href="contact.php">general chair(s)</a> if your company is
      interested in sponsoring this conference.
    </p>

    <div class="d-flex flex-wrap align-items-center sponsorRows gold">
      <div class="sponsorLogoBox justify-content-between">
        <a href="https://kaymckelly.com" target="_blank">
          <img src="images/sponsors/algorand.jpg" alt="NAME" title="NAME" class="sponsorPageLogo">
        </a>
      </div>
      <div class="sponsorLogoBox justify-content-between">
        <a href="https://kaymckelly.com" target="_blank">
          <img src="images/sponsors/aws.png" alt="NAME" title="NAME" class="sponsorPageLogo">
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

    <div class="d-flex flex-wrap align-items-center sponsorRows silver mt-4">
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
    </div>

    <div class="d-flex flex-wrap align-items-center sponsorRows bronze mt-4">
      <div class="sponsorLogoBox justify-content-between">
        <a href="https://kaymckelly.com" target="_blank">
          <img src="images/sponsors/algorand.jpg" alt="NAME" title="NAME" class="sponsorPageLogo">
        </a>
      </div>
      <div class="sponsorLogoBox justify-content-between">
        <a href="https://kaymckelly.com" target="_blank">
          <img src="images/sponsors/aws.png" alt="NAME" title="NAME" class="sponsorPageLogo">
        </a>
      </div>
      <div class="sponsorLogoBox justify-content-between">
        <a href="https://kaymckelly.com" target="_blank">
          <img src="images/sponsors/nsf.gif" alt="NAME" title="NAME" class="sponsorPageLogo">
        </a>
      </div>
    </div>
  </main>

  <?php include "includes/footer.php"; ?>
</body>

</html>