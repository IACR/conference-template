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
        This information is not yet available. Thank you for your patience.
      </p>

      <!-- 
      <p class="editMe">
         Below is sample information, derived from CRYPTO 2016.
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
                (NOT attending CHES)
              </p>
            </div>
            <div class="col-3">
              <p class="priceText">
                TBD
              </p>
            </div>
            <div class="col-3">
              <p class="priceText">
                TBD
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <p class="regBodyText">
                Registration Fee + IACR dues (attending CHES)
              </p>
            </div>
            <div class="col-3">
              <p class="priceText">
                TBD
              </p>
            </div>
            <div class="col-3">
              <p class="priceText">
                TBD
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <p class="regBodyText">
                Attended prior 2017 IACR conferences or workshops (NOT attending CHES)
              </p>
            </div>
            <div class="col-3">
              <p class="priceText">
                TBD
              </p>
            </div>
            <div class="col-3">
              <p class="priceText">
                TBD
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <p class="regBodyText">
                Attended prior 2017 IACR conferences or workshops (attending CHES)
              </p>
            </div>
            <div class="col-3">
              <p class="priceText">
                TBD
              </p>
            </div>
            <div class="col-3">
              <p class="priceText">
                TBD
              </p>
            </div>
          </div>
        </section>
      </div>

      <div class="row mt-4">
        <section class="col-md-6">
          <h3 class="pageSubtitle">What the Conference Fee Includes</h3>
          <p>
            The conference registration fee includes participation in the technical program, all social functions as well as an electronic copy of the conference proceedings. Accompanying guests can also be registered for participation in the conference social functions. Guests who only want to attend one or two events can register onsite.
          </p>
          <p>
            Two conferences are located in <span class="conf_location"><?php echo $META['location'];?></span> on <span class="conf_dates"><?php echo $META['dates'];?></span>. If you are interested in attending both <span class="conf_name"><?php echo $META['shortName'];?></span> and CHES, there is a $50 joint registration discount ($25 off each conference) for regular registrations. Student joint registrations are discounted by $100 ($50 off each conference).
          </p>
        </section>
        <section class="col-md-6">
          <h3 class="pageSubtitle">An Important Note for Students</h3>
          <p>
            If you are a student presenting at <span class="conf_name"><?php echo $META['shortName'];?></span>, your registration fee will be covered by the IACR Fund for Student Presenters; you do not need to pay for registration. Please register for the conference but do not submit any payment. After registering, send an email to the <a href="mailto:doNotEmailMe@fakeDomain.com">General Chair</a>, explaining that you are a student presenter and have already registered. More information is available <a href="./stipends.php">here</a>.
          </p>
        </section>
      </div>

      <div class="row">
        <aside class="col-sm-6 mx-auto text-center">
          <h5>
            <strong>Registration is not currently available. This button will become active when registration opens.</strong>
          </h5>
          <a href="https://secure.iacr.org/conferences/tcc2017b/register/" class="btn btn-lg btn-warning btn-block regBtn disabled" role="button">Register now!</a>
        </aside>
      </div>

      <div class="row mt-5">
        <section class="col-md-6">
          <h3 class="pageSubtitle">Additional Information</h3>
          <p>
            IACR dues are $50 for regular attendees and $25 for student attendees.
          </p>
          <p>
            All attendees who register after August 20th 2050 will incur a $100 late registration surcharge.
          </p>
          <p>
            Fee for an accompanying person will be $150.
          </p>
          <p>
            It will be possible to register on-site at the registration desk on the first day of the conference, beginning at 8 a.m.
          </p>
        </section>
        <section class="col-md-6">
          <h3 class="pageSubtitle">IACR Policy for Proceedings</h3>
          <p>
            Proceedings will be made available online to attendees. There will not be a USB key this year.
          </p>
          <p>
            If you would like to obtain a printed copy of the proceedings, please select the option during registration and pay $80 for each proceedings.
          </p>
        </section>
      </div>

      <div class="row mt-4">
        <section class="col-md-6">
          <h3 class="pageSubtitle">Refund Policy</h3>
          <p>
            Cancellation requests should be made in writing or email to the conference general chair. Those received by 30 days prior to the conference will receive a full refund less $100 to cover fixed costs for the conference. No refunds will be made for cancellations after this date.
          </p>
        </section>
        <section class="col-md-6">
          <h3 class="pageSubtitle">Housing</h3>
          <p>
            Conference registration and on-site housing registration are now separate processes. To learn more about housing options, visit the <a href="./travel.php">travel</a> page.
          </p>
        </section>
      </div>
      -->
    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
