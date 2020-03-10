<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> student stipends"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> student stipends"/>

    <title>
      <?php echo $META['shortName'];?> Student Stipends
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>


    <main class="container p-4">
      <h2 class="indPageTitle">
        Stipends
      </h2>

      <p>
        This information is not yet available. Thank you for your patience.
      </p>
      <!-- NOTE: see the general chair guidelines, section 7.5.
      <p>
        The Cryptography Research Fund allows us to waive the
        registration fee for all student presenters of an accepted
        paper. A limited number of stipends will be available to those
        students unable to obtain funding to attend the conference,
        and to students who have an accepted paper that they will
        present. Students in under-represented groups are especially
        encouraged to apply. To apply, please ask your PhD supervisor
        or Department Head to email a brief justification to
        the <a href="./contact.php">General Chair</a>
        <span class="editMe">before the late registration deadline</span>.
      </p>
      -->
    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
