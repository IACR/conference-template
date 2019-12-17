<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>

    <title>
      <?php echo $META['shortName'];?> Accepted Papers
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

  <main class="container mt-4">
    <h2 class="indPageTitle">
      Accepted Papers
    </h2>

    <!-- NOTE: if json/papers.json exists, then this will generate the list of papers. -->
    <?php
       if (file_exists('json/papers.json')) {
         try {
           $papers = json_decode(file_get_contents("json/papers.json"), true);
           if ($papers === null) {
             throw new Exception('json file is malformed');
           }
           $papers = $papers['acceptedPapers'];
           echo '<p>In order of submission:</p>';
           echo  '<ol id="accepted">';
           foreach($papers as $paper) {
             echo '<li><h4 class="paperTitle">' . $paper['title'] . '</h4>';
	     echo ' <p>' . $paper['authors'] . '<br/>';
             echo '  <span class="font-italic"> ' . $paper['affiliations'] . '</span></p></li>';
           }
           echo '</ol>';
         } catch (Exception $e) {
           echo '<p class="text-danger">papers.json file is malformed.</p>';
         }
       } else {
         echo '<p>This information is not yet available. This information will be available after authors are notified, which should occur by ' . $META['finalNotification'] . '. Thank you for your patience.</p>';
       }
    ?>

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
    <!-- Handlebars -->
    <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js" type="text/javascript"></script>

</body>
</html>
