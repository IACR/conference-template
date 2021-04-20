<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> code of conduct"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> code of conduct"/>

    <title>
      <?php echo $META['shortName'];?> Code of Conduct
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Code of Conduct
      </h2>

      <!-- NOTE: the following is required text for the code of
      conduct. Any text that is inside <span class="editMe"> is
      text that MUST be changed by the person responsible for the
      conference website -->
      <p>
        The IACR is committed to providing an experience free of
        harassment and discrimination in its events, respecting the
        dignity of every participant.
      </p>
      <p>
        If you experience harassment or discriminatory behavior at an
        IACR event, we encourage you to reach out to someone who could
        help. The following are available to you:
        the <a href="https://iacr.org/committees.html">Code-of-Conduct
        Liaison</a>, <a href="contact.php">General Chair(s)</a>,
        any member of the <a href="ethics-committee@iacr.org">Ethics
        Committee</a>,
        the <a href="https://iacr.org/bod.html">President</a> <span
        class="editMe">***and others relevant to event***</span>.
      </p>
      <p>
        Participants who violate this code may be sanctioned and/or
        expelled from the event, at the discretion of the General
        Chair(s). Serious incidents may be referred to the Ethics
        Committee for further possible action. Any action will only be
        taken with the consent of the complaining
        party <span class="editMe">***subject to applicable
        laws***</span>.
      </p>
      <p>
        If you witness harassment or discriminatory behavior, please consider intervening.
      </p>

      <h3 class="pageSubtitle mt-4">
        Who to Contact
      </h3>
      <div class="row">
        <aside class="col-sm-4">
          <h4 class="subSubtitle">
            Code-of-Conduct Liaison
          </h4>
          <p class="text-left">
            <a href="https://iacr.org/committees.html">
              <span class="editMe">***Name and contact information here***</span>
            </a>
          </p>
        </aside>

        <aside class="col-sm-4">
          <h4 class="subSubtitle">
            Ethics Committee
          </h4>
          <p class="text-left">
            <a href="https://iacr.org/committees.html">
              <span class="editMe">***Name and contact information here***</span>
            </a>
          </p>
        </aside>

        <aside class="col-sm-4">
          <h4 class="subSubtitle">
            IACR President
          </h4>
          <p class="text-left">
            <a href="https://iacr.org/bod.html">
              <span class="editMe">***Name and contact information here***</span>
            </a>
          </p>
        </aside>
      </div>

    </main>

    <?php include "includes/footer.php"; ?>

  </body>
</html>
