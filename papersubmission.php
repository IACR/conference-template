<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> paper submission"/>

    <title>
      Paper Submission for <?php echo $META['shortName'];?>
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Paper Submission
      </h2>

          <!-- NOTE: below is standard placeholder text for when the page
           is under construction. please delete the <p> below when you
           finish editing the content.  -->
      <p>
          This information is not yet available. Thank you for your patience.
      </p>

      <!-- NOTE: below is placeholder content derived from a past conference.
           Please uncomment and replace contents with your own content when ready.
           This code is here to give you an idea of what the structure of this page
           has looked like in the past.
        -->
      <div class="row">
        <div class="col-lg-6 col-12 mt-4">
          <h3 class="pageSubtitle">
            Instructions for Authors
          </h3>
          <p>
            Submissions must be at most 30 pages excluding any auxiliary
            supporting material, and using the Springer LNCS format (in
            particular, do not modify the LNCS default font sizes or
            margins). Details on the Springer LNCS format can be
            obtained <a href="https://www.springer.com/gp/computer-science/lncs/conference-proceedings-guidelines">here</a>.
            It is strongly encouraged that submissions are processed in
            LaTeX. All submissions must have page numbers (e.g. using
            LaTeX command <code>\pagestyle{plain}</code>).  Submissions
            must be submitted electronically in PDF format.
          </p>
          <p>
            All submissions will be blind-refereed and thus must be
            anonymous, with no author names, affiliations,
            acknowledgments, or obvious references. Submissions should
            begin with a title, a short abstract, and a list of keywords,
            followed by an introduction, a main body, an appendix (if
            any), and references, within 30 pages. The introduction should
            summarize the contributions of the paper at the level
            understandable for a non-expert reader.
          </p>
          <p>
            Optionally, if an author desires, a clearly-marked auxiliary
            supporting material can be appended to the submission. The
            auxiliary supporting material has no prescribed form or page
            limit and might be used, for instance, to provide program
            code, additional experimental data, etc. Alternatively, the
            auxiliary supporting material can be submitted as a separate
            file from the submission. The reviewers are not required to
            read the auxiliary supporting material and submissions should
            be intelligible without it. The final published version of an
            accepted paper is expected to closely match the submitted 30
            pages.
          </p>
          <p class="alert alert-warning">
            <img src="images/icons/exclamation.svg" class="icon" />
            Submissions not meeting these guidelines risk rejection
            without consideration of their merits.
          </p>
        </div>
        <div class="col-lg-6 col-12 mt-4">
          <?php require "includes/important_dates.php";?>
        </div>
      </div>
      <p>
        For papers that are accepted, the length of the proceedings
        version will be at most 30 pages using Springer’s standard
        fonts, font sizes, and margins. The proceedings will be
        published by Springer-Verlag in the Lecture Notes in Computer
        Science series and will be available at the
        conference. Authors of accepted papers must complete
        the <a href="https://www.iacr.org/docs/">IACR copyright assignment
        form</a> for their work to be published in the
        proceedings. Moreover, authors of accepted papers must
        guarantee that their paper will be presented at the conference
        and agree that the presentations will be video recorded during
        the event. The camera-ready version of the accepted articles
        will be automatically uploaded to
        the <a href="https://eprint.iacr.org/">IACR ePrint server</a>.
      </p>
      <p>
        Submissions must not substantially duplicate work that any of
        the authors has published elsewhere or has submitted in
        parallel to a journal or any other conference/workshop that
        has proceedings. Accepted submissions may not appear in any
        other conference or workshop that has proceedings. IACR
        reserves the right to share information about submissions with
        other program committees to detect parallel submissions and
        the <a href="https://iacr.org/docs/irregular.pdf">IACR policy on irregular
        submissions</a> will be strictly enforced.
      </p>
      <p>
        Articles will not be reviewed by reviewers who have a conflict
        of interest with at least one author of the
        submission. Submissions must adhere to
        the <a href="https://www.iacr.org/docs/conflicts.pdf">IACR
        Policy on Conflicts of Interest</a>
      </p>
      <p>
        The Program Committee may select a paper for the best paper award.
      </p>
      <h3 class="pageSubtitle mt-4">Submission server</h3>
      <h5 class="text-center font-weight-bold">
        The submission server is not yet open.
      </h5>
      <!-- When the submission server is ready, supply the link in the
             button, remove the "disabled" class, and remove the statement above. -->
      <p class="text-center">
        <a href="#" target="_blank" class="disabled btn btn-lg btn-warning"
           role="button">Submission Server</a>
      </p>
    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
