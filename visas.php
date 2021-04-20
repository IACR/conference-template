<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> visa information"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> visa information"/>

    <title>
      <?php echo $META['shortName'];?> Visas
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Visa Information
      </h2>

      <!-- NOTE: below is standard placeholder text for when the page
      is under construction. please delete this paragraph. when
      you add other content.
      -->
      <p>
        This information is not yet available. Thank you for your patience.
      </p>

      <!-- NOTE: below is placeholder content derived from a past conference. -->
      <!-- <p class="alert customAlert-cool">
        <img src="images/icons/exclamation.svg" class="icon" />
        It is imperative that authors and attendees allow sufficient time to obtain visas.
      </p>
      <p>
        Information about Australian visas can be
        found <a href="http://kaymckelly.com">here</a>. The time to
        obtain a visa can vary widely and has taken over three months
        for some individuals in the past. An interview at a consulate
        may also be required.
      </p>

      <h3 class="pageSubtitle mt-4">
        Invitation Letters
      </h3>
      <p>
        Requests for invitation letters need to be received by
        <span class="editMe">DATE</span>.
      </p>
      <p>
        Conference attendees who require a visa will typically need an
        invitation letter from the <a href="contact.php">General
        Chair</a>. To expedite the process, please provide as many of
        the following pieces of information as possible in your
        request:
      </p>
      <ul>
        <li>
          an up-to-date Curriculum Vitae (CV) that includes, if applicable, a
          list of publications
        </li>
        <li>
          a brief statement explaining your interests in the conference
        </li>
        <li>
          a list of any recent IACR conferences you have attended
        </li>
        <li>
          a reference in the crypto community who has attended past IACR
          conferences
        </li>
      </ul>
      <p>
        We hope that you will be able to attend <?php echo $META['shortName'];?>
        and help us make the conference a great success.
      </p> -->

    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
