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

      <!-- NOTE: below is standard placeholder text for when the page is under construction. please delete this entire <div class="row"> and all elements contained within it when ready to add other content -->
      <div class="row">
        <div class="col-12">
          <p>
            This information is not yet available. Thank you for your patience. If it were available, this is what this page might look like.
          </p>
        </div>
      </div>

      <!-- NOTE: below is placeholder content. please uncomment and replace with your own content when ready. -->
      <div class="row">
        <section class="col-12">
          <p>
            <span class="conf_name"><?php echo $META['shortName'];?></span> relies on sponsors to help ensure student participation. Please contact the <a href="./contact.php">General Chair</a> if your company is interested in sponsoring this conference.
          </p>
        </section>
      </div>

      <h3 class="pageSubtitle mt-4">
        Platinum Level
      </h3>

      <section class="row">
        <div class="col-12 col-md-10 col-lg-6 mx-auto">
          <a href="http://kaymckelly.com">
            <img src="./images/demo/logo1.jpg" alt="fake company 1" class="sponsorPageLogo">
          </a>
          <div class="caption">
            <p class="lead text-center">
              Scribble Circle Inc
            </p>
            <p>
              This company is not a real sponsor, nor is it a real company.
            </p>
          </div>
        </div>
        <div class="col-12 col-md-10 col-lg-6 mx-auto">
          <a href="http://kaymckelly.com">
            <img src="./images/demo/logo2.jpg" alt="fake company 1" class="sponsorPageLogo">
          </a>
          <div class="caption">
            <p class="lead text-center">
              The Shouty Corporation
            </p>
            <p>
              This company is not a real sponsor, nor is it a real company. But if it were, I'd probably register this name because that would be pretty funny. Perhaps <a href="http://kaymckelly.com">my main domain</a> is in for a name change?
            </p>
          </div>
        </div>
      </section>

      <hr />

      <h3 class="pageSubtitle mt-4">
        Gold Level
      </h3>

      <section class="row">
        <div class="col-10 col-md-6 col-lg-4 mx-auto">
          <a href="http://kaymckelly.com">
            <img src="./images/demo/logo5.jpg" alt="fake company 2" class="sponsorPageLogo">
          </a>
          <div class="caption">
            <p class="lead text-center">
              Seattle Umbrella Co
            </p>
            <p>
              This company is not a real sponsor, nor is it a real company. Though it could be, given how much it rains in Seattle.
            </p>
          </div>
        </div>
        <div class="col-10 col-md-6 col-lg-4 mx-auto">
          <a href="http://kaymckelly.com">
            <img src="./images/demo/logo4.jpg" alt="fake company 2" class="sponsorPageLogo">
          </a>
          <div class="caption">
            <p class="lead text-center">
              Fast Talkers Ltd.
            </p>
            <p>
              This company is not a real sponsor, nor is it a real company.
            </p>
          </div>
        </div>
        <div class="col-10 col-md-6 col-lg-4 mx-auto">
          <a href="http://kaymckelly.com">
            <img src="./images/demo/logo5.jpg" alt="fake company 2" class="sponsorPageLogo">
          </a>
          <div class="caption">
            <p class="lead text-center">
              Fake Umbrellas for Tourists
            </p>
            <p>
              This company is not a real sponsor, nor is it a real company. And in case you were wondering what happens if a company's little blurb is a bit longer, this is what that looks like.
            </p>
            <p>
              Additionally, this is what would happen if the blurb were split into two blocks of text, for whatever reason.
            </p>
          </div>
        </div>
      </section>

      <hr />

      <h3 class="pageSubtitle mt-4">
        Silver Level
      </h3>

      <section class="row">
        <div class="col-6 col-md-4 col-lg-3 mx-auto">
          <a href="http://kaymckelly.com">
            <img src="./images/demo/logo6.jpg" alt="fake company 2" class="sponsorPageLogo">
          </a>
          <div class="caption">
            <p class="lead text-center">
              Offset Circles
            </p>
            <p>
              This company is not a real sponsor, nor is it a real company.
            </p>
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mx-auto">
          <a href="http://kaymckelly.com">
            <img src="./images/demo/logo7.jpg" alt="fake company 2" class="sponsorPageLogo">
          </a>
          <div class="caption">
            <p class="lead text-center">
              Waves Inc
            </p>
            <p>
              This company is not a real sponsor, nor is it a real company. And again, if blurb length differs, this is testing what that might look like.
            </p>
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mx-auto">
          <a href="http://kaymckelly.com">
            <img src="./images/demo/logo6.jpg" alt="fake company 2" class="sponsorPageLogo">
          </a>
          <div class="caption">
            <p class="lead text-center">
              Offset Circles
            </p>
            <p>
              This company is not a real sponsor, nor is it a real company.
            </p>
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mx-auto">
          <a href="http://kaymckelly.com">
            <img src="./images/demo/logo7.jpg" alt="fake company 2" class="sponsorPageLogo">
          </a>
          <div class="caption">
            <p class="lead text-center">
              Waves Inc
            </p>
            <p>
              This company is not a real sponsor, nor is it a real company.
            </p>
          </div>
        </div>
      </section>
    </main>
    <?php include "includes/footer.php"; ?>
  </body>
</html>
