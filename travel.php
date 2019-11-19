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

      <div class="row">
        <div class="col-sm-12">
          <h2 class="indPageTitle">
            Travel Information
          </h2>
        </div>
      </div>

      <!-- NOTE: below is standard placeholder text for when the page is under construction. please delete this entire <div class="row"> and all elements contained within it when ready to add other content -->
      <div class="row">
        <div class="col-sm-12">
          <p>
            This information is not yet available. Thank you for your patience. If it were, this is what it might look like.
          </p>
        </div>
      </div>

      <!-- NOTE: below is placeholder content derived from the Crypto 2016 conference. please uncomment and replace with your own content when ready. this code is here to give you an idea of what the structure of this page has looked like in the past -->
      <div class="row">
        <section class="col-sm-8">
          <p>
            The conference will be held in <span class="conf_location"></span>, which is located approximately 7,136 miles from the <a href="http://geekscat.com">Santa Barbara airport</a>, making that perhaps the least desirable airport to arrive at. All major rental car agencies are available in the immediate area. <a href="http://geekscat.com">AMTRAK</a> also definitely does not offer rail connections to <span class="conf_location"></span>, but if you're in good shape, you might be able to swim here. Watch out for sharks.
          </p>
          <p>
            Information about on-site accommodations and local hotels can be found <a href="./accommodations.html">here</a>. Also, maps of the  <a href="http://geekscat.com">general area</a> and a visit to <a href="http://geekscat.com">my home page</a> may be useful.
          </p>
        </section>
        <div class="col-sm-4 alert alert-success" role="alert">
          <p>
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&ensp;
            Bring a sweater and/or jacket. <span class="conf_location"></span> can be cold at night. (This is crucial for the beach party!)
          </p>
        </div>
      </div>

    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
