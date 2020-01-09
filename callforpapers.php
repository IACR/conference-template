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

      <h3 class="pageSubtitle">General Information</h3>
      <!-- this is for Crypto 2020. Modify to suit -->
      <p>
        <span class="conf_name"><?php echo $META['shortName'];?></span> will take place in <span class="conf_location"><?php echo $META['location'];?></span> on <span class="conf_dates"><?php echo $META['dates'];?></span>. <span class="conf_name"><?php echo $META['shortName'];?></span> is organized by <a href="http://iacr.org/">the International Association for Cryptologic Research</a> (IACR).
        The proceedings will be published by Springer in the LNCS series.
      </p>
      <p>
        Original contributions on all technical aspects of
        cryptology are solicited for submission to Crypto 2020,
        the 40th Annual International Cryptology
        Conference. Submissions are welcomed on any cryptographic
        topic including, but not limited to:
      </p>
      <ul>
        <li>foundational theory and mathematics</li>
        <li>the design, proposal, and analysis of cryptographic primitives and protocols</li>
        <li>secure implementation and optimization in hardware or software; and applied aspects of cryptography</li>
      </ul>
      <div class="row mt-4">
        <section class="col-lg-6">
          <h3 class="pageSubtitle">
            Schedule
          </h3>
          <p>
            <span class="conf_name"><?php echo $META['shortName'];?></span> will operate a two-round review system with rebuttal phase. In the first round, the program committee selects the submissions which are considered of value for proceeding to the second round, and the authors receive the first round notification with review comments. The authors of the selected submissions are invited to submit a text-based rebuttal letter to the review comments.
          </p>
          <p>
            The submissions that have not been selected during the first round of reviews may be submitted in other conferences after the first round notification date.
          </p>
          <p>
            In the second round the program committee further reviews the selected submissions by taking into account their rebuttal letter. They then make the final decision of acceptance or rejection.
          </p>
        </section>
        <div class="col-lg-6 mt-3 mt-lg-0">
          <article class="customCard">
            <h4 class="customCardHeader">
              Important Dates
            </h4>
            <div class="customCardRow row">
              <h6 class="dateTitle col-5 col-md-4">
                Feb 11 2020
              </h6>
              <p class="col-7 col-md-8">
                Submission deadline at 21:00 UTC
              </p>
            </div>
            <div class="customCardRow row">
              <h6 class="dateTitle col-5 col-md-4">
                March 27 2020
              </h6>
              <p class="col-7 col-md-8">
                First round notification
              </p>
            </div>
            <div class="customCardRow row">
              <h6 class="dateTitle col-5 col-md-4">
                April 3 2020
              </h6>
              <p class="col-7 col-md-8">
                Rebuttal deadline
              </p>
            </div>
            <div class="customCardRow row">
              <h6 class="dateTitle col-5 col-md-4">
                May 8 2020
              </h6>
              <p class="col-7 col-md-8">
                Final notification
              </p>
            </div>
            <div class="customCardRow row">
              <h6 class="dateTitle col-5 col-md-4">
                June 15 2020
              </h6>
              <p class="col-7 col-md-8">
                Final version due
              </p>
            </div>
            <div class="customCardRow row">
              <h6 class="dateTitle col-5 col-md-4">
                Sept 1 2050
              </h6>
              <p class="col-7 col-md-8">
                Conference begins
              </p>
            </div>
            <div class="customCardFooter">
              <img src="images/icons/exclamation.svg" class="icon" /> For further details, consult the <a href="papersubmission.php">paper submission page</a>.
            </div>
          </article>
        </div>
      </div>


      <div class="row mt-4">
        <section class="col-md-6">
          <h3 class="pageSubtitle">
            Awards
          </h3>
          <p>
            The Program Committee may choose a paper to receive an
            overall best paper award. In a continuing effort to
            promote independent work by researchers at an early stage
            in their career, the Program Committee may also award a
            prize for the best paper authored exclusively by
            early-career researchers. To be eligible, all co-authors
            must be studying full/part-time or have received their
            degree in 2018 or later. As usual, awards will only be
            given if deserving papers are identified.
          </p>
        </section>
        <section class="col-md-6">
          <h3 class="pageSubtitle">
            Stipends
          </h3>
          <p>
            Students whose papers have been accepted and who present their talks at the conference will have their registration waived. A limited number of stipends are available to those unable to obtain funding to attend the conference. Students, whose papers are accepted and who will present the paper themselves, are encouraged to apply if such assistance is needed. Requests for stipends should be sent to the general chair.
          </p>
        </section>
      </div>
      <h3 class="pageSubtitle">Paper submissions</h3>
      <p>
        Author instructions for paper submission are on the <a href="papersubmission.php">submissions page</a>.
      </p>

      <h3 class="pageSubtitle mt-4">
        Sample Program Committee
      </h3>

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
            University of Peer Review<br/>
            China
          </p>
        </aside>
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            World-Famous Researcher
          </h4>
          <p class="text-center">
            Institute for the Advancement of Causative Research<br/>
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
            Synonym College<br/>
            Romania
          </p>
        </aside>
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            Ellis Papers
          </h4>
          <p class="text-center">
            Society for Promotion of Encryption<br/>
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
