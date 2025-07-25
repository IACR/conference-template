<!DOCTYPE html>
<html lang="en">

<head>
  <?php // The header includes the head tag and start of body
  require "includes/head.php";
  ?>
  <meta property="og:title" content="<?php echo $META['shortName']; ?> call for papers" />
  <meta name="twitter:title" content="<?php echo $META['shortName']; ?> call for papers" />

  <title>
    <?php echo $META['shortName']; ?> Call for Papers
  </title>
</head>

<body>
  <?php require "includes/nav.php"; ?>

  <main class="container-lg px-4 px-lg-0">
    <h2 class="indPageTitle">
      Call for Papers
    </h2>

    <div class="row">
      <section class="col-lg-8">
        <h3 class="pageSubtitle">
          General information
        </h3>
        <p>
          <?php echo $META['shortName']; ?> will take place in
          <?php echo $META['location']; ?> on <?php echo $META['dates']; ?>.
          <?php echo $META['shortName']; ?> is organized by
          <a href="https://iacr.org/">the International Association for
            Cryptologic Research</a> (IACR). The proceedings will be published
          by Springer in the LNCS series.
        </p>
        <p>
          Original contributions on all technical aspects of
          cryptology are solicited for submission to
          <?php echo $META['shortName']; ?>, the <?php echo $META['name']; ?>.
          Submissions are welcomed on any cryptographic topic including but
          not limited to:
        </p>
        <ul>
          <li>foundational theory and mathematics</li>
          <li>the design, proposal, and analysis of cryptographic
            primitives and protocols</li>
          <li>secure implementation and optimization in hardware or
            software</li>
          <li>applied aspects of cryptography</li>
        </ul>
      </section>
      <aside class="col-lg-4 ps-lg-5 text-center">
        <h3 class="pageSubtitle mt-4 mt-lg-0">
          How to submit
        </h3>
        <p class="text-center">
          Author instructions for paper submission may be found on the
          submission page. Don't forget to read 
          <a href="aipolicy.php">our policy on the use of AI tools by authors</a>.
        </p>
        <a href="papersubmission.php" class="btn customBtn-warm blockBtn mb-5 mb-lg-0">
          Submit a paper
        </a>

        <!-- NOTE: once submissions are closed, uncomment below and comment
          out or remove the p and a above -->
        <!-- <p class="alert customAlert-warm text-center">
            Submissions are closed
          </p> -->
      </aside>
    </div>

    <div class="row">
      <div class="col-lg-7 mt-4">
        <?php require "includes/important_dates.php"; ?>
      </div>
      <section class="col-lg-5 mt-4">
        <h3 class="pageSubtitle">
          Schedule
        </h3>
        <p>
          <?php echo $META['shortName']; ?> will operate a two-round review
          system with rebuttal phase. In the first round, the program
          committee selects the submissions which are considered of value for
          proceeding to the second round, and the authors receive the first
          round notification with review comments. The authors of the
          selected submissions are invited to submit a text-based rebuttal
          letter to the review comments.
        </p>
        <p>
          The submissions that have not been selected during the first round
          of reviews may be submitted in other conferences after the first
          round notification date.
        </p>
        <p>
          In the second round the program committee further reviews the
          selected submissions by taking into account their rebuttal letter.
          They then make the final decision of acceptance or rejection.
        </p>
      </section>
    </div>


    <div class="row">
      <section class="col-md-6">
        <h3 class="pageSubtitle mt-4">
          Awards
        </h3>
        <p>
          The Program Committee may choose a paper to receive an overall best
          paper award. In a continuing effort to promote independent work by
          researchers at an early stage in their career, the Program
          Committee may also award a prize for the best paper authored
          exclusively by early-career researchers. To be eligible, all
          co-authors must be studying full/part-time or have received their
          degree in 2019 or later. As usual, awards will only be given if
          deserving papers are identified.
        </p>
      </section>
      <section class="col-md-6">
        <h3 class="pageSubtitle mt-4">
          Stipends
        </h3>
        <p>
          Students whose papers have been accepted and who present their
          talks at the conference will have their registration waived. A
          limited number of stipends are available to those unable to obtain
          funding to attend the conference. Students, whose papers are
          accepted and who will present the paper themselves, are encouraged
          to apply if such assistance is needed. Requests for stipends should
          be sent to the general chair(s).
        </p>
      </section>
    </div>

    <h3 class="pageSubtitle mt-4">
      Program committee
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
            <h6>
              {{affiliation}}<br>
              <small>{{country}}</small>
            </h6>
          </article>
        {{/each}}
      </script>
    </div>

    <div id="areaChair" class="row">
      <script id="area-chair" type="text/x-handlebars-template">
        {{#if area_chairs}}
          <h3 class="pageSubtitle mt-4">
            Area chairs
          </h3>
          {{#each area_chairs}}
            <article class="col-12 col-sm-6 col-md-4 col-xl-3 my-2">
              <h4 class="subSubtitle">
                {{name}}
              </h4>
              <p class="text-start">
                {{affiliation}}
              </p>
            </article>
          {{/each}}
        {{/if}}
      </script>
    </div>

    <div id="artifactChair" class="row">
      <script id="artifact-chair" type="text/x-handlebars-template">
        {{#if artifact_chairs}}
          <h3 class="pageSubtitle mt-4">
            Artifact chair
          </h3>
          {{#each artifact_chairs}}
            <article class="col-12 col-sm-6 col-md-4 col-xl-3 my-2">
              <h4 class="subSubtitle">
                {{name}}
              </h4>
              <p class="text-start">
                {{affiliation}}
              </p>
            </article>
          {{/each}}
        {{/if}}
      </script>
    </div>

    <!-- To add/edit contact information, please edit names and affiliations in
      json/metadata.json -->
    <h3 class="pageSubtitle text-center mt-4">
      Program co-chairs
    </h3>

    <div class="row mt-3 mt-md-4">
      <?php
      $theClass = count($META['PC_CHAIRS']) == 1 ? 'col-12' : 'col-12 col-sm-6';
      foreach ($META['PC_CHAIRS'] as $person) {
        $name = $person['name'];
        $affiliation = $person['affiliation'];
        $country = $person['country'];
        echo <<< EOR
            <aside class="$theClass text-center mb-2">
              <h4 class="subSubtitle">
                $name
              </h4>
              <h6>
                $affiliation<br>
                <small>$country</small>
              </h6>
            </aside>
            EOR;
      }
      ?>
    </div>

    <div class="row">
      <div class="col-12 text-center mb-5">
        <a href="mailto:doNotEmailMe@fakeDomain.com">
          <img src="images/icons/mail.svg" class="icon" />
        </a> doNotEmailMe@fakeDomain.com
      </div>
    </div>

    <!-- To add/edit contact information, please edit names and affiliations in
      json/metadata.json -->
    <h3 class="pageSubtitle text-center mt-4">
      General co-chairs
    </h3>

    <div class="row mt-3 mt-md-4">
      <?php
      $theClass = count($META['GENERAL_CHAIRS']) == 1 ? 'col-12' : 'col-12 col-sm-6';
      foreach ($META['GENERAL_CHAIRS'] as $person) {
        $name = $person['name'];
        $affiliation = $person['affiliation'];
        $country = $person['country'];
        echo <<< EOR
            <aside class="$theClass text-center mb-2">
              <h4 class="subSubtitle">
                $name
              </h4>
              <h6>
                $affiliation<br>
                <small>$country</small>
              </h6>
            </aside>
            EOR;
      }
      ?>
    </div>

    <div class="row">
      <div class="col-12 text-center mb-5">
        <a href="mailto:reallyDoNotEmailMe@fakeDomain.com">
          <img src="images/icons/mail.svg" class="icon" />
        </a> reallyDoNotEmailMe@fakeDomain.com
      </div>
    </div>

  </main>

  <?php include "includes/footer.php"; ?>

  <!-- Handlebars -->
  <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js" type="text/javascript"></script>
  <!-- Personal scripts -->
  <script src="js/committee.js"></script>

</body>

</html>