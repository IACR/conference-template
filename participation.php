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
        <div class="col-md-6">
          <p>
            There are many ways you can participate in an IACR virtual conference. Your participation is valuable and we encourage you to add to the discussion. Like a face-to-face conference, virtual conferences are only as good as the interactions that occur there.
          </p>
          <p>
            We recognize that a virtual conference is not a 1:1 substitute for a physical conference. However, we believe there are distinct advantages to having a virtual conference. These include a lack of space constraints, travel is not required, and the ability to attend all talks since they are recorded.
          </p>
        </div>

        <div class="col-md-6 mt-md-4">
          <p class="alert alert-warning">
            <img src="images/icons/exclamation.svg" class="icon"> All conference attendees must be IACR members. When you participate in Q&amp;A, chat, etc, you must do so in such a way that you are readily identifiable (i.e. by using the name you are known by in your professional work). The <a href="conduct.php">code of conduct</a> still applies in a virtual setting.
          </p>
        </div>
      </div>


      <h3 class="pageSubtitle mt-4">
        Schedule Structure
      </h3>
      <p>
        The conference is organized over 5 days, with approximately 4 hours per day. Sessions consist of live panel discussions (i.e. brief summaries of the papers, which are grouped by topic, followed by a Q&amp;A with the authors), invited talks, and a rump session. We recommend monitoring <a href="program.php">the conference program</a> to see which sessions are upcoming.
      </p>

      <!-- <hr> -->

      <!-- <h3 class="pageSubtitle mt-4">
        How to Attend <?php echo $META['shortName'];?>
      </h3>
      <h4 class="subSubtitle">
        Attend a Webinar (via Zoom)
      </h4>
      <p>
        We will be holding live Q&amp;A panels with authors
        multiple times daily. At these panels, attendees will be
        able to ask questions of authors about their work, or to
        encourage interesting conversation amongst authors. These
        Q&amp;As will be available on the Zoom platform with
        live Q&amp;A, but also livestreamed on our YouTube channel and
        will be available for later viewing. Links to the webinars
        will appear on the program if you are registered.
      </p>

        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4 mb-md-4">
          <h4 class="subSubtitle text-md-center">
            Chat (Zoom, Zulip)
          </h4>
          <p>
            Please reserve Zoom chat for questions that directly pertain to the live session in progress.
          </p>
        </div>
      </div> -->

      <h3 class="pageSubtitle mt-4">
        Ways to Participate
      </h3>
      <div class="row">
        <div class="col-md-6 mx-lg-auto col-lg-5 mb-md-4">
          <h4 class="subSubtitle text-md-center">
            Webinar
          </h4>
          <p>
            We will be holding live Q&amp;A panels with authors
            multiple times daily. At these panels, attendees will be
            able to ask questions of authors about their work, or to
            encourage interesting conversation amongst authors. These
            Q&amp;As will be available on the Zoom platform with
            live Q&amp;A, but also livestreamed on our YouTube channel and
            will be available for later viewing. Links to the webinars
            will appear on the program if you are registered.
          </p>
        </div>

        <div class="col-md-6 mx-lg-auto col-lg-5 mb-md-4">
          <h4 class="subSubtitle text-md-center">
            YouTube
          </h4>
          <p>
            If you cannot participate live, you will still have access
            to all talks on
            our <a href="https://youtube.com/TheIACR/">YouTube
            channel</a>. The authors should have pre-recorded their
            talks and you can view them at any time. Additionally,
            there will be copies of the live Q&amp;A sessions
            available to watch.
          </p>
<!--          <div class="d-md-flex justify-content-around">
            <a href="#" class="btn btn-warning">Talks Playlist</a>
            <a href="#" class="btn btn-warning">Q&amp;A Playlist</a>
          </div>-->
        </div>

        <div class="col-md-11 mx-md-auto mb-md-4">
          <h4 class="subSubtitle text-md-center">
            Chat & Watch Parties
          </h4>
          <p>
            Much like at a face-to-face conference, we know that the
            best conversations can happen in the hallways or at coffee
            breaks. We encourage you to make use of the IACR chat
            server running Zulip to connect with other conference
            attendees. There are a variety of streams, organized by
            topic. Links to streams will appear on <a href="program.php">the program</a>.
            You can also start video chat rooms from this.
<!--            Links to the chat will appear on the program if you are
            registered. -->
          </p>
          <div class="d-md-flex justify-content-center mb-2">
           <a href="https://iacr.org/virtualconferences/?dest=YU52Q0NBbVMyR3NaVmUwMnFLRjdHNUZYTWtTa1JCaDcrWTg3NUU5WU0yQ0xHbmZ1R2JrZEJsWVppTzdSdnhJSw%3D%3D&iv=5KMMgmAtaYA0TOIlQkhgiw%3D%3D&ivlen=16&conf=eurocrypt2020&auth=e71dea793855f195b746d4d8890d0f313236e1f2a25588429a16722aae9d461f" class="btn btn-warning">Join the chat</a>
          </div>
          <div class="row">
            <div class="col-sm-7">
              <h5>Video conferencing</h5>
              <p>
                Jitsi is a videoconference platform that also allows you to host watch parties.
                You can start a small videoconference on a topic using the button in chat
                that is shown in the image.
              </p>
              <p>One use of Jitsi is to host a "watch party" for a YouTube video of a talk,
                so that
                you and other attendee can watch a video together.
                Like chat, watch parties encourage discussion and interaction amongst attendees.
                Sharing of Jitsi links will occur through chat. This is where you click to
                start a video conference.
              </p>
            </div>
            <div class="col-sm-5">
              <img src="images/jitsi.png" class="img-fluid ml-3 border shadow">
            </div>
          </div>
        </div>
      </div>

      <h3 id="attendWebinar" class="pageSubtitle mt-4">
        Attending a Webinar
      </h3>
      <!-- TODO: add after first sentence below (Learn more about the IACR's statement on Zoom <a href="#">here</a>.) -->
      <div class="row">
        <div class="col-sm-7">
          <p>
            We are using Zoom for our live Q&amp;A sessions. <strong>You
            do not have to install Zoom software to attend a
            webinar.</strong> If you plan to attend a webinar session
            using your browser, it needs to be one of the following:
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
            <small><sup>*</sup> Please note that if you use Safari, Firefox, or Internet Explorer, you will not be able to ask a question using your computer audio. However, you can still ask questions using the text Q&amp;A feature.</small>
          </p>
          <p>
            If you wish to use the desktop client, there are options available for all operating systems. However, there are serious security vulnerabilities for each. The IACR does not recommend the installation of Zoom desktop clients at this time (10 May 2020).
          </p>
        </div>

        <div class="col-sm-5">
          <p class="text-center">How to enter a webinar with the <a href="https://support.zoom.us/hc/en-us/articles/214629443-Zoom-web-client">web client</a>.</p>
          <img src="images/zoom/annoying_zoom_windows.png" class="img-fluid border shadow">
        </div>
      </div>

      <h4 class="subSubtitle mt-4 mt-sm-0">
        Do I need a Zoom account?
      </h4>
      <p>
        We offer entrance to our webinars for both attendees with Zoom accounts and those without. When you log in via the browser client, Zoom will ask for an email. This does not have to be a legitimate email address. However, if you plan to use the desktop client, you will need a Zoom account.
      </p>

        <h3 class="pageSubtitle mt-4">
        Frequently Asked Questions
      </h3>
      <h4 class="subSubtitle">
        How do I ask a question during the live Q&amp;A sessions?
      </h4>
      <p>
        We strongly encourage you to use the Q&amp;A function in Zoom webinar, but we will also make an effort to monitor the corresponding chat channel.
      </p>

      <h4 class="subSubtitle">
        The session times are not convenient for me. What can I do?
      </h4>
      <p>
        Unfortunately, due to the wide variety of time zones IACR members live in, we cannot accommodate everyone.
        We strongly encourage those who cannot attend live events to still participate in the conference asynchronously.
      </p>
      <p>
        Live Q&amp;A sessions and invited talks are streamed to YouTube and available for viewing after the fact. You can also watch any of the pre-recorded talks on YouTube, or participate via chat. If you don't want to watch the talks on YouTube alone, you could host a watch party for others in your time zone.
      </p>

      <h4 class="subSubtitle">
        Zoom/chat/YouTube all have security and privacy issues. Does this mean the IACR endorses these technologies?
      </h4>
      <p>
        No. There was no perfect solution available, and we had a very quick turnaround time, so we opted for commercial options that had a high degree of reliability while offering the best user experience. The IACR acknowledges the security and privacy problems of each of these technologies, and our use of them is not to be considered an endorsement.
      </p>
      <p>
        For future IACR virtual events, we hope to be able to host more services on our own servers.
      </p>

    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
