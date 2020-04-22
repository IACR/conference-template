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
        Student Stipends
      </h2>

      <!-- NOTE: see the general chair guidelines, section 7.5. -->
      <p>
        The Cryptography Research Fund allows us to waive the
        registration fee for all student presenters of an accepted
        paper. A limited number of stipends will be available to those
        students unable to obtain funding to attend the conference,
        and to students who have an accepted paper that they will
        present. Students in under-represented groups are especially
        encouraged to apply. To apply, please ask your PhD supervisor
        or Department Head to email a brief justification to
        the <a href="contact.php">General Chairs</a>
        <span class="editMe">before the late registration deadline</span>.
      </p>

      <h3 class="pageSubtitle">
        Application Procedures for Stipends
      </h3>
      <p>
        To apply for a stipend please send an email to the <a href="contact.php">General Chairs</a> with subject ‘Student Stipend Request’ explaining as to why you need funding. Further, ask your supervisor to send an email to the <a href="contact.php">General Chairs</a>, or attach a letter of your supervisor confirming that: (1) you are a student engaged in cryptography research and (2) there is not sufficient funding in your home institution to cover the costs to travel to Zagreb and participate in the conference.
      </p>
      <p>
        The first deadline for student stipend application is February 14 2020 for notification on February 21, 2020 and the second deadline is <strike>March 1</strike> March 8 2020 for notification on <strike>March 8</strike> March 15 2020. Please note that funds might run out in the first cycle.
      </p>

    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
