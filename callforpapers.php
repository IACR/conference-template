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
      <p>
        <span class="conf_name"><?php echo $META['shortName'];?></span> will take place <!--in <span class="conf_location"><?php echo $META['location'];?></span>--> as
        a virtual conference on <span class="conf_dates"><?php echo $META['dates'];?></span>.
        <span class="conf_name"><?php echo $META['shortName'];?></span> is organized by <a href="http://iacr.org/">the International Association for Cryptologic Research</a> (IACR).
        The proceedings will be published by Springer in the LNCS series.
      </p>
      <p>
        Original contributions on all technical aspects of
        cryptology are solicited for submission. Topics include, but are not limited to:
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
        <?php require "includes/important_dates.php";?>
        </div>
      </div>


      <div class="row mt-lg-4">
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
            Lejla Batina
          </h4>
          <p class="text-center">
            Radboud University<br>
            The Netherlands
          </p>
        </aside>
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            Stjepan Picek
          </h4>
          <p class="text-center">
            Delft University of Technology<br>
            The Netherlands
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:eurocrypt2020@iacr.org">
            <img src="images/icons/email.svg" class="icon" />&nbsp;<img src="images/contacts/ec2020.jpg" />
          </a>
        </div>
      </div>

      <h3 class="pageSubtitle text-center mt-4">
        Program Co-Chairs
      </h3>

      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            Yuval Ishai
          </h4>
          <p class="text-center">
            Technion<br>
            Israel
          </p>
        </aside>
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            Anne Canteaut
          </h4>
          <p class="text-center">
            Inria Paris<br>
            France
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <a href="mailto:eurocrypt2020programchairs@iacr.org">
            <img src="images/icons/email.svg" class="icon" />&nbsp;<img src="images/contacts/ecpc2020.jpg" />
          </a>
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
