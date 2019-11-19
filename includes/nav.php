<!-- BEGIN nav -->
    <header id="conf_id" class="headerImg">
      <div class="col-sm-12 headerGradient pt-md-5">
        <div class="container">
          <div class="row d-md-flex align-items-center">
            <div class="col-md-5">
              <h1 class="headerTitle">
                <span class="conf_name"><?php echo $META['name'];?></span>
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
    <div id="main-nav-row">
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
        <div class="collapse navbar-collapse justify-content-lg-center" id="navbarNav">
          <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item">
              <!-- TODO: home icon? -->
              <a class="nav-link" href="">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Technical Program</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="callforpapers.html">Call for papers</a>
                <a class="dropdown-item" href="papersubmission.html">Paper submission</a>
                <!-- BUG: this page doesn't currently exist in our example -->
                <a class="dropdown-item" href="invitedtalks.html">Invited talks</a>
                <a class="dropdown-item" href="acceptedpapers.html">Accepted papers</a>
                <a class="dropdown-item" href="program.html">Main program</a>
                <!-- BUG: this page doesn't currently exist in our example -->
                <a class="dropdown-item" href="affiliatedevents.html">Affiliated events</a>
                <a class="dropdown-item" href="rumpsession.html">Rump session</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Attend</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="registration.html">Registration</a>
                <a class="dropdown-item" href="stipends.html">Student stipends</a>
                <!-- BUG: this page doesn't currently exist in our example -->
                <a class="dropdown-item" href="venue.html">Venue</a>
                <a class="dropdown-item" href="accommodations.html">Accommodations</a>
                <a class="dropdown-item" href="travel.html">Travel</a>
                <a class="dropdown-item" href="visas.html">Visas</a>
                <a class="dropdown-item" href="conduct.html">Code of conduct</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sponsors.html">Sponsors</a>
            </li>
            <!-- TODO: email icon? -->
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
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
