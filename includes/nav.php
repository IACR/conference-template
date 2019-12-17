<?php
  // Set the root path in the nav menu.
  function rootPath() {
    // must declare $META as global variable, as it's created in head.php
    // and doesn't work here unless defined within the function
    global $META;

    // NOTE: if you are developing on a local machine, then you probably
    // should use "/" as your root path. On the iacr.org server the URL is
    // prefixed by the year (e.g., crypto.iacr.org/2020). We distinguish these
    // cases using the $_SERVER['HTTP_HOST'] variable.

    if (empty($_SERVER['HTTP_HOST'])) {
      return "/";
    }
    $length = strlen($_SERVER['HTTP_HOST']);
    if ($length >= 8 &&
        substr($_SERVER['HTTP_HOST'], -8) === 'iacr.org') {
      return "/" . strval($META['year']) . "/";
    }
    return "/";
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
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarNav">
          <ul id="nav-ul" class="navbar-nav">
            <li class="nav-item mt-3 mt-md-0">
              <a class="nav-link" href="<?php echo rootPath(); ?>">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Technical Program</a>
              <div class="dropdown-menu mx-md-5">
                <a class="dropdown-item" href="<?php echo rootPath() . 'callforpapers.php' ?>">Call for papers</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'papersubmission.php' ?>">Paper submission</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'invitedtalks.php' ?>">Invited talks</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'acceptedpapers.php' ?>">Accepted papers</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'program.php' ?>">Main program</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'affiliated.php' ?>">Affiliated events</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'rumpsession.php' ?>">Rump session</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Attend</a>
              <div class="dropdown-menu mx-md-5">
                <a class="dropdown-item" href="<?php echo rootPath() . 'registration.php' ?>">Registration</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'stipends.php' ?>">Student stipends</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'travel.php' ?>">Venue & travel</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'visas.php' ?>">Visas</a>
                <a class="dropdown-item" href="<?php echo rootPath() . 'conduct.php' ?>">Code of conduct</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo rootPath() . 'sponsors.php' ?>">Sponsors</a>
            </li>
            <li class="nav-item">
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
