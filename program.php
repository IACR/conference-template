<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> program"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> program"/>
    <!-- This allows the referrer field to be sent to links linked from this page. -->
    <meta name="referrer" content="unsafe-url">

    <title>
      <?php echo $META['shortName'];?> Program
    </title>
    <style>

      #scrollButtons {
        width: 2rem;
        position: sticky;
        left: 0;
        bottom: 1.3rem;
      }

      #scrollSessionButton {
        display: none;
      }
      div.userTime {
        font-size: 80%;
      }
    </style>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Program
      </h2>

      <div class="row">
        <div class="col-12 col-md-6">
          <p class="alert customAlert-cool">
            <span class="editMe">Links to papers, videos, live sessions, and chat
              will be added as they become available. Additional social activities
              may also be added. We encourage you to check the program frequently.
            </span>
          </p>
        </div>
        <div class="col-12 col-md-6">
          <p class="alert customAlert-cool">
            Your timezone appears to be <span id="timezone"></span>. Times in
            the schedule are shown in both Trondheim time and your local timezone.
          </p>
        </div>
        <div id="renderedProgram">
            <h4 class="text-center">
              Loading...
            </h4>
        </div>
      </div>
      <div id="scrollButtons">
        <img alt="Scroll to current session" title="current session" id="scrollSessionButton" onclick="scrollToSession();" src="images/icons/clock.svg">
        <img alt="Scroll to top" onclick="window.scrollTo({top: 0,left: 0, behavior: 'smooth'})" src="images/icons/arrow-up-circle.svg">
      </div>

      <!-- Handlebars script that will render the program template based on the
      program.json file -->
      <script id="program-template" type="text/x-handlebars-template">
        <div role="navigation">
          <ul class="nav nav-tabs nav-justified days-nav">
            {{#each days}}
            <li role="presentation" class="nav-item">
              <a href="#day-{{date}}" class="nav-link">
                 {{{formatDate date}}}
              </a>
            </li>
            {{/each}}
          </ul>
        </div>
        {{#each days}}
        <div class="row" id="day-{{date}}">
          <div class="col-12">
            <hr />
            <h3 class="pageSubtitle">
              {{{fullDate date}}} ({{@root/config/timezone/shortName}})
            </h3>
          </div>
        </div>
        {{#each timeslots}}
        <div class="row" id="{{id}}">
          <!-- tabbedSessions is set in program.js if it's narrow or has >2 parallel tracks -->
          {{#if tabbedSessions}}
          <div class="col-12 col-md-3 pr-0">
            <p class="timeSlot text-center" title="{{@root/config/timezone/shortName}}: {{../date}} {{starttime}}-{{endtime}}">
              <div class="text-center localTime">
                {{@root/config/timezone/shortName}}: {{starttime}}-{{endtime}}
              </div>
              <div class="text-center userTime">{{localstarttime}} <br class="d-none d-md-inline">to<br class="d-none d-md-inline"> {{localendtime}}</div>
            </p>
            <div class="trackMenu nav flex-md-column nav-pills align-items-end" id="ts-{{@../index}}-{{@index}}-tab" role="tablist" aria-orientation="vertical">
            {{#each sessions}}
            <a title="{{session_title}}" class="nav-link {{#if @first}} active{{/if}}" id="session-{{@../../index}}-{{@../index}}-{{@index}}-tab" data-toggle="pill" href="#session-{{@../../index}}-{{@../index}}-{{@index}}" role="tab" href="#session-{{@../../index}}-{{@../index}}-{{@index}}" aria-controls="session-{{@../../index}}-{{@../index}}-{{@index}}" aria-selected="{{#if @first}}true{{else}}false{{/if}}">Track {{#addOne @index}}{{/addOne}}</a>
            {{/each}}
            </div>
          </div>
          {{else}} <!-- not tabbed_sessions -->
          <div class="col-12 col-md-3">
            <p class="timeSlot text-center" title="{{@root/config/timezone/shortName}}: {{../date}} {{starttime}}-{{endtime}}">
              <div class="text-center localTime">
                {{@root/config/timezone/shortName}}: {{starttime}}-{{endtime}}
              </div>
              <div class="text-center userTime">{{localstarttime}} <br class="d-none d-md-inline">to<br class="d-none d-md-inline"> {{localendtime}}</div>
            </p>
          </div>
          {{/if}}
          <div class="pl-md-0 col-12 col-md-9">
            <div class="{{#if tabbedSessions}}sessionList tab-content pb-3 tabbedSessions{{else}}sessionList d-flex inlineSessions pb-3{{/if}}"
                 {{#if tabbedSessions}}id="ts-{{@../index}}-{{@index}}-tabContent"{{/if}}>
            {{#each sessions}}
              <div {{#if ../tabbedSessions}}class="session tab-pane fade {{#if @first}} show active{{/if}}" id="session-{{@../../index}}-{{@../index}}-{{@index}}" role="tabpanel" aria-labelledby="session-{{@../../index}}-{{@../index}}-{{@index}}-tab"{{else}}class="session"{{/if}}>
                <h5 class="text-center">
                  {{session_title}}
                  {{#if session_url}}
                  &nbsp; <a href="{{session_url}}"><img class="sessionInfoIcon" src="images/icons/info.svg" title="Session Info"></a>
                  {{/if}}
                </h5>
                {{#if location.name}}
                <p class="trackDescr">
                   {{{location.name}}}
                </p>
                {{/if}}
                {{#if moderator}}
                <p class="trackDescr">
                  {{moderator}}
                </p>
                {{/if}}
                {{#if youtubeUrl}}
                   <a class="btn customBtn-cool m-3" target="_blank" href="{{youtubeUrl}}">YouTube</a>
                {{/if}}
                {{#if zoomUrl}}
                   <a class="btn customBtn-cool m-3" target="_blank" href="{{zoomUrl}}">Zoom room</a>
                {{/if}}
                {{#if chatUrl}}
                   <a class="btn customBtn-cool m-3" target="_blank" href="{{chatUrl}}">Chat</a>
                {{/if}}
                {{#each talks}}
                <p class="talkTitle">
                  {{title}}{{#if starttime}}&nbsp;({{starttime}}-{{endtime}}){{/if}}
                {{#if zoom}}
                     <a class="btn customBtn-cool m-3" target="_blank" href="{{zoom}}">Zoom room</a>
                {{/if}}
                </p>
                {{# if talkNote}}
                <p class="mb-0">{{talkNote}}</p>
                {{/if}}
                <div class="authorList">
                  {{#each authors}}
                  <span class="authorName">{{this}}</span>
                  {{/each}}
                </div>
                {{#if affiliations}}
                <small class="trackDescr">
                      <span class="font-italic affiliation">{{{affiliations}}}</span>
                </small>
                {{/if}}
                {{#if speakers}}
                   <p class="trackDescr">Speaker(s): {{speakers}}{{#if attendance}} ({{attendance}}){{/if}}</p>
                {{/if}}
                {{#if abstract}}
                <div class="talkAbstract">
                  <a class="toggle-closed" data-toggle="collapse" data-typ="abstract" href="#abstract-{{id}}" role="button" aria-expanded="false" aria-controls="abstract-{{id}}">Show abstract</a>
                </div>
                <div id="abstract-{{id}}" class="collapse mb-2 text-left paper-abstract">
                  {{~abstract~}}
                </div>
                {{/if}}
                {{#if hasMedia}}<span class="talkMedia">Media:</span>{{/if}}
                {{#if paperUrl}}
                <span class="talkMedia">
                  <a href="{{paperUrl}}" target="_blank"><img class="talkMediaIcon" src="images/icons/file.svg" title="Paper"></a>
                </span>
                {{/if}}
                {{#if eprint}}
                <span class="talkMedia">
                  &nbsp;<a href="{{eprint}}" target="_blank"><img class="talkMediaIcon" src="images/icons/lock-open-outline.svg" title="eprint"></a>
                </span>
                {{else}}
                  {{#if search}}
                  <span class="talkMedia">
                    &nbsp;<a href="{{search}}" target="_blank"><img class="talkMediaIcon" src="images/icons/search-outline.svg" title="Search for paper"></a>
                  </span>
                  {{/if}}
                {{/if}}
                {{#if videoUrl}}
                <span class="talkMedia">
                  &nbsp; <a href="{{videoUrl}}" target="_blank"><img class="talkMediaIcon" src="images/icons/video.svg" title="YouTube video"></a>
                </span>
                {{/if}}
                {{#if slidesUrl}}
                <span class="talkMedia">
                  &nbsp; <a href="{{slidesUrl}}" target="_blank"><img class="talkMediaIcon" src="images/icons/presentation.svg" title="Slides"></a>
                </span>
                {{/if}}
                {{/each}}
              </div>
              {{/each}} <!-- sessions -->
            </div>
          </div> <!-- col-8 -->
        </div> <!-- end of timeslot row -->
        {{/each}} <!-- end of timeslots -->
        {{/each}} <!-- end of days -->
      </script>
    </main>

    <?php include "includes/footer.php"; ?>

    <!-- Handlebars and Luxon -->
    <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js"></script>
    <script src="https://iacr.org/libs/js/luxon/luxon.js"></script>

    <!-- Personal scripts -->
    <script src="./js/tooltips.js"></script>
    <script src="./js/program.js?v=2"></script>
    <script>
      var DateTime = luxon.DateTime;
      let now = DateTime.local();
      document.getElementById('timezone').innerText = now.zoneName;
      $(document).ready(function() {
        var theTemplateScript = $("#program-template").html();
        var theTemplate = Handlebars.compile(theTemplateScript);
        // In case the portal crashes, use this line instead: ';
        <?php
          if (isset($_GET['badfirewall'])) {
           echo "       installProgram('currentProgram.php?allplease=yes&v=' + Date.now(), theTemplate, 'renderedProgram');";
        } else {
          // echo "installProgram('currentProgram.php?v=' + Date.now(), theTemplate, 'renderedProgram');";
          echo "installProgram('json/program.json?v=' + Date.now(), theTemplate, 'renderedProgram');";
        }?>
      });
    </script>


  </body>
</html>
