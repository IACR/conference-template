<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> program"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> program"/>

    <title>
      <?php echo $META['shortName'];?> Program
    </title>
    <style>
     #renderedProgram .track1Event,
     #renderedProgram .track2Event,
     #renderedProgram .mutualEvent {
       padding: 1rem;
     }
     ul.nav .nav-link:hover {
       background-color: #eeeeee;
     }
    </style>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Program
      </h2>
      
      <!-- NOTE: below is placeholder content derived from the Crypto 2016 conference. remove and replace with your own content when ready. this code is here to give you an idea of what the structure of this page has looked like in the past
           <p>
             All track 1 events at this fictitious conference will
             take place in Corwin Pavilion, while all track 2 events
             are in Lotte Lehmann Hall, unless otherwise noted. Track
             1 events have a green background and track 2 events have
             an orange background. Events for everyone or those that
             are not assigned to a particular track have a light blue
             background.
           </p>
           -->

      <div class="alert alert-info">
        <p>
          Sessions will be conducted as panel discussions in
        which authors give a very brief overview (5 minutes) of their papers, and then
        take live questions from the panel moderators and audience.  Links to individual
        papers have been added below, but you can also find links to
        the full LNCS volumes here: <a href="https://link.springer.com/book/10.1007/978-3-030-45721-1">12105</a>,
        <a href="https://link.springer.com/book/10.1007/978-3-030-45724-2">12106</a>,
        <a href="https://link.springer.com/book/10.1007/978-3-030-45727-3">12107</a>.
        Most papers below have links to individual videos prepared by the authors,
        but there is also a <a href="https://www.youtube.com/playlist?list=PLeeS-3Ml-rpp-srdkwAWDA9hlvEyOZCcx">playlist
          on YouTube</a>
        </p>
        <p>
          The program below has links to chat streams on individual sessions, but there is also
          a <a href="https://iacr.org/virtualconferences/?dest=YU52Q0NBbVMyR3NaVmUwMnFLRjdHNUZYTWtTa1JCaDcrWTg3NUU5WU0yQ0xHbmZ1R2JrZEJsWVppTzdSdnhJSw%3D%3D&iv=5KMMgmAtaYA0TOIlQkhgiw%3D%3D&ivlen=16&conf=eurocrypt2020&auth=e71dea793855f195b746d4d8890d0f313236e1f2a25588429a16722aae9d461f">general stream</a> if
          you want to start there with chat.
          Links to Zoom webinars will appear on Sunday
        </p>
      </div>
      <p class="alert alert-info">
        <strong>Your timezone appears to be <span id="timezone"></span>.
          Times in the schedule are shown in your local timezone. Dates are
          in UTC. If the times seem inconvenient, keep in mind that this is an
          international conference with a European-centric schedule.
        </strong>
      </p>
      <!-- 
      <div class="row">
        <div class="col-12 col-md-10 mx-auto">
          <h3 class="alert alert-warning text-center">Currently happening: <a href="#session-36">Panel Discussion: Attacks</a></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-10 mx-auto">
          <h3 class="alert alert-warning text-center">Coming up in <span class="" id="countdown"></span>: <a href="#session-38">Panel Discussion: Public Key Cryptography</a></h3>
        </div>
      </div>
      -->
      <div class="row">
        <div id="renderedProgram" class="col-12">
          <!-- Handlebars script that will render the program template based on the program.json file -->
          <script id="program-template" type="text/x-handlebars-template">
            <div class="mb-3" role="navigation">
              <ul class="nav nav-tabs nav-justified">
                {{#each days}}
                <li role="presentation" class="nav-item">
                  <a href="#day-{{date}}" class="nav-link">
                    {{formatDate date}}
                  </a>
                </li>
                {{/each}}
              </ul>
            </div>

            {{#each days}}
            <div class="row" id="day-{{date}}">
              <!-- This is broken if there are two tracks -->
              <div class="col-12 mb-3">
                {{#if @first}}
                {{else}}
                <hr />
                {{/if}}
                <h3 class="pageSubtitle">
                  {{formatDate date}}
                  <br class="d-sm-none">
                <small>(dates may differ in your timezone)</small>
                </h3>
              </div>
            </div>
            {{#each timeslots}}
            <div class="row">
              <div class="col-sm-2">
                <p class="timeSlot text-center" title="UTC: {{../date}} {{starttime}}-{{endtime}}">
                  {{localstarttime}} <br>to<br> {{localendtime}}<br>
                <small class="text-center">(UTC: {{starttime}}-{{endtime}})</small>
                </p>
              </div>
              {{#if twosessions}}
              <div class="col-10 col-sm-5">
                <div class="track1Event">
                  <h5 class="text-center">
                    {{sessions.0.session_title}}
                    {{#if sessions.0.session_url}}
                    &nbsp; <a href="{{sessions.0.session_url}}"><img class="sessionInfoIcon" src="images/icons/info.svg" title="Session Info"></a>
                    {{/if}}
                  </h5>
                  {{#if sessions.0.location.name}}
                  <p class="dualTrackDescr">
                    {{sessions.0.location.name}}
                  </p>
                  {{/if}}
                  {{#if sessions.0.moderator}}
                  <p class="dualTrackDescr">
                    {{sessions.0.moderator}}
                  </p>
                  {{/if}}
                  {{#each sessions.0.talks}}
                  <p class="talkTitle">
                    {{title}}
                  </p>
                  <p class="dualTrackDescr">
                    {{#each authors}}
                    <span class="authorName">{{this}}</span>
                    {{/each}}
                  </p>
                  {{#if paperUrl}}
                  <span class="talkMedia">
                    Media: &nbsp; <a href="{{paperUrl}}"><img class="talkMediaIcon" src="images/icons/file.svg" title="Paper"></a>
                  </span>
                  {{/if}}
                  {{#if slidesUrl}}
                  <span class="talkMedia">
                    &nbsp; <a href="{{slidesUrl}}"><img class="talkMediaIcon" src="images/icons/presentation.svg" title="Slides"></a>
                  </span>
                  {{/if}}
                  {{#if videoUrl}}
                  <span class="talkMedia">
                    &nbsp; <a href="{{videoUrl}}"><img class="talkMediaIcon" src="images/icons/video.svg" title="Video"></a>
                  </span>
                  {{/if}}
                  {{/each}}
                </div>
              </div>
              <!-- This is visible only on mobile, when sessions wrap -->
              <div class="col-2 d-sm-block d-md-none">
                <p class="timeSlot">
                  {{starttime}}-{{endtime}}
                </p>
              </div>
              <div class="col-10 col-sm-5">
                <div class="track2Event">
                  <h5 class="text-center">
                    {{sessions.1.session_title}}
                    {{#if sessions.1.session_url}}
                    &nbsp; <a href="{{sessions.1.session_url}}"><img class="sessionInfoIcon" src="images/icons/info.svg" title="Session Info"></a>
                    {{/if}}
                  </h5>
                  {{#if sessions.1.location.name}}
                  <p class="dualTrackDescr">
                    {{sessions.1.location.name}}
                  </p>
                  {{/if}}
                  {{#if sessions.1.moderator}}
                  <p class="dualTrackDescr">
                    {{sessions.1.moderator}}
                  </p>
                  {{/if}}
                  {{#each sessions.1.talks}}
                  <p class="talkTitle">
                    {{title}}
                  </p>
                  <p class="dualTrackDescr">
                    {{#each authors}}
                    <span class="authorName">{{this}}</span>
                    {{/each}}
                  </p>
                  {{#if paperUrl}}
                  <span class="talkMedia">
                    Media: &nbsp; <a href="{{paperUrl}}"><img class="talkMediaIcon" src="images/icons/file.svg" title="Paper"></a>
                  </span>
                  {{/if}}
                  {{#if slidesUrl}}
                  <span class="talkMedia">
                    &nbsp; <a href="{{slidesUrl}}"><img class="talkMediaIcon" src="images/icons/presentation.svg" title="Slides"></a>
                  </span>
                  {{/if}}
                  {{#if videoUrl}}
                  <span class="talkMedia">
                    &nbsp; <a href="{{videoUrl}}"><img class="talkMediaIcon" src="images/icons/video.svg" title="Video"></a>
                  </span>
                  {{/if}}
                  {{/each}}
                </div>
              </div>
              {{else}}
              <div class="col-sm-10">
                <div class="mutualEvent">
                  <h4 id="{{sessions.0.id}}">
                    {{sessions.0.session_title}}
                    {{#if sessions.0.session_url}}
                    &nbsp; <a href="{{sessions.0.session_url}}"><img class="sessionInfoIcon" src="images/icons/info.svg" title="Session Info"></a>
                    {{/if}}
                  </h4>
                  {{#if sessions.0.youtubeUrl}}
                  <a class="btn btn-info m-3" href="{{sessions.0.youtubeUrl}}">YouTube</a>
                  {{/if}}
                  {{#if sessions.0.chatUrl}}
                  <a class="btn btn-info m-3" href="{{sessions.0.chatUrl}}">Chat</a>
                  {{/if}}
                  {{#if sessions.0.zoomUrl}}
                  <a class="btn btn-info m-3" href="{{sessions.0.zoomUrl}}">Zoom webinar</a>
                  {{/if}}
                  {{#if sessions.0.location.name}}
                  <p class="eventDescr">
                    {{sessions.0.location.name}}
                  </p>
                  {{/if}}
                  {{#if sessions.0.moderator}}
                  <p class="eventDescr">
                    {{sessions.0.moderator}}
                  </p>
                  {{/if}}
                  {{#each sessions.0.talks}}
                  <p class="mutualEventTalkTitle">
                    {{title}}
                  </p>
                  <p class="eventDescr">
                    {{#each authors}}
                    <span class="authorName">{{this}}</span>
                    {{/each}}
                  </p>
                  {{#if paperUrl}}
                  <span class="talkMedia">
                    Media: &nbsp; <a href="{{paperUrl}}"><img class="talkMediaIcon" src="images/icons/file.svg" title="Paper"></a>
                  </span>
                  {{/if}}
                  {{#if slidesUrl}}
                  <span class="talkMedia">
                    &nbsp; <a href="{{slidesUrl}}"><img class="talkMediaIcon" src="images/icons/presentation.svg" title="Slides"></a>
                  </span>
                  {{/if}}
                  {{#if videoUrl}}
                  <span class="talkMedia">
                    &nbsp; <a href="{{videoUrl}}"><img class="talkMediaIcon" src="images/icons/video.svg" title="Video"></a>
                  </span>
                  {{/if}}
                  {{/each}}
                </div>
              </div>
              {{/if}}
            </div>
            {{/each}}
            {{/each}}
          </script>

        </div>
      </div>

    </main>

    <?php include "includes/footer.php"; ?>
    <!-- Handlebars -->
    <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js" type="text/javascript"></script>

    <!-- Personal scripts -->
    <script src="./js/tooltips.js"></script>
    <script src="https://iacr.org/libs/js/moment/moment.js"></script>
    <script src="https://iacr.org/libs/js/moment/moment-timezone-with-data-10-year-range.js"></script>
    <script src="./js/program.js?v=2"></script>
    <script>
      const now = new Date();
      let offset = now.getTimezoneOffset();
      //      document.getElementById('timezone').innerText = 'UTC' + offset;
      console.dir(moment.tz.guess());
      document.getElementById('timezone').innerText = moment.tz.guess();
    </script>
    
  </body>
</html>
