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
          <h4 class="subSubtitle text-md-center">
            Webinar
          </h4>
          <p>
            We will be holding live Q&A panels with authors multiple times daily. At these panels, attendees will be able to ask questions of authors about their work, or to encourage interesting conversation amongst authors. These Q&As will be livestreamed on our YouTube channel and are available for later viewing, should you not wish to watch them live.
          </p>
        </div>

        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4">
          <h4 class="subSubtitle text-md-center">
            Chat
          </h4>
          <p>
            Much like at a face-to-face conference, we know that the best conversations can happen in the hallways or at coffee breaks. We encourage you to make use of the Slack workspace we have set up to connect with other conference attendees. There are a variety of channels, organized by topic.
          </p>
        </div>

        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4">
          <h4 class="subSubtitle text-md-center">
            YouTube
          </h4>
          <p>
            If you cannot participate live, you will still have access to all talks on our YouTube channel. The authors have pre-recorded their talks and you can view them at any time. Additionally, there will be copies of the live Q&A sessions available to watch.
          </p>
        </div>
      </div>

      <h3 class="pageSubtitle mt-4">
        Attending a Webinar
      </h3>
      <p>
        We are using Zoom for our live Q&A sessions. (Learn more about the IACR's statement on Zoom <a href="#">here</a>.) <strong>You do not have to install Zoom software to attend a webinar</strong>, though it is recommended. If you plan to attend a webinar session using your browser, it needs to be one of the following:
      </p>
      <ul>
        <li>
          Internet Explorer<sup>*</sup> 10 or higher
        </li>
        <li>
          Microsoft Edge 38.14393.0.0 or higher
        </li>
        <li>
          Google Chrome 53.0.2785 or higher
        </li>
        <li>
          Safari<sup>*</sup> 10.0.602.1.50 or higher
        </li>
        <li>
          Firefox<sup>*</sup> 49.0 or higher
        </li>
        <li>
          Chromium (not officially supported by Zoom, but the IACR has tested it and it appears to work similarly to Chrome)
        </li>
      </ul>
      <small>
        <sup>*</sup> Please note that if you use Safari, Firefox, or Internet Explorer, you will not be able to ask a question using your computer audio. You can still ask questions using the text Q&A feature.
      </small>
      <p>
        If you wish to use the desktop client, it is available for Linux, Mac, and Windows.
      </p>

    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
