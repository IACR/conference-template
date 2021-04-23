<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> paper submission"/>

    <title>
      <?php echo $META['shortName'];?> Paper Submission
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Paper Submission
      </h2>

      <!-- NOTE: when deadline has passed, uncomment this (can delete or
      comment out everything else) -->
      <!-- <div class="alert customAlert-warm">
        Unfortunately the deadline to submit a paper to
        <?php echo $META['shortName'];?> has passed.
      </div>
      <p>
        You can still access the <a href="#">submission server</a>, should you
        need to make changes or upload a final paper version.
      </p>
      -->

      <!-- NOTE: below is standard placeholder text for when the page
      is under construction. please delete the <p> below when you
      finish editing the content. -->
      <!-- <p>
          This information is not yet available. Thank you for your patience.
      </p> -->

      <h5 class="text-center alert customAlert-cool my-3">
        The submission server is not yet open. Please check back later.
      </h5>

      <!-- NOTE: when the submission server is ready, supply the link in the
      button and remove the statement above. -->
      <!-- <a href="#" target="_blank" class="btn btn-lg btn-block
      customBtn-warm mx-auto w-75" role="button">Submission Server</a> -->

      <!-- NOTE: below is placeholder content derived from a past conference.
      Please uncomment and replace contents with your own content when ready.
      -->
      <div class="row">
        <div class="col-lg-6 col-12 mt-3">
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
            LaTeX command <code>\pagestyle{plain}</code>). Submissions
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
          <p class="alert customAlert-warm">
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
        the <a href="https://iacr.org/docs/irregular.pdf">IACR policy on
        irregular submissions</a> will be strictly enforced.
      </p>
      <p>
        Articles will not be reviewed by reviewers who have a conflict
        of interest with at least one author of the submission. Submissions
        must adhere to the <a href="https://www.iacr.org/docs/conflicts.pdf">
        IACR Policy on Conflicts of Interest</a>.
      </p>
      <p>
        The Program Committee may select a paper for the best paper award.
      </p>

      <h3 class="pageSubtitle mt-4">
        Conflicts of Interest
      </h3>
      <p>
        Authors, program committee members, and reviewers must
        follow the IACR Policy on Conflicts of Interest, available from
        <a href="https://www.iacr.org/docs/conflicts.pdf" target="_blank">
        https://www.iacr.org/docs/</a>.
      </p>
      <p>
        In particular, the authors of each submission are asked during the
        submission process to identify all members of the Program Committee who
        have an automatic conflict of interest (COI) with the submission. A reviewer<sup>1</sup> has an automatic COI with an author if:
      </p>
      <ul>
        <li>
          one is or was the thesis advisor to the other, no matter how long ago;
        </li>
        <li>
          they shared an institutional affiliation within the prior two
          years<sup>2</sup>;
        </li>
        <li>
          they published two or more jointly authored works in the last three years<sup>3</sup>; or
        </li>
        <li>
          they are immediate family members<sup>4</sup>
        </li>
      </ul>
      <p>
        A reviewer has an automatic COI with a submission if:
      </p>
      <ul>
        <li>
          the reviewer has an automatic COI with any of its authors;
        </li>
        <li>
          the reviewer is authoring a paper (in submission<sup>5</sup> or in
          preparation) whose content substantially overlaps with that of the
          submission;
        </li>
        <li>
          the reviewer has made a contribution to the submission (i.e. the
          submission is the result of a collaboration that did not result in
          the reviewer's authorship)
        </li>
      </ul>
      <p>
        Any further COIs of importance should be separately disclosed. It is
        the responsibility of all authors to ensure correct reporting of COI
        information. Submissions with incorrect or incomplete COI information
        may be rejected without consideration of their merits.
      </p>
      <p>
        COIs are not restricted to automatic ones, others
        being possible. COIs beyond automatic COIs could involve financial,
        intellectual, or personal interests. Examples include closely
        related technical work, cooperation in the form of joint projects
        or grant applications, business relationships, close personal
        friendships, instances of personal enmity. Full transparency is of
        utmost importance, authors and reviewers must disclose to the
        chairs or editor any circumstances that they think may create bias,
        even if it does not raise to the level of a COI. The editor or
        program chair will decide if such circumstances should be treated
        as a COI.
      </p>

      <div class="row text-justify">
        <div class="col-lg-4 mb-3 mb-lg-1">
          <small>
            <sup>1</sup> Reviewers include program committee members for
            conference publications, editorial board members for journal
            publications (Journal of Cryptology) and journal-conference hybrid
            publications (ToSC and TCHES), sub-reviewers, referees for journal
            publications, and individuals doing ad hoc reviews for a program
            chair or editor
          </small>
        </div>
        <div class="col-lg-4 mb-3 mb-lg-1">
          <small>
            <sup>2</sup> Sharing an institutional affiliation means working at
            the same location/campus of the same company/university. It does
            not include separate universities of the same system nor distant
            locations of the same company.
          </small>
        </div>
        <div class="col-lg-4 mb-3 mb-lg-1">
          <small>
            <sup>3</sup> Jointly authored work refers to jointly authored
            papers and books, whether formally published or just posted online,
            resulting from collaboration on a scientific problem. It usually
            does not include joint editorial functions, like a jointly edited
            proceedings volume. For online publication, the first posting (not
            revisions) is the relevant date. Multiple versions of a paper
            (conference, ePrint, journal) count as a single paper.
          </small>
        </div>
        <div class="col-lg-4 mb-3 mb-lg-1">
          <small>
            <sup>4</sup> Immediate family members include at least parents,
            children, siblings, spouse, or significant other.
          </small>
        </div>
        <div class="col-lg-4 mb-3 mb-lg-1">
          <small>
            <sup>5</sup> The date relevant for a paper in submission is the
            date when it was submitted.
          </small>
        </div>
      </div>

    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
