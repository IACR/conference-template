<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> accepted papers"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> accepted papers"/>

    <title>
      <?php echo $META['shortName'];?> Accepted Papers
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

  <main class="container p-4">
    <h2 class="indPageTitle">
      Accepted Papers
    </h2>

    <!-- NOTE: if json/papers.json exists, then this will be hidden. -->
    <p id="notYetAvailable">
      This information is not yet available. This information will be available after authors are notified, which should
      occur by <?php echo $META['finalNotification'];?>. Thank you for your patience.
    </p>

    <!-- NOTE: if json/papers.json is malformed, this will be shown. -->
    <p id="jsonWarning" class="text-danger d-none">
      The papers.json file is malformed.
    </p>

    <!-- NOTE: if json/papers.json is fetched and parsed, this is populated. -->
    <div id="accepted">
    </div>

    <!-- Handlebars import of accepted papers in websubrev export format. See
         json/sample_papers.json  -->
    <script id="acceptedScript" type="text/x-handlebars-template">
      <p>
        These papers are listed in order of submission.
      </p>
      <ol>
        {{#each acceptedPapers}}
        <li>
          <h5 class="paperTitle">
            {{title}}
          </h5>
          <p>
            {{authors}}
            <br>
            <small class="font-italic">{{affiliations}}</small>
          </p>
        </li>
        {{/each}}
      </ol>
    </script>
  </main>

  <?php include "includes/footer.php";?>

  <!-- Handlebars -->
  <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js" type="text/javascript"></script>
  <script>
    function removeDups(arr) {
      let unique = {};
      arr.forEach(function(i) {
        if(!unique[i]) {
          unique[i] = true;
        }
      });
      return Object.keys(unique);
    }

   try {
     fetch('json/papers.json',
           {credentials: 'same-origin'})
       .then(response => {
         console.dir(response);
         console.dir(response.status);
         if (response.ok && response.status == 200) {
           return response.json();
         }
       })
       .then(data => {
         if (data) {
          data.acceptedPapers.forEach((paper) => {
            paper.authors = paper.authors.join(', ');
          });
          data.acceptedPapers.forEach((paper) => {
            paper.affiliations = removeDups(paper.affiliations).join(', ');
          });

           var theTemplateScript = $("#acceptedScript").html();
           var theTemplate = Handlebars.compile(theTemplateScript);
           var theCompiledHtml = theTemplate(data);
           $('#accepted').html(theCompiledHtml);
           $('#notYetAvailable').hide();
         }
       })
       .catch((e) => {
         console.log('an error occurred');
         $('#jsonWarning').removeClass('d-none');
         console.dir(e);
       });
   } catch (error) {
     console.dir(error);
     $('jsonWarning').html('The server is failing or your browser is not supported.');
     $('#jsonWarning').removeClass('d-none');
   }
  </script>
</body>
</html>
