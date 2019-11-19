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
        <h2 class="indPageTitle">Accepted Papers</h2>
      </div>
    </div>

    <!-- NOTE: below is standard placeholder text for when the page is under construction. please delete this entire <div class="row"> and all elements contained within it when ready to add other content -->
    <div class="row">
      <div id="errorBox" class="col-sm-12">
        <!-- NOTE: this is where any error messages will appear. please check the developer console for further information on the error -->
      </div>
    </div>

    <!-- NOTE: this <p> is meant to be a secondary under construction message after you have deleted the above standard placeholder text,  and should be deleted once the accepted papers are released -->
    <div class="row">
      <section class="col-sm-12">
        <p>
          This information is not yet available, but if it were, it would look like what appears below. We expect this information to be ready after when we notify authors of our decision, which is March 30 2050. Thank you for your patience.
        </p>

        <p>
          In order of submission:
        </p>
      </section>
    </div>


    <div class="row">
      <section class="col-sm-12">
        <ol id="accepted">

          <!-- Handlebars import of accepted papers in websubrev export format -->
          <script id="acceptedScript" type="text/x-handlebars-template">
            {{#each acceptedPapers}}
            <li>
              <h4 class="paperTitle">
                {{title}}
              </h4>
              <p>
                {{authors}}
                <br />
                {{affiliations}}
              </p>
            </li>
            {{/each}}
          </script>

        </ol>
      </section>
    </div>

  </main>

  <?php include "includes/footer.php";?>

</body>
</html>
