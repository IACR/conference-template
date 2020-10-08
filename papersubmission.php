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

      <div class="alert customAlert-warm">
        Unfortunately the deadline to submit a paper to <?php echo $META['shortName'];?> has passed.
      </div>
      <p>
        You can still access the <a href="https://secure.iacr.org/websubrev/ac2020/submit/">submission server</a>, should you need to make changes or upload a final paper version.
      </p>
      
    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
