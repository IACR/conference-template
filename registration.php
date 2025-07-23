<!DOCTYPE html>
<html lang="en">

<head>
  <?php // The header includes the head tag and start of body
  require "includes/head.php";
  ?>
  <meta property="og:title" content="<?php echo $META['shortName']; ?> registration" />
  <meta name="twitter:title" content="<?php echo $META['shortName']; ?> registration" />

  <title>
    <?php echo $META['shortName']; ?> Registration
  </title>
</head>

<body>
  <?php require "includes/nav.php"; ?>

  <main class="container-lg px-4 px-lg-0">
    <h2 class="indPageTitle">
      Registration
    </h2>

    <p>
      This information is not yet available. Thank you for your patience.
    </p>

    <div class="row mt-3">
      <section class="col-11 mx-auto" id="regTable">
        <div class="row" id="regTopRow">
          <div class="col-6">
            <h6 class="regTitle">
              Registration Cost
            </h6>
          </div>
          <div class="col-3">
            <h6 class="regTitle">
              Regular
            </h6>
          </div>
          <div class="col-3">
            <h6 class="regTitle">
              Student
            </h6>
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
              Attended prior <?php echo date("Y"); ?> IACR conferences
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
    </div> <!-- end reg table proper -->

    <div class="row">
      <div id="regFoot" class="mx-auto col-11">
        <p class="text-center">
          <img src="images/icons/alert-triangle.svg" class="icon" /> People who
          register for the conference agree to abide by the
          <a href="conduct.php">IACR code of conduct</a>.
        </p>
      </div>
    </div>

    <!-- NOTE: if you'd rather use this than have it attached as a footer to the reg table, or if you have another 
  notification in that, uncomment the p element below -->
    <!-- <p class="alert customAlert-warm mt-4">
      <img src="images/icons/alert-triangle.svg" class="icon" /> People who
      register for the conference agree to abide by the
      <a href="conduct.php">IACR code of conduct</a>.
    </p> -->

    <div class="row mb-3">
      <section class="col-md-6">
        <h3 class="pageSubtitle mt-4">
          What the conference fee includes
        </h3>
        <p>
          The conference registration fee includes participation in the
          technical program, all social functions, and an electronic copy of
          the conference proceedings. Accompanying guests can also be
          registered for participation in the conference social functions.
          Guests who only want to attend one or two events can register
          onsite.
        </p>
        <p>
          Two conferences are located in <?php echo $META['location']; ?> on
          <?php echo $META['dates']; ?>. If you are interested in attending
          both <?php echo $META['shortName']; ?> and affiliated events, there is a $50 joint registration
          discount ($25 off each conference) for regular registrations.
          Student joint registrations are discounted by $100 ($50 off each
          conference).
        </p>
      </section>
      <section class="col-md-6">
        <h3 class="pageSubtitle mt-4">
          Important note for students
        </h3>
        <p>
          If you are a student presenting at <?php echo $META['shortName']; ?>,
          your registration fee will be covered by the Cryptography Research
          Fund for Student Presenters. Please contact the general chair(s)
          before registering to obtain a registration waiver token.
        </p>
        <p>
          A limited number of stipends will be available to students who are
          not presenting a paper and are unable to obtain funding to attend
          the conference. Students in under-represented groups are especially
          encouraged to apply. To apply, please ask your PhD supervisor or
          Department Head to email a brief justification to the
          <a href="contact.php">general chair(s)</a> before LATE REG DATE.
        </p>
      </section>
    </div>

    <div class="row">
      <aside class="col-sm-6 mx-auto text-center">
        <h5>
          <strong>Registration is not currently available. This button will
            become active when registration opens.</strong>
        </h5>
        <a href="#" class="btn btn-lg customBtn-warm blockBtn disabled mb-3" role="button">
          Register now!
        </a>
      </aside>
    </div>

    <div class="row">
      <section class="col-md-6">
        <h3 class="pageSubtitle mt-4">
          Additional information
        </h3>
        <p>
          IACR dues are $50 for regular attendees and $25 for student
          attendees.
        </p>
        <p>
          All attendees who register after DATE
          will incur a $100 late registration surcharge.
        </p>
        <p>
          Fee for an accompanying person will be $150.
        </p>
        <p>
          It will be possible to register on-site at the registration desk
          on the first day of the conference, beginning at 8 a.m.
        </p>
      </section>
      <section class="col-md-6">
        <h3 class="pageSubtitle mt-4">
          IACR policy for proceedings
        </h3>
        <p>
          Proceedings will be made available online to attendees. If you
          would like to obtain a printed copy of the proceedings, please
          select the option during registration and pay $80 for each
          proceedings.
        </p>
      </section>
    </div>

    <div class="row">
      <section class="col-md-6">
        <h3 class="pageSubtitle mt-4">
          Refund policy
        </h3>
        <p>
          Cancellation requests should be made in writing or email to the
          conference general chair(s). Those received by 30 days prior to the
          conference will receive a full refund less $100 to cover fixed
          costs for the conference. No refunds will be made for cancellations
          after this date.
        </p>
      </section>
      <section class="col-md-6">
        <h3 class="pageSubtitle mt-4">
          Housing
        </h3>
        <p>
          Conference registration and on-site housing registration are now
          separate processes. To learn more about housing options, visit the
          <a href="travel.php">travel</a> page.
        </p>
      </section>
    </div>

  </main>

  <?php include "includes/footer.php"; ?>
</body>

</html>