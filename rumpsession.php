<!DOCTYPE html>
<html lang="en">

<head>
  <?php // The header includes the head tag and start of body
  require "includes/head.php";
  ?>
  <meta property="og:title" content="<?php echo $META['shortName']; ?> rump session" />
  <meta name="twitter:title" content="<?php echo $META['shortName']; ?> rump session" />

  <title>
    <?php echo $META['shortName']; ?> Rump Session
  </title>
  <style>
    div.userTime {
      font-size: 80%;
    }
  </style>
</head>

<body>
  <?php require "includes/nav.php"; ?>

  <main class="container-lg px-4 px-lg-0">
    <h2 class="indPageTitle">
      Rump Session
    </h2>

    <!-- NOTE: below is standard placeholder text for when the page is under
      construction. IACR does not have a standard way to organize rump session
      submissions,  but we encourage you to use the program editor to create
      your program: https://iacr.org/tools/program and then copy stuff from
      program.php and js/program.js. If you're having trouble or have
      questions, contact Kay McKelly. -->
    <p>
      This information is not yet available, but will become
      available prior to the conference start date.
      Thank you for your patience.
    </p>

    <!-- NOTE: uncomment the below section when you're ready to add the rump
      session program -->
    <!-- <h3 class="pageSubtitle mt-4">
      Program
    </h3>
    <p>
      Your timezone appears to be <span id="timezone"></span>. Times in
      the schedule are shown in both the conference and your local timezones.
    </p>
    <div class="text-center">
      <a class="btn customBtn-cool mb-4" href="#">YouTube Recording</a>
    </div>
    <div id="renderedProgram">
    </div> -->

    <!-- NOTE: uncomment the below section when you're ready to add
      submission guidelines -->
    <!--
      <h3 class="pageSubtitle mt-4">
        Call for contributions
      </h3>
      <p>
        some very cool and real text about submitting your schtick
      </p>

      <h3 class="pageSubtitle mt-4">
        Submission guidelines
      </h3>
      <div class="row">
        <div class="col-md-7">
          <p>
            <strong>Time constraints:</strong> 1-5 minutes, 6 minutes if very funny
          </p>
          <p>
            <strong>Submission deadline:</strong> DATE & TIME
          </p>
        </div>
        <div class="col-md-5">
          <a href="#" class="btn customBtn-warm blockBtn mt-3 mb-5 mb-md-3">
            Submit a talk
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h3 class="pageSubtitle mt-4">
            Platform
          </h3>
          <p>
            probably a stage or something, you don't have to bring your own
            microphone though so that's lucky
        </div>
        <div class="col-md-6">
          <h3 class="pageSubtitle mt-4">
            Format
          </h3>
          <p>
            more info and details
          </p>
        </div>
      </div>

      <h3 class="pageSubtitle mt-4">
        Detailed instructions
      </h3>
      <p>
        even more info, for the exacting rump session chair
      </p>

      <div class="alert alert-danger">
        <img src="images/icons/alert-triangle.svg" class="icon" />
        <strong>A final reminder: do not play copyrighted music as part of your
        talks. Yes, we're serious. Yes, we know it's a bummer. Since the rump
        session is recorded and posted on YouTube, if you play copyrighted
        music, the IACR YouTube account is at risk of being shut down. Please
        don't put us at risk!</strong>
      </div>

      <h3 class="pageSubtitle text-center mt-4">
        Rump session chairs
      </h3>
      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-sm-6 col-md-4 text-center mb-2">
          <h4 class="subSubtitle">
            Cool human #1
          </h4>
          <p class="text-center">
            Trashcan University<br>
            The Falklands
          </p>
        </aside>
        <aside class="col-12 col-sm-6 col-md-4 text-center mb-2">
          <h4 class="subSubtitle">
            Cool human #2
          </h4>
          <p class="text-center">
            Beep Boop University<br>
            Robotlandia
          </p>
        </aside>
        <aside class="col-12 col-sm-6 col-md-4 mx-auto text-center mb-2">
          <h4 class="subSubtitle">
            Cool human #3
          </h4>
          <p class="text-center">
            Institute of Definitely Real Research<br>
            Switzerland
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <a href="mailto:veryRealEmail@iacr.org">
            <img src="images/icons/mail.svg" class="icon" />
          </a> veryRealEmail@iacr.org
        </div>
      </div>
      -->

    <!-- Handlebars script that will render the program template based on the
      program.json file -->
    <script id="program-template" type="text/x-handlebars-template">
      {{#each days}}
        {{#each timeslots}}
          <div class="row" id="{{id}}">
            <!-- tabbedSessions is set in program.js if it's narrow or has >2 parallel tracks -->
            {{#if tabbedSessions}}
              <div class="col-12 col-md-3">
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
              <div class="col-12 col-md-3 col-xl-2">
                <p class="timeSlot text-center" title="{{@root/config/timezone/shortName}}: {{../date}} {{starttime}}-{{endtime}}">
                <div class="text-center localTime">
                  {{@root/config/timezone/shortName}}: {{starttime}}-{{endtime}}
                </div>
                <div class="text-center userTime">{{localstarttime}} <br class="d-none d-md-inline">to<br class="d-none d-md-inline"> {{localendtime}}</div>
                </p>
              </div>
            {{/if}}
            <div class="col-12 col-md-9 col-xl-8">
              <div class="{{#if tabbedSessions}}sessionList tab-content pb-3 tabbedSessions{{else}}sessionList d-flex inlineSessions pb-3{{/if}}" {{#if tabbedSessions}}id="ts-{{@../index}}-{{@index}}-tabContent" {{/if}}>
                {{#each sessions}}
                  <div {{#if ../tabbedSessions}}class="session tab-pane fade {{#if @first}} show active{{/if}}" id="session-{{@../../index}}-{{@../index}}-{{@index}}" role="tabpanel" aria-labelledby="session-{{@../../index}}-{{@../index}}-{{@index}}-tab" {{else}}class="session" {{/if}}>
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
                            <a class="toggle-closed" data-toggle="collapse" data-type="abstract" href="#abstract-{{id}}" role="button" aria-expanded="false" aria-controls="abstract-{{id}}">Show abstract</a>
                          </div>
                          <div id="abstract-{{id}}" class="collapse mb-2 text-left paper-abstract">
                            {{{abstract}}}
                          </div>
                        {{/if}}
                        {{#if hasMedia}}<span class="talkMedia"></span>{{/if}}
                        {{#if paperUrl}}
                          <span class="talkMedia">
                            <a href="{{paperUrl}}" target="_blank"><img class="talkMediaIcon" src="images/icons/file.svg" title="Paper"></a>
                          </span>
                        {{/if}}
                        {{#if eprint}}
                          <span class="talkMedia">
                            &nbsp;<a href="https://eprint.iacr.org/{{eprint}}" target="_blank"><img class="talkMediaIcon" src="images/icons/lock-open-outline.svg" title="eprint"></a>
                          </span>
                          {{#if eprint2}}
                            <span class="talkMedia">
                              &nbsp;<a href="https://eprint.iacr.org/{{eprint2}}" target="_blank"><img class="talkMediaIcon" src="images/icons/lock-open-outline.svg" title="eprint for paper 2"></a>
                            </span>
                          {{/if}}
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

  <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js"></script>
  <script src="https://iacr.org/libs/js/luxon/luxon.js"></script>
  <script src="js/program.js?v=2"></script>

  <script>
    var DateTime = luxon.DateTime;
    let now = DateTime.local();
    document.getElementById('timezone').innerText = now.zoneName;
    $(document).ready(function() {
      var theTemplateScript = $("#program-template").html();
      var theTemplate = Handlebars.compile(theTemplateScript);
      // In case the portal crashes, use this line instead: ';
      installProgram('json/rump.json?v=' + Date.now(), theTemplate, 'renderedProgram');
    });
  </script>
</body>

</html>