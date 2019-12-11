<?php
  function rootPath() {
    // must declare $META as global variable, as it's created in head.php
    // and doesn't work here unless defined within the function
    global $META;

    // NOTE: for debug purposes: if year is not an int, it'll fail to generate
    // the correct paths in the nav. in metadata.json, you need to change year
    // to an integer for production
    if (empty($META['year'])) {
        return "/";
    } else {
      return "/" . strval($META['year']) . "/";
    }
  }
?>

<!-- BEGIN nav -->
    <header id="conf_id" class="headerImg">
      <div class="col-sm-12 headerGradient pt-md-5">
        <div class="container">
          <div class="row d-md-flex align-items-center">
            <div class="col-md-5">
              <h1 class="headerTitle">
                <span class="conf_name"><?php echo $META['shortName'];?></span>
              </h1>
            </div>
            <div class="col-md-2">
              <a href="https://iacr.org/">
                <img id="logo" class="d-none d-lg-block" src="https://iacr.org/img/logo/iacrlogo_small.png" title="International Association for Cryptologic Research">
              </a>
            </div>
            <div class="col-md-5">
              <h3 class="headerInfoTop">
                <span class="conf_dates"><?php echo $META['dates'];?></span>
              </h3>
              <h3 class="headerInfoBottom">
                <span class="conf_location"><?php echo $META['location'];?></span>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div id="main-nav-row" class="sticky-top">
      <nav class="container navbar navbar-dark navbar-expand-md">
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav flex-md-row w-100 text-md-center">
            <li class="nav-item flex-md-fill mt-3 mt-md-0">
              <!-- TODO: home icon? -->
              <a class="nav-link" href="<?php echo rootPath(); ?>">Home</a>
            </li>
            <li class="nav-item dropdown flex-md-fill">
              <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Technical Program</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo rootPath() . 'callforpapers.php' ?>">Call for papers</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'papersubmission.php' ?>">Paper submission</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'invitedtalks.php' ?>">Invited talks</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'acceptedpapers.php' ?>">Accepted papers</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'program.php' ?>">Main program</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'affiliated.php' ?>">Affiliated events</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'rumpsession.php' ?>">Rump session</a>
              </div>
            </li>
            <li class="nav-item dropdown flex-md-fill">
              <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Attend</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo rootPath() . 'registration.php' ?>">Registration</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'stipends.php' ?>">Student stipends</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'travel.php' ?>">Venue & travel</a>
                <!-- TODO: soon to be merged with travel.php -->
                <a class="dropdown-item" href="<?php echo rootPath() . 'visas.php' ?>">Visas</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'conduct.php' ?>">Code of conduct</a>
              </div>
            </li>
            <li class="nav-item flex-md-fill">
              <a class="nav-link" href="<?php echo rootPath() . 'sponsors.php' ?>">Sponsors</a>
            </li>
            <!-- TODO: email icon? -->
            <li class="nav-item flex-md-fill">
              <a class="nav-link" href="<?php echo rootPath() . 'contact.php' ?>">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <noscript>
      <div class="container">
        <h2>
          This site is designed for browsers with javascript.
        </h2>
        <h3>
          The dates, name, and location for the conference are <a href="json/metadata.json">in a json file.</a>
        </h3>
      </div>
    </noscript>
    <!-- END OF nav -->
