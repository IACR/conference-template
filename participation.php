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
      <div class="row">
        <div class="col-md-7">
          <p>
            There are many ways you can participate in an IACR virtual conference. Your participation is valuable and we encourage you to add to the discussion. Like a face-to-face conference, virtual conferences are only as good as the interactions that occur there.
          </p>
          <p>
            We recognize that a virtual conference is not a 1:1 substitute for a physical conference. However, we believe there are distinct advantages to having a virtual conference. These include a lack of space constraints, travel is not required, and the ability to attend all talks since they are recorded.
          </p>
        </div>
        <div class="col-md-5">
          <p class="alert alert-warning mb-0 mt-md-5">
            We recommend monitoring <a href="program.php">the conference program</a> to see which sessions are upcoming.
          </p>
        </div>
      </div>

      <!-- TODO: new section -->
      <h3 class="pageSubtitle mt-4">
        Schedule Structure
      </h3>
      <p>
        conf organized over 5 days with 4 hours per day. sessions will include live panel discussions (brief summaries of the papers, which are grouped by topic, followed by a Q&A), invited talks, and a rump session.
      </p>

      <!-- TODO: how to participate in session: can view p.d live on zoom/yt or asynch on yt. Q&A primarily live in zoom but will try to monitor the corresponding slack channel. will need to be linked to from program (use id? separate page?) -->

      <h3 class="pageSubtitle mt-4">
        Ways to Participate
      </h3>
      <div class="row">
        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4 mb-md-4">
          <h4 class="subSubtitle text-md-center">
            Webinar
          </h4>
          <p>
            We will be holding live Q&A panels with authors multiple times daily. At these panels, attendees will be able to ask questions of authors about their work, or to encourage interesting conversation amongst authors. These Q&As will be livestreamed on our YouTube channel and are available for later viewing.
          </p>
        </div>

        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4 mb-md-4">
          <h4 class="subSubtitle text-md-center">
            Chat
          </h4>
          <p>
            Much like at a face-to-face conference, we know that the best conversations can happen in the hallways or at coffee breaks. We encourage you to make use of the Slack workspace we have set up to connect with other conference attendees. There are a variety of channels, organized by topic.
          </p>
          <div class="d-md-flex justify-content-center">
            <a href="#" class="btn btn-warning">Join the chat</a>
          </div>
        </div>

        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4 mb-md-4">
          <h4 class="subSubtitle text-md-center">
            Watch Parties
          </h4>
          <p>
            Jitsi (hosted on IACR servers) allows you to host watch parties, whereby you and others watch a talk or Q&A session together. Like chat, watch parties encourage discussion and interaction amongst attendees.
          </p>
          <div class="d-md-flex justify-content-center">
            <a href="#" class="btn btn-warning">Host or attend a watch party</a>
          </div>
        </div>

        <div class="col-md-6 mx-lg-auto mx-xl-0 col-lg-5 col-xl-4 mb-md-4">
          <h4 class="subSubtitle text-md-center">
            YouTube
          </h4>
          <p>
            If you cannot participate live, you will still have access to all talks on our YouTube channel. The authors have pre-recorded their talks and you can view them at any time. Additionally, there will be copies of the live Q&A sessions available to watch.
          </p>
          <div class="d-md-flex justify-content-around">
            <a href="#" class="btn btn-warning">Talks Playlist</a>
            <a href="#" class="btn btn-warning">Q&A Playlist</a>
          </div>
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
      <p>
        <small><sup>*</sup> Please note that if you use Safari, Firefox, or Internet Explorer, you will not be able to ask a question using your computer audio. However, you can still ask questions using the text Q&A feature.</small>
      </p>
      <p>
        If you wish to use the desktop client, there are options available for all operating systems. However, there are serious security vulnerabilities for each. The IACR does not condone the installation of Zoom desktop clients at this time (15 April 2020).
      </p>

      <h4 class="subSubtitle">
        Do I need a Zoom account?
      </h4>
      <p>
        We offer entrance to our webinars for both attendees with Zoom accounts and those without. When you log in via the browser client, Zoom will ask for an email. This does not have to be a legitimate email address. However, if you plan to use the desktop client, you will need a Zoom account.
      </p>

      <p class="alert alert-danger">
        All conference attendees must be IACR members. When you participate in Q&A, chat, etc, you must do so in such a way that you are readily identifiable (i.e. by using the name you are known by in professional contexts). The <a href="conduct.php">code of conduct</a> still applies in a virtual setting.
      </p>

    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
