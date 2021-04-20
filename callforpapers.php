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
            <?php echo $META['shortName'];?> will take place in
            <?php echo $META['location'];?> on <?php echo $META['dates'];?>.
            <?php echo $META['shortName'];?> is organized by
            <a href="https://iacr.org/">the International Association for
            Cryptologic Research</a> (IACR). The proceedings will be published
            by Springer in the LNCS series.
          </p>
          <p>
            Original contributions on all technical aspects of
            cryptology are solicited for submission to
            <?php echo $META['shortName'];?>, the <?php echo $META['name'];?>.
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
        <aside class="col-lg-4 pl-lg-5 text-center">
          <h3 class="pageSubtitle">
            How to Submit
          </h3>
          <p class="text-center">
            Author instructions for paper submission may be found on the
            submission page.
          </p>
          <a href="papersubmission.php" class="btn customBtn-warm btn-block">
            Submit a paper
          </a>

          <!-- NOTE: once submissions are closed, uncomment below and comment
          out or remove the p and a above -->
          <!-- <p class="alert customAlert-warm text-center">
            Submissions are closed
          </p> -->
        </aside>
      </div>

      <div class="row mt-4">
        <div class="col-lg-6 mt-3 mt-lg-0">
          <?php require "includes/important_dates.php";?>
        </div>
        <section class="col-lg-6">
          <h3 class="pageSubtitle">
            Schedule
          </h3>
          <p>
            <?php echo $META['shortName'];?> will operate a two-round review
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


      <div class="row mt-lg-4">
        <section class="col-md-6">
          <h3 class="pageSubtitle">
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
          <h3 class="pageSubtitle">
            Stipends
          </h3>
          <p>
            Students whose papers have been accepted and who present their
            talks at the conference will have their registration waived. A
            limited number of stipends are available to those unable to obtain
            funding to attend the conference. Students, whose papers are
            accepted and who will present the paper themselves, are encouraged
            to apply if such assistance is needed. Requests for stipends should
            be sent to the general chair.
          </p>
        </section>
      </div>

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
        General Co-Chairs
      </h3>

      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            Important Professor #1
          </h4>
          <p class="text-center">
            University of Peer Review<br>
            China
          </p>
        </aside>
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            World-Famous Researcher
          </h4>
          <p class="text-center">
            Institute for the Advancement of Causative Research<br>
            Singapore
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:doNotEmailMe@fakeDomain.com">
            <img src="images/icons/email.svg" class="icon" />
          </a>&nbsp;
          doNotEmailMe@fakeDomain.com
        </div>
      </div>

      <h3 class="pageSubtitle text-center mt-4">
        Program Co-Chairs
      </h3>

      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            SmartGuy McWriter
          </h4>
          <p class="text-center">
            Synonym College<br>
            Romania
          </p>
        </aside>
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            Ellis Papers
          </h4>
          <p class="text-center">
            Society for Promotion of Encryption<br>
            Senegal
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <a href="mailto:reallyDoNotEmailMe@fakeDomain.com">
            <img src="images/icons/email.svg" class="icon" />
          </a>&nbsp;
          reallyDoNotEmailMe@fakeDomain.com
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
