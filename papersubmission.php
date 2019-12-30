<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>

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

      <!-- NOTE: below is standard placeholder text for when the page is under construction. please delete this entire <div class="row"> and all elements contained within it when ready to add other content -->
      <div class="row">
        <div class="col-12">
          <p>
            This information is not yet available. Thank you for your patience.
          </p>
          <p>
            If this information were available, there would likely be a link to the server to submit papers to, along with any additional information about how authors should go about submitting papers.
          </p>
        </div>
      </div>

      <!-- NOTE: below is placeholder content derived from the Crypto 2016 conference. please uncomment and replace contents with your own content when ready. this code is here to give you an idea of what the structure of this page has looked like in the past -->
      <!-- <div class="row">
        <section class="col-12">
          <p>
            Please see the <a href="./callforpapers.php">call for papers page</a> for more information while we work on getting the submission server up and running.
          </p>
          <p>
            The submission deadline for <span class="conf_name"><?php echo $META['shortName'];?></span> has passed. The list of accepted papers is <a href="./acceptedpapers.php">now available</a>.
          </p>
        </section>
      </div> -->

    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
