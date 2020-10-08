<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> call for papers"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> call for papers"/>

    <title>
      <?php echo $META['shortName'];?> Call for Papers
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Call for Papers
      </h2>

      <div class="row">
        <section class="col-lg-8">
          <h3 class="pageSubtitle">
            General Information
          </h3>
          <p>
            <?php echo $META['shortName'];?>, the <?php echo $META['name'];?>, will take place virtually
            on <?php echo $META['dates'];?>. The conference is organized by
            <a href="http://iacr.org/">the International Association for Cryptologic Research</a> (IACR).
          </p>
        </section>
        <aside class="col-lg-4 pl-lg-5 text-center">
          <h3 class="pageSubtitle">
            Need a PDF?
          </h3>
          <p class="text-center">
            You can download the call for papers as a PDF by clicking the button below.
          </p>
          <a href="cfp/AC20-CFP-v1.6.pdf" class="btn customBtn-warm btn-block">Download PDF</a>

          <!-- NOTE: once submissions are closed, uncomment below and comment out or remove the p and a above -->
          <!-- <p class="alert customAlert-warm text-center">
            Submissions are closed
          </p> -->
        </aside>
      </div>

      <div class="row mt-5">
        <section class="col-lg-6">
          <h3 class="pageSubtitle">
            Schedule
          </h3>
          <p>
            <?php echo $META['shortName'];?> will operate a two-round review system with rebuttal phase.
            In the first round, the program committee selects the submissions which are considered of value for proceeding to the second round,
            and the authors receive the first round notification with review comments. The authors of the selected submissions are invited to
            submit a text-based rebuttal letter to the review comments. In the second round the program committee further reviews the selected
            submissions by taking into account their rebuttal letter, and makes the final decision of acceptance or rejection.
            The submissions that have not been selected during the first round of reviews may be submitted in other conferences after the first
            round notification date.
          </p>
        </section>
        <div class="col-lg-6 mt-3 mt-lg-0">
        <?php require "includes/important_dates.php";?>
        </div>
      </div>

      <h3 class="pageSubtitle mt-3">
        Conference Information and Stipends
      </h3>
      <p>
        The primary source of information is the conference website. Students whose papers have been accepted
        and who present their talks at the conference will have their registration waived. A limited number of
        stipends are available to those unable to obtain funding to attend the conference. Students, whose papers
        are accepted and who will present the paper themselves, are encouraged to apply if such assistance is
        needed. Requests for stipends should be sent to the general chair.
      </p>

      <h3 class="pageSubtitle mt-4">
        Program Committee
      </h3>

      <div id="errorBox"></div>
      <div id="committee" class="row">
        <!-- Handlebars import of PC members -->
        <script id="committee-member" type="text/x-handlebars-template">
          {{#each committee}}
            <article class="col-12 col-sm-6 col-md-4 col-xl-3 my-2">
              <h4 class="subSubtitle">
                {{name}}
              </h4>
              <p class="text-left">
                {{affiliation}}
              </p>
            </article>
          {{/each}}
        </script>
      </div>

      <h3 class="pageSubtitle text-center mt-4">
        General Chair
      </h3>

      <div class="row mt-3 mt-md-4">
        <aside class="col-12 text-center mb-2">
          <h4 class="subSubtitle">
            Kwangjo Kim
          </h4>
          <p class="text-center">
            Korea Advanced Institute of Science and Technology (KAIST)<br>
            Korea
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:asiacrypt2020@iacr.org">
            <img src="images/icons/email.svg" class="icon" />
          </a>&nbsp;
          asiacrypt2020@iacr.org
        </div>
      </div>

      <h3 class="pageSubtitle text-center mt-4">
        Program Co-Chairs
      </h3>

      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            Shiho Moriai
          </h4>
          <p class="text-center">
            Network Security Research Institute (NICT)<br>
            Japan
          </p>
        </aside>
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            Huaxiong Wang
          </h4>
          <p class="text-center">
            Nanyang Technological University<br>
            Singapore
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <a href="mailto:asiacrypt2020programchairs@iacr.org">
            <img src="images/icons/email.svg" class="icon" />
          </a>&nbsp;
          asiacrypt2020programchairs@iacr.org
        </div>
      </div>

    </main>

  <?php include "includes/footer.php"; ?>

    <!-- Handlebars -->
    <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js" type="text/javascript"></script>
    <!-- Personal scripts -->
    <script src="./js/committee.js"></script>

  </body>
</html>
