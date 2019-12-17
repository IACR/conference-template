<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>

    <title>
      Accommodations for <?php echo $META['shortName'];?>
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container mt-4">
      <h2 class="indPageTitle">
        Accommodations
      </h2>

      <!-- NOTE: below is standard placeholder text for when the page is under construction. please delete this entire <div class="row"> and all elements contained within it when ready to add other content -->
      <div class="row">
        <div class="col-sm-12">
          <p>
            This information is not yet available. Thank you for your patience. But if it were available, it might look something like this.
          </p>
        </div>
      </div>

      <!-- NOTE: below is placeholder content derived from the Crypto 2016 conference. remove and replace with your own content when ready. this code is here to give you an idea of what the structure of this page has looked like in the past -->
      <div class="row mt-4">
        <section class="col-md-6">
          <h3 class="pageSubtitle">On-Site Accommodations</h3>
          <p>
            Reasonably priced accommodations are available on-site for conference attendees and their registered guests. Attendees will be able to reserve on-site accommodations through a separate website. Note that children under the age of 13 cannot stay in on-site accommodations, so those bringing younger children will need to make separate arrangements in one of the nearby hotels.
          </p>
          <p>
            For attendees staying on campus, free shuttle bus service is available between here and the airport. In addition, parking is also available at no cost to attendees who reside on-site. A permit can be requested from the front desk upon arrival.
          </p>
          <p>
            Once on-site registration is available, there will be a link below.
          </p>
          <a href="http://kaymckelly.com" class="btn btn-warning btn-md btn-block disabled mb-5" role="button">Register for on-site accommodations</a>
        </section>
        <section class="col-md-6">
          <h3 class="pageSubtitle">Off-Site Accommodations</h3>
          <p>
            For those who choose not to stay on-site, the following is a list of hotels that have provided room blocks for <span class="conf_name"><?php echo $META['shortName'];?></span>. Those who choose to stay off-site are responsible for making their own reservations. Early reservations are advised since September is a popular season in <span class="conf_location"></span>.
          </p>
        </section>
      </div>

      <div class="row mt-4">
        <aside class="col-md-6 testing">
          <p>
            <img src="images/icons/exclamation.svg" class="icon" /> Room blocks may be released as early as two months prior to the conference.
          </p>
        </aside>
        <section class="col-md-6">
          <p>
            Blocks of rooms will be reserved for <span class="conf_name"><?php echo $META['shortName'];?></span> in all hotels listed below. All prices are subject to change and do not include tax; prices should be confirmed by calling the hotels directly.
          </p>
        </section>
        <aside class="col-md-6">
          <p>
            <img src="images/icons/exclamation.svg" class="icon" /> You must mention <span class="conf_name"><?php echo $META['shortName'];?></span> when you are making your reservations so you will be eligible for any special rates that may be available.
          </p>
        </aside>
      </div>

      <div class="row mt-4">
        <section class="col-12">
          <h3 class="pageSubtitle">
            Example Hotels
          </h3>
          <div class="row">
            <div class="col-md-4 d-flex flex-column mb-4">
              <h4 class="subSubtitle text-center">
                Example Hotel #1
              </h4>
              <address>
                <img src="images/icons/location.svg" class="icon mr-1" /> 1234 Internet Street<br />
                &emsp;&emsp;Ipswich, Australia<br /><br />
                <img src="images/icons/phone.svg" class="icon mr-1" /> 123.456.7890
              </address>
              <p>
                Rates: $100 single/double (Sunday - Thursday). Please note that Friday &amp; Saturday rates may differ.
              </p>
              <p>
                A very nice hotel, you'll be comfortable here with daily towel service and a large pool. Be sure to check out the walled garden or enjoy a cup of elevenses at the cafe next to the lobby. Lots of amenities.
              </p>
              <a href="http://kaymckelly.com" class="btn btn-warning btn-md btn-block mt-auto" role="button">
                Stay at Example Hotel #1
              </a>
            </div>
            <div class="col-md-4 d-flex flex-column mb-4">
              <h4 class="subSubtitle text-center">
                Example Hotel #2
              </h4>
              <address>
                <img src="images/icons/location.svg" class="icon mr-1" /> 5678 IP Drive<br />
                &emsp;&emsp;Ipswich, Australia<br /><br />
                <img src="images/icons/phone.svg" class="icon mr-1" /> 123.456.7890
              </address>
              <p>
                Rates: $150 single/double (Sunday - Thursday). Please note that Friday &amp; Saturday rates may differ.
              </p>
              <p>
                Close to everything, in an urban setting, you can walk to a variety of coffee shops for your morning cup. Watch out for the birds that live at the bird sanctuary next door though; they can be aggressive if you walk by with a croissant!
              </p>
              <p>
                Group Rate available until the end of August.
              </p>
              <a href="http://kaymckelly.com" class="btn btn-warning btn-md btn-block mt-auto" role="button">
                Stay at Example Hotel #2
              </a>
            </div>
            <div class="col-md-4 d-flex flex-column mb-4">
              <h4 class="subSubtitle text-center">
                Example Hotel #3
              </h4>
              <address>
                <img src="images/icons/location.svg" class="icon mr-1" /> 123 Encryption Avenue<br />
                &emsp;&emsp;Ipswich, Australia<br /><br />
                <img src="images/icons/phone.svg" class="icon mr-1" /> 123.456.7890
              </address>
              <p>
                Rates: $200 single/double (Sunday - Thursday). Please note that Friday &amp; Saturday rates may differ.
              </p>
              <p>
                Business travelers and well-heeled folks stay here regularly, so you'll be among friends. With a huge conference center, free wifi, access to printers and teleconference facilities, you don't have to stop working just because you're not at home. Free espressos too!
              </p>
              <a href="http://kaymckelly.com" class="btn btn-warning btn-md btn-block mt-auto" role="button">
                Stay at Example Hotel #3
              </a>
            </div>
          </div>
        </section>
      </div>

    </main>


  <?php include "includes/footer.php"; ?>
  </body>
</html>
