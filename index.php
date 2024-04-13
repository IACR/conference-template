<!DOCTYPE html>
<html lang="en">

<head>
  <?php // The header includes the head tag and start of body
  require "includes/head.php";
  ?>
  <meta property="og:title" content="<?php echo $META['shortName']; ?>" />
  <meta name="twitter:title" content="<?php echo $META['shortName']; ?>" />

  <title>
    <?php echo $META['shortName']; ?>
  </title>

  <style>
    .bi {
      width: 1em;
      height: 1em;
      fill: currentcolor;
    }

    .color-modes .dropdown-menu {
      padding: 0.25rem;
    }

    .color-modes .dropdown-menu li+li {
      margin-top: 0.125rem;
    }

    .color-modes .dropdown-item {
      border-radius: 0.25rem;
    }

    .color-modes .active {
      font-weight: 600;
    }

    .color-modes .active .bi {
      display: block !important;
    }
  </style>

</head>

<body class="home">
  <?php require "includes/nav.php"; ?>
  <!-- for dark mode -->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>

  <!-- regular content continues below -->
  <main class="container">

    <!-- NOTE: below is placeholder content. please replace contents with
      your own content when ready. this content serves to give you an idea of
      what the structure of this page has looked like in the past -->
    <p>
      <?php echo $META['shortName']; ?> will take place in
      <?php echo $META['city'] . ', ' . $META['country']; ?>
      on <?php echo $META['dates']; ?>.
      <?php echo $META['shortName']; ?> is organized by
      <a href="https://iacr.org/">the International Association for
        Cryptologic Research</a> (IACR). This will be the <?php echo $META['name']; ?>.
    </p>

    <!-- NOTE: when registration is open, uncomment the giant
      registration button below. If you need more than one link, uncomment
      the div with three buttons below -->
    <!-- <a href="registration.php" class="btn customBtn-warm btn-lg
      blockBtn w-50 mx-auto mb-4">
      Register now
    </a> -->

    <!-- NOTE: these buttons are for when you need more than just one
      front and center call to action -->
    <!-- <div class="d-flex flex-wrap justify-content-center justify-content-lg-between">
      <a href="affiliated.php" class="btn customBtn-warm btn-lg px-lg-5 mb-3 mb-lg-4">
        Affiliated events
      </a>
      <a href="program.php" class="btn customBtn-warm btn-lg px-lg-5 mb-3 mb-lg-4">
        Conference program
      </a>
      <a href="rumpsession.php" class="btn customBtn-warm btn-lg px-lg-5 mb-3 mb-lg-4">
        Rump session
      </a>
    </div> -->

    <div class="row">
      <div class="col-md-6">
        <?php require "includes/important_dates.php"; ?>
      </div>

      <div class="col-md-6 mt-4 mt-md-0">
        <article class="customCard">
          <h4 class="customCardHeader">
            Website updates
          </h4>
          <!-- NOTE: copy the commented-out block below to add a row to announce when you add new info to the site -->
          <!-- <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-6 col-lg-4">
              # MONTH 202X
            </h6>
            <p class="col-7 col-md-6 col-lg-8">
              Some sort of update
            </p>
          </div> -->
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-6 col-lg-4">
              20 Mar 202X
            </h6>
            <p class="col-7 col-md-6 col-lg-8">
              Website launched
            </p>
          </div>
        </article>
      </div>
    </div>

  </main>

  <?php include "includes/footer.php"; ?>
</body>

</html>