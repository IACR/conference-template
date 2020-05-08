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
      <p>
        <a href="./cfp/AC20-CFP-v1.5.pdf">Download CFP as PDF</a>
      </p>
      <h3 class="pageSubtitle">General Information</h3>
      <!-- this is for Crypto 2020. Modify to suit -->
      <p>
        <span class="long_conf"><?php echo $META['shortName'];?></span>, the <span class="long_conf"><?php echo $META['name'];?></span>,
        will take place in <a href="http://www.dcckorea.or.kr/">Daejeon Convention Center</a>,
        <span class="conf_location"><?php echo $META['city'] . ', ' . $META['country'];?></span>
        on <span class="conf_dates"><?php echo $META['dates'];?></span>.
        The conference is organized by
        <a href="http://iacr.org/">the International Association for Cryptologic Research</a> (IACR).
      </p>
      <div class="row mt-4">
        <section class="col-lg-6">
          <h3 class="pageSubtitle">
            Instructions for Authors
          </h3>
          <p>
            Submissions must be at most 30 pages excluding any auxiliary supporting material, and using the Springer
            LNCS format (in particular, do not modify the LNCS default font sizes or margins). Details on the
            Springer LNCS format can be obtained <a href="http://www.springer.de/comp/lncs/authors.html">here</a>.
            It is strongly encouraged that submissions are processed in LaTeX. All submissions must have page numbers,
            e.g., using LaTeX command <code>\pagestyle{plain}</code>.
          </p>
          <p>
            All submissions will be blind-refereed and thus must be anonymous, with no author names, affiliations,
            acknowledgments, or obvious references (however, submissions may already be uploaded to eprint or
            arxiv). Submissions should begin with a title, a short abstract, and a list of keywords, followed by an
            introduction, a main body, an appendix (if any), and references, within 30 pages. The introduction should
            summarize the contributions of the paper at a level understandable for a non-expert reader. Authors are
            advised to write their papers clearly and carefully, to provide good motivation for their work, and to give
            a high-level overview of the arguments and techniques used to obtain the main results. Papers are likely
            to be rejected if the results are unable to be verified by the PC within the short review timeframe.
          </p>
          <p>
            Optionally, if an author desires, a clearly-marked Supplementary Material can be appended to the
            submission. The Supplementary Material has no prescribed form or page limit and might be used, for
            instance, to provide background definitions, program code, additional experimental data, etc. The IACR
            encourages authors to include in their Supplementary Material responses to reviews from previous IACR
            events. Alternatively, the auxiliary supporting material can be submitted as a separate file from the
            submission. The reviewers are not required to read the auxiliary supporting material and submissions
            should be intelligible without it. The final published version of an accepted paper is expected to closely
            match the submitted 30 pages.
          </p>
          <p>
            Submissions must be submitted electronically in PDF format. A detailed description of the electronic
            submission procedure and a submission link will be available on the Asiacrypt 2020 website at a later
            date.
          </p>
          <p class="alert alert-success">
            <img src="images/icons/exclamation.svg" class="icon" />
            Submissions not meeting these guidelines risk rejection without consideration of their merits.
          </p>
          <p>
            For papers that are accepted, the length of the proceedings version will be at most 30 pages using
            Springer's standard fonts, font sizes, and margins. The proceedings will be published by Springer-Verlag
            in the Lecture Notes in Computer Science series and will be available at the conference. Authors of
            accepted papers must complete the <a href="http://www.iacr.org/docs/copyright_form.pdf">IACR copyright assignment form</a>
            for their work to be published in the proceedings. Moreover, authors of accepted papers must guarantee that
            their paper will be presented at the conference and agree that the presentations will be video recorded during
            the event. The camera-ready version of the accepted articles will be automatically uploaded to the
            <a href="https://eprint.iacr.org/">IACR ePrint server</a>.
          </p>
          <p>
            Submissions must not substantially duplicate work that any of the authors has published elsewhere or
            has submitted in parallel to a journal or any other conference/workshop that has proceedings. Accepted
            submissions may not appear in any other conference or workshop that has proceedings. IACR reserves
            the right to share information about submissions with other program committees to detect parallel
            submissions and the IACR policy on irregular submissions will be strictly enforced. For further details,
            see <a href="http://www.iacr.org/docs/irregular.pdf">here</a>.
          </p>
          <p>
            <b>Conflicts of Interest</b>
          </p>
          <p>
            Authors, program committee members, and reviewers must follow the
            <a href="https://www.iacr.org/docs/">IACR Policy on Conflicts of Interest</a>. In particular, the authors of
            each submission are asked during the submission process to identify all members of the Program Committee who have an
            automatic conflict of interest (COI) with the submission. A reviewer and an author have an automatic
            COI if one was the thesis advisor/supervisor of the other, or if they've shared an institutional affiliation
            within the last two years, or if they've published two or more joint authored works within the last three
            years, or if they are in the same family. Any further COIs of importance should be separately disclosed.
            It is the responsibility of all authors to ensure correct reporting of COI information. Submissions with
            incorrect or incomplete COI information may be rejected without consideration of their merits.
          </p>
          <p>
            Program committee members are permitted to submit either one single-author paper or at most two
            co-authored papers. Papers submitted by PC members are reviewed by at least 5 reviewers.
          </p>
          <p>
            The Program Committee may select a paper for the best paper award.
          </p>

        </section>
        <div class="col-lg-6 mt-3 mt-lg-0">
          <?php require "includes/important_dates.php";?>
        </div>
      </div>


      <div class="row mt-lg-4">
        <section class="col-md-6">
          <h3 class="pageSubtitle">
            Schedule
          </h3>
          <p>
            <span class="conf_name"><?php echo $META['shortName'];?></span> will operate a two-round review system with rebuttal phase.
            In the first round, the program committee selects the submissions which are considered of value for proceeding to the second round,
            and the authors receive the first round notification with review comments. The authors of the selected submissions are invited to
            submit a text-based rebuttal letter to the review comments. In the second round the program committee further reviews the selected
            submissions by taking into account their rebuttal letter, and makes the final decision of acceptance or rejection.
            The submissions that have not been selected during the first round of reviews may be submitted in other conferences after the first
            round notification date.
          </p>
        </section>
        <section class="col-md-6">
          <h3 class="pageSubtitle">
            Conference Information and Stipends
          </h3>
          <p>
            The primary source of information is the conference website. Students whose papers have been accepted
            and who present their talks at the conference will have their registration waived. A limited number of
            stipends are available to those unable to obtain funding to attend the conference. Students, whose papers
            are accepted and who will present the paper themselves, are encouraged to apply if such assistance is
            needed. Requests for stipends should be sent to the general chair.
          </p>
        </section>
      </div>

      <h3 class="pageSubtitle mt-4">
        Program Committee
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
        General Chair
      </h3>

      <div class="row">
        <aside class="col-12 text-center mt-3 mb-2">
          <h4 class="subSubtitle">
            Kwangjo Kim
          </h4>
          <p class="text-center">
            KAIST, Korea
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
        <aside class="col-12 col-sm-6 text-center mb-2">
          <h4 class="subSubtitle">
            Shiho Moriai
          </h4>
          <p class="text-center">
            NICT, Japan
          </p>
          <div class="col-12 text-center">
            <a href="mailto:asiacrypt2020programchairs@iacr.org">
              <img src="images/icons/email.svg" class="icon" />
            </a>&nbsp;
            asiacrypt2020programchairs@iacr.org
          </div>
        </aside>
        <aside class="col-12 col-sm-6 text-center mb-2">
          <h4 class="subSubtitle">
            Huaxiong Wang
          </h4>
          <p class="text-center">
            Nanyang Technological University, Singapore
          </p>
          <div class="col-12 text-center">
            <a href="mailto:asiacrypt2020programchairs@iacr.org">
              <img src="images/icons/email.svg" class="icon" />
            </a>&nbsp;
            asiacrypt2020programchairs@iacr.org
          </div>
        </aside>
      </div>
    </main>

  <?php include "includes/footer.php"; ?>

    <!-- Handlebars -->
    <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js" type="text/javascript"></script>
    <!-- Personal scripts -->
    <script src="./js/committee.js"></script>

  </body>
</html>
