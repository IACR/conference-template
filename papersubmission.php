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
      <p>
        Please follow this <a href="https://secure.iacr.org/websubrev/ec2020/submit/submit.php" target="_blank">link</a> to the submission server or click on the button below. After the submission deadline, the site is only available for withdrawing submissions.
      </p>
      <div class="d-flex justify-content-center mb-4">
        <a href="https://secure.iacr.org/websubrev/ec2020/submit/submit.php" target="_blank" class="btn btn-lg btn-warning btn-block regBtn w-50" role="button">
          Submission Server
        </a>
      </div>

      <h3 class="pageSubtitle">
        Conflicts of Interest
      </h2>
          <p>
            Authors, program committee members, and reviewers must
            follow the IACR Policy on Conflicts of Interest, available from <a href="https://www.iacr.org/docs/conflicts.pdf" target="_blank">https://www.iacr.org/docs/</a>.
          </p>
          <p>
            In particular, the authors of each submission are asked during the submission process
            to identify all members of the Program Committee who have an automatic conflict
            of interest (COI) with the submission. A reviewer and an author have an automatic
            COI if:
          </p>
          <ul>
            <li>
              one was the thesis advisor/supervisor of the other
            </li>
            <li>
              or if they have shared an institutional affiliation within the last two years<sup>1</sup>
            </li>
            <li>
              or if they have published two or more joint authored works within the last three years<sup>2</sup>
            </li>
            <li>
              or if they are in the same family
            </li>
          </ul>
          <p>
            Any further COIs of importance should be separately disclosed<sup>3</sup>. It is the responsibility of all authors to ensure correct reporting of COI information. Submissions with incorrect or incomplete COI information may be rejected without consideration of their merits.
          </p>

          <div class="mb-2">
            <small>
              <sup>1</sup> Sharing an institutional affiliation means working at the same location/campus of the same company/university. It does not include separate universities of the same system nor distant locations of the same company.
            </small>
          </div>
          <div class="mb-2">
            <small>
              <sup>2</sup> Jointly authored work refers to jointly authored papers and books, whether formally published or just posted online, resulting from collaboration on a scientific problem. It usually does not include joint editorial functions, like a jointly edited proceedings volume. For online publication, the first posting (not revisions) determines the relevant date. Multiple versions of a paper (conference, ePrint, journal) count as a single paper.
            </small>
          </div>
          <div class="mb-2">
            <small>
              <sup>3</sup> COIs are not restricted to automatic ones, others being possible. COIs beyond automatic COIs could involve financial, intellectual, or personal interests. Examples include closely related technical work, cooperation in the form of joint projects or grant applications, business relationships, close personal friendships, instances of personal enmity. Full transparency is of utmost importance, authors and reviewers must disclose to the chairs or editor any circumstances that they think may create bias, even if it does not raise to the level of a COI. The editor or program chair will decide if such circumstances should be treated as a COI.
            </small>
          </div>
        </div>
      </div>

    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
