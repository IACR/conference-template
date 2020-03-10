<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> contact information"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> contact information"/>

    <title>
      Contact for <?php echo $META['shortName'];?>
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Contact
      </h2>

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
  </body>
</html>
