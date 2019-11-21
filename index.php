<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
        require "includes/head.php";
          ?>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

  <main class="container mt-5">

    <!-- NOTE: below is placeholder content. please replace contents with your own
         content when ready. this content serves to give you an idea of what the
         structure of this page has looked like in the past -->
    <!-- <p>
      Iceland sriracha YOLO schlitz. Wolf literally cray stumptown,
      edison bulb lomo mixtape selfies vexillologist. Meggings offal
      hell of cloud bread DIY godard. Woke paleo health goth
      distillery. Bicycle rights kogi austin gochujang. Readymade
      8-bit distillery post-ironic. Hot chicken kale chips
      sustainable, keytar venmo jean shorts occupy green juice
      artisan kombucha lyft cornhole.
    </p>
    <p>
      Neutra gastropub humblebrag VHS, chambray health goth swag
      chia put a bird on it chartreuse knausgaard you probably
      haven't heard of them sriracha adaptogen pabst. Roof party
      waistcoat sustainable next level deep v art party. Lyft photo
      booth neutra, seitan franzen pabst whatever salvia selfies
      tattooed. VHS listicle four dollar toast, +1 franzen brooklyn
      typewriter semiotics tilde truffaut poke adaptogen readymade
      hexagon. Retro kombucha kitsch mumblecore chicharrones synth
      letterpress kale chips banh mi succulents aesthetic beard. Meh
      salvia XOXO, literally pickled keffiyeh coloring book occupy
      taiyaki 90's artisan iceland paleo hammock.
    </p>
    <p>
      Biodiesel snackwave godard sriracha jianbing coloring book
      flannel iPhone bushwick butcher letterpress bespoke
      freegan. La croix trust fund quinoa hashtag, artisan raw denim
      direct trade knausgaard iceland. Ramps mlkshk tofu hexagon,
      jean shorts coloring book palo santo taxidermy actually
      plaid. Meh jianbing woke 3 wolf moon craft beer sartorial
      neutra vaporware meditation kombucha tacos health goth fixie
      everyday carry organic. Mixtape polaroid everyday carry
      pickled vaporware.
    </p>
    <p>
      Knausgaard af food truck occupy, paleo succulents
      typewriter. Listicle bicycle rights pork belly kale chips
      dreamcatcher gluten-free PBR&B leggings +1 lo-fi letterpress
      keffiyeh tbh ennui skateboard. Small batch actually man bun
      sustainable bespoke try-hard af mlkshk listicle slow-carb
      literally craft beer photo booth synth thundercats. PBR&B you
      probably haven't heard of them put a bird on it occupy salvia
      XOXO copper mug sriracha raw denim. Ramps bushwick skateboard
      subway tile keffiyeh meh listicle palo santo aesthetic
      polaroid. Vegan jean shorts sustainable stumptown hammock woke
      fashion axe meh. Pork belly shaman sartorial pok pok.
    </p> -->
    <div class="row my-3">
      <article class="col-12">
        <p>
          <span class="long_conf"><?php echo $META['name'];?></span> will take place in
          <span class="conf_location"><?php echo $META['city'] . ', ' . $META['country'];?></span>
          on <span class="conf_dates"><?php echo $META['dates'];?></span>.
          <span class="conf_name"><?php echo $META['name'];?></span> is organized by <a href="http://iacr.org/">the International Association for Cryptologic Research</a> (IACR).
        </p>
        <p>
          Please visit the <a href="./callforpapers.html">call for papers</a> page while we work on adding more information to our other pages. Thank you for your patience.
        </p>
      </article>
    </div>

    <section class="row my-3">
      <div class="col-md-6">
        <article class="customCard">
          <div class="customCardHeader">
            <h3>
              Example Dates
            </h3>
          </div>
          <div class="customCardRow row">
            <p class="dateTitle col-5 col-md-4">
              Feb 13 2050
            </p>
            <p class="col-7 col-md-8">
              Submission deadline at 04:00:00 UTC
            </p>
          </div>
          <div class="customCardRow row">
            <p class="dateTitle col-5 col-md-4">
              March 30 2050
            </p>
            <p class="col-7 col-md-8">
              First round notification
            </p>
          </div>
          <div class="customCardRow row">
            <p class="dateTitle col-5 col-md-4">
              April 5 2050
            </p>
            <p class="col-7 col-md-8">
              Rebuttals due by 11:45:00 UTC
            </p>
          </div>
          <div class="customCardRow row">
            <p class="dateTitle col-5 col-md-4">
              April 22 2050
            </p>
            <p class="col-7 col-md-8">
              Final notification
            </p>
          </div>
          <div class="customCardRow row">
            <p class="dateTitle col-5 col-md-4">
              July 5 2050
            </p>
            <p class="col-7 col-md-8">
              Camera-ready version
            </p>
          </div>
          <div class="customCardRow row">
            <p class="dateTitle col-5 col-md-4">
              Sept 1 2050
            </p>
            <p class="col-7 col-md-8">
              Conference begins
            </p>
          </div>
          <div class="customCardFooter">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> To convert UTC to your local time zone, <a href="https://www.timeanddate.com/time/zone/timezone/utc">click here</a>.
          </div>
        </article>
      </div>

      <div class="col-md-6">
        <article class="customCard">
          <div class="customCardHeader">
            <h3>
              Website Updates
            </h3>
          </div>
          <div class="customCardRow row">
            <p class="dateTitle col-5 col-md-4">
              April 20 2017
            </p>
            <p class="col-7 col-md-8">
              Web developer added a cool new feature to the site
            </p>
          </div>
          <div class="customCardRow row">
            <p class="dateTitle col-5 col-md-4">
              April 18 2017
            </p>
            <p class="col-7 col-md-8">
              Updates for demo of this site
            </p>
          </div>
          <div class="customCardRow row">
            <p class="dateTitle col-5 col-md-4">
              March 28 2017
            </p>
            <p class="col-7 col-md-8">
              <a href="./callforpapers.html">Call for papers</a> page updated
            </p>
          </div>
          <div class="customCardRow row">
            <p class="dateTitle col-5 col-md-4">
              March 20 2017
            </p>
            <p class="col-7 col-md-8">
              Website launched
            </p>
          </div>
        </article>
      </div>
    </section>

    <div class="row">
      <section class="col-sm-12">
        <h3 class="pageSubtitle">
          Example Sponsors
        </h3>
        <a href="http://kaymckelly.com/">
          <img src="./images/demo/examplesponsor1.png" alt="black and white vector graphic of an elephant" class="sponsorLogo firstLogo" />
        </a>
        <a href="http://kaymckelly.com/">
          <img src="./images/demo/examplesponsor2.png" alt="deep blue vector graphic of a map pin with a piece missing from the circle at the top" class="sponsorLogo" />
        </a>
      </section>
    </div>


  </main>

  <?php include "includes/footer.php";?>
</body>
</html>
