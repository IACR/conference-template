<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> rump session"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> rump session"/>

    <title>
      <?php echo $META['shortName'];?> Rump Session
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Rump Session
      </h2>

      <!-- NOTE: below is standard placeholder text for when the page is under
      construction. IACR does not have a standard way to organize rump session
      submissions,  but we encourage you to use the program editor to create
      your program: https://iacr.org/tools/program and then copy stuff from
      program.php and js/program.js. If you're having trouble or have
      questions, contact Kay McKelly. -->
      <p>
        This information is not yet available, but will become
        available prior to the conference start date.
        Thank you for your patience.
      </p>

      <!-- NOTE: uncomment the below section when you're ready to add the rump
      session program -->
      <!--
      <h3 class="pageSubtitle">
        Rump Session Program
      </h3>
      <div class="text-center">
        <a class="btn customBtn-cool my-3" href="#">YouTube Recording</a>
      </div>
      <div id="renderedProgram">
      </div>
      -->

      <!-- NOTE: uncomment the below section when you're ready to add
      submission guidelines -->
      <!--
      <h3 class="pageSubtitle">
        Call for Contributions
      </h3>
      <p>
        some very cool and real text about submitting your schtick
      </p>

      <h3 class="pageSubtitle">
        Submission Guidelines
      </h3>
      <div class="row">
        <div class="col-md-7">
          <p>
            <strong>Time constraints:</strong> 1-5 minutes, 6 minutes if very funny
          </p>
          <p>
            <strong>Submission deadline:</strong> <span class="editMe">Monday
            17 August 2020 18:30:00 UTC</span>
          </p>
        </div>
        <div class="col-md-5">
          <a href="#" class="btn customBtn-warm btn-block mt-3 mb-5 mb-md-3">
            Submit a talk
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h3 class="pageSubtitle">
            Platform
          </h3>
          <p>
            probably a stage or something, you don't have to bring your own
            microphone though so that's lucky
        </div>
        <div class="col-md-6">
          <h3 class="pageSubtitle">
            Format
          </h3>
          <p>
            more info and details
          </p>
        </div>
      </div>

      <h3 class="pageSubtitle">
        Detailed Instructions
      </h3>
      <p>
        even more info, for the exacting rump session chair
      </p>

      <div class="alert alert-danger">
        <img src="images/icons/exclamation.svg" class="icon" />
        <strong>A final reminder: do not play copyrighted music as part of your
        talks. Yes, we're serious. Yes, we know it's a bummer. Since the rump
        session is recorded and posted on YouTube, if you play copyrighted
        music, the IACR YouTube account is at risk of being shut down. Please
        don't put us at risk!</strong>
      </div>

      <h3 class="pageSubtitle text-center mt-4">
        Rump Session Chairs
      </h3>
      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-sm-6 col-md-4 text-center mb-2">
          <h4 class="subSubtitle">
            Cool human #1
          </h4>
          <p class="text-center">
            Trashcan University<br>
            The Falklands
          </p>
        </aside>
        <aside class="col-12 col-sm-6 col-md-4 text-center mb-2">
          <h4 class="subSubtitle">
            Cool human #2
          </h4>
          <p class="text-center">
            Beep Boop University<br>
            Robotlandia
          </p>
        </aside>
        <aside class="col-12 col-sm-6 col-md-4 mx-auto text-center mb-2">
          <h4 class="subSubtitle">
            Cool human #3
          </h4>
          <p class="text-center">
            Institute of Definitely Real Research<br>
            Switzerland
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <a href="mailto:veryRealEmail@iacr.org">
            <img src="images/icons/email.svg" class="icon" />
          </a>&nbsp;
          veryRealEmail@iacr.org
        </div>
      </div>
      -->

    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
