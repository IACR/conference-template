<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> registration"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> registration"/>

    <title>
      <?php echo $META['shortName'];?> Registration
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Registration
      </h2>

      <p>
        The IACR board has decided that this virtual conference will be free, but
attendees are required to pay the IACR membership fee if they have not already in 2020.
      </p>
      <div class="row mt-3">
        <section class="col-12" id="regTable">
          <div class="row" id="regTopRow">
            <div class="col-6">
              <p class="regTitle">
                Registration Cost
              </p>
            </div>
            <div class="col-3">
              <p class="regTitle">
                Regular
              </p>
            </div>
            <div class="col-3">
              <p class="regTitle">
                Student
              </p>
            </div>
          </div>

          <div class="row" id="regBodyRow">
            <div class="col-6">
              <p class="regBodyText">
                Registration Fee + IACR dues
              </p>
            </div>
            <div class="col-3">
              <p class="priceText">
                $50
              </p>
            </div>
            <div class="col-3">
              <p class="priceText">
                $25
              </p>
            </div>
          </div>


          <div class="row">
            <div class="col-6">
              <p class="regBodyText">
                Attended prior 2020 IACR conferences or workshops
              </p>
            </div>
            <div class="col-3">
              <p class="priceText">
                $0
              </p>
            </div>
            <div class="col-3">
              <p class="priceText">
                $0
              </p>
            </div>
          </div>

        </section>
      </div>

      <div class="row mt-4">
        <section class="col-md-6">
          <h3 class="pageSubtitle">What the Conference Fee Includes</h3>
          <p>
            The conference registration fee includes participation in the technical program,
            as well as access to the conference proceedings. This year's virtual conference is
            expected to involve live webinars, a live chat forum, and static videos.
          </p>
        </section>
        <section class="col-md-6">
          <h3 class="pageSubtitle">An Important Note for Students</h3>
          <p>

            If you are a student presenting at <span class="conf_name"><?php echo $META['shortName'];?></span>,
            your registration fee will be covered by the Cryptography Research Fund for Student Presenters; you do not need to pay for registration. Please contact the General Chair before registration to obtain a registration waiver token.
          </p>
        </section>
      </div>

      <h3 class="text-center alert alert-info">
        Registration is not open yet
      </h3>
<!--      <div class="row">
        <aside class="col-sm-6 mx-auto text-center">
          <a href="https://secure.iacr.org/conferences/eurocrypt2020/register" class="btn btn-lg btn-warning btn-block regBtn" role="button">Register now!</a>
        </aside>
      </div>-->

      <div class="row mt-5">
        <section class="col-md-6">
          <h3 class="pageSubtitle">Additional Information</h3>
          <p>
            IACR dues are $50 for regular attendees and $25 for student attendees.
          </p>
          <p>
            It will be possible to register up until the last day of the conference, May 15 2020.
          </p>
        </section>
        <section class="col-md-6">
          <h3 class="pageSubtitle">IACR Policy for Proceedings</h3>
          <p>
            Proceedings will be made available online to attendees.
          </p>
          <p>
            If you would like to obtain a printed copy of the proceedings, these can be purchased directly from Springer.
          </p>
        </section>
      </div>

      <div class="row mt-4">
        <section class="col-md-6">
          <h3 class="pageSubtitle">Refund Policy</h3>
          <p>
            Due to the nature of a virtual conference, no cancellations will be accepted.
          </p>
        </section>
      </div>
    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
