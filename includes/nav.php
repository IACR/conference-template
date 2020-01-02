<!-- %%%%%%%%%%%%%%%%%% REMOVE THIS AFTER FIXING STYLES %%%%%%% -->

<script>
  function setTheme(val) {
    // for Kay's machine
    document.getElementById('style').href = '/styles/' + val + '_theme.css';

    // for Kevin's machine
    // document.getElementById('style').href = '/iacr/styles/' + val + '_theme.css';
  }
</script>
<style>
#theme-menu {
  position: fixed;
  top: 0%;
  right: 0%;
  z-index: 2000;
  height: 0;
}

#theme-menu button {
  background: #f0f0f0 !important;
  border: 2px solid blue;
}
</style>
<div class="dropdown" id="theme-menu">
  <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" \
aria-haspopup="true" aria-expanded="false">
    Choose a color scheme
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#" onclick='setTheme("black")'>Black (once you go black ...)</a>
    <a class="dropdown-item" href="#" onclick='setTheme("orange")'>Orange</a>
    <a class="dropdown-item" href="#" onclick='setTheme("green")'>Green</a>
    <a class="dropdown-item" href="#" onclick='setTheme("teal")'>Teal</a>
    <a class="dropdown-item" href="#" onclick='setTheme("blue")'>Blue</a>
  </div>
</div>
<!-- %%%%%%%%%%%%%%%%%%%%%% REMOVE ABOVE AFTER FIXING STYLES %%%%%%%%%%% -->

<!-- BEGIN nav -->
<div id="pageTop">
   <header id="conf_id" class="headerImg">
     <div class="headerGradient pt-md-5">
        <div class="pageTopContainer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="headerConferenceName">
              <h1 class="headerTitle">
                <span class="conf_name"><?php echo $META['shortName'];?></span>
              </h1>
            </div>
            <div class="headerLogo">
              <a href="https://iacr.org/">
                <img id="logo" class="d-none d-lg-block mx-auto" src="https://iacr.org/img/logo/iacrlogo_small.png" title="International Association for Cryptologic Research">
              </a>
            </div>
            <div class="headerInfo">
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
      <nav class="container navbar navbar-expand-md">
        <button class="navbar-toggler mt-1 collapsed nofocus" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar top-bar"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
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
