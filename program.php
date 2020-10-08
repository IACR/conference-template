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
     #renderedProgram .mutualEvent {
       padding: 1rem;
     }
     ul.nav .nav-link:hover {
       background-color: #eeeeee;
     }
     div.dropdown-menu.calendar {
       background-color: white;
     }
     div.dropdown-menu.calendar a {
       color: #102a83;
     }
    </style>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Program
      </h2>

      <p>
        The program is not yet available, please check back later.
      </p>

      <!-- <div class="row">
        <div class="col-md-6">
          <p class="alert customAlert-cool">
            Links to papers, videos, live sessions, and chat will be added as they become available. Additional social activities may also be added. We encourage you to check the program frequently.
            <br><br>
            The papers are available at
            <a target="_blank" href="https://link.springer.com/book/10.1007/978-3-030-56784-2">Volume I</a>,
            <a target="_blank" href="https://link.springer.com/book/10.1007/978-3-030-56880-1">Volume II</a>, and
            <a target="_blank" href="https://link.springer.com/book/10.1007/978-3-030-56877-1">Volume III</a>.
            Links to individual papers are below, but they will not work until you first
            <a href="https://link.springer.com/book/10.1007/978-3-030-56877-1">click here</a> to set a cookie from Springer.
            After the conference, IACR members may also
            access the papers by <a href="https://iacr.org/publications/access.php">logging as an IACR member</a>.
          </p>
        </div>
        <div class="col-md-6">
          <p class="alert customAlert-cool">
            Your timezone appears to be <span id="timezone"></span>. Times in the schedule are shown in your local timezone. <strong>Note that dates are in UTC; this may be inconsistent with the date in your time zone!</strong>
            <br><br>
            If the times seem inconvenient, keep in mind that this is an international conference with a <span class="editMe">US-centric</span> schedule.
          </p>
        </div>
      </div> -->

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

                  <div class="col-sm-10">
                    <div class="mutualEvent">
                      <h4 id="{{sessions.0.id}}">
                        {{sessions.0.session_title}}
                        {{#if sessions.0.session_url}}
                          &nbsp; <a href="{{sessions.0.session_url}}"><img class="sessionInfoIcon" src="images/icons/info.svg" title="Session Info"></a>
                        {{/if}}
                        {{#if sessions.0.calendar}}
                          <div class="ml-3 text-right dropdown d-inline-block">
                            <a id="{{sessions.0.id}}-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="sessionInfoIcon" title="Add to Calendar" src="images/icons/calendar.svg"></a>
                            <div class="dropdown-menu calendar" aria-labelledby="{{sessions.0.id}}-btn">
                              {{#each sessions.0.calendar}}
                                <div class="dropdown-item">
                                  <a target="_blank" rel="nofollow" href="{{this}}">{{@key}}</a>
                                </div>
                              {{/each}}
                            </div>
                          </div>
                        {{/if}}
                      </h4>

                      {{#if sessions.0.youtubeUrl}}
                        <a class="btn customBtn-cool m-3" href="{{sessions.0.youtubeUrl}}">YouTube</a>
                      {{/if}}
                      {{#if sessions.0.miscUrl}}
                        <img src="images/party.png" target="_blank" style="width:48px" title="party icon by Oksana Latysheva, color added by Kay McKelly" alt="3 icons of people with streamers overhead">
                      {{/if}}
                      {{#if sessions.0.chatUrl}}
                        <a class="btn customBtn-cool m-3" target="_blank" href="{{sessions.0.chatUrl}}">Chat</a>
                      {{/if}}
                      {{#if sessions.0.zoomUrl}}
                        <a class="btn customBtn-cool m-3" target="_blank" href="{{sessions.0.zoomUrl}}">Zoom room</a>
                      {{/if}}
                      {{#if sessions.0.miscUrl}}
                        <!-- NOTE: this is a total hack to show an image, but it's a hack that's quickly becoming permanent -->
                        <a class="btn customBtn-cool m-3" target="_misc" href="{{sessions.0.miscUrl.url}}">{{sessions.0.miscUrl.title}}</a>
                        <img src="images/party.png" style="width:48px" title="party icon by Oksana Latysheva, color added by Kay McKelly" alt="3 icons of people with streamers overhead">
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
                        <span class="talkMedia">
                          Media: &nbsp;
                        </span>
                        {{#if eprint}}
                          <span class="talkMedia">
                            &nbsp; <a target="_blank" href="{{eprint}}"><img class="talkMediaIcon" src="images/icons/lock-open-outline.svg" title="Paper on eprint.iacr.org"></a>
                          </span>
                        {{/if}}
                        {{#if paperUrl}}
                          <span class="talkMedia">
                            &nbsp; <a target="_blank" href="{{paperUrl}}"><img class="talkMediaIcon" src="images/icons/file.svg" title="Paper"></a>
                          </span>
                        {{/if}}
                        {{#if slidesUrl}}
                          <span class="talkMedia">
                            &nbsp; <a target="_blank" href="{{slidesUrl}}"><img class="talkMediaIcon" src="images/icons/presentation.svg" title="Slides"></a>
                          </span>
                        {{/if}}
                        {{#if videoUrl}}
                          <span class="talkMedia">
                            &nbsp; <a target="_blank" href="{{videoUrl}}"><img class="talkMediaIcon" src="images/icons/video.svg" title="Video"></a>
                          </span>
                        {{/if}}
                      {{/each}}
                    </div>
                  </div>
                </div>
              {{/each}}
            {{/each}}
          </script>
        </div>
      </div>
    </main>

    <?php include "includes/footer.php"; ?>

    <!-- Handlebars (necessary for program template) -->
    <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js" type="text/javascript"></script>

    <!-- Personal scripts -->
    <script src="./js/tooltips.js"></script>
    <script src="https://iacr.org/libs/js/moment/moment.js"></script>
    <script src="https://iacr.org/libs/js/moment/moment-timezone-with-data-10-year-range.js"></script>

    <script src="./js/program.js?v=5"></script>

    <script>
      const now = new Date();
      let offset = now.getTimezoneOffset();
      //      document.getElementById('timezone').innerText = 'UTC' + offset;
      console.dir(moment.tz.guess());
      document.getElementById('timezone').innerText = moment.tz.guess();
      $(document).ready(function() {
        var theTemplateScript = $("#program-template").html();
        var theTemplate = Handlebars.compile(theTemplateScript);
        installProgram('currentProgram.php?v=' + Date.now(), theTemplate, 'renderedProgram');
      });
    </script>

  </body>
</html>
