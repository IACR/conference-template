<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> "/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> "/>

    <title>
      <?php echo $META['shortName'];?>
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">

      <h2 class="indPageTitle">
        Participation Guidelines
      </h2>
      <p>
        There are many ways you can participate in an IACR virtual conference. Your participation is valuable and we encourage you to add to the discussion. Like a face-to-face conference, virtual conferences are only as good as the interactions that occur there.
      </p>

      <div class="row">
        <div class="col-md-10 mx-md-auto">
          <article class="customCard">
            <h4 class="customCardHeader text-center">
              When does the next session start?
            </h4>
            <p class="px-3 pt-2 pb-1 text-center">
              oooo look, a timer
            </p>
          </article>
        </div>
      </div>

      <h3 class="pageSubtitle mt-4">
        Ways to Participate
      </h3>
      <div class="row">
        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4">
          <h4 class="subSubtitle text-center">
            Webinar
          </h4>
          <p>
            We will be holding live Q&A panels with authors multiple times daily. At these panels, attendees will be able to ask questions of authors about their work, or to encourage interesting conversation amongst authors. These Q&As will be livestreamed on our YouTube channel and are available for later viewing, should you not wish to watch them live.
          </p>
        </div>

        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4">
          <h4 class="subSubtitle text-center">
            Chat
          </h4>
          <p>
            Much like at a face-to-face conference, we know that the best conversations can happen in the hallways or at coffee breaks. We encourage you to make use of the Slack workspace we have set up to connect with other conference attendees. There are a variety of channels, organized by topic.
          </p>
        </div>

        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4">
          <h4 class="subSubtitle text-center">
            YouTube
          </h4>
          <p>
            If you cannot participate live, you will still have access to all talks on our YouTube channel. The authors have pre-recorded their talks and you can view them at any time. Additionally, there will be copies of the live Q&A sessions available to watch.
          </p>
        </div>
      </div>
      <!-- TODO: this page needs info like links to webinars, how to navigate between sessions, etc -->

    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
