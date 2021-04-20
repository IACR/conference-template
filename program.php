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
      ul.nav .nav-link:hover, div.dropdown-menu.calendar {
        background-color: #EEE;
      }

      div.dropdown-menu.calendar a {
        color: #102A83;
      }

      a.toggle-open:after {
        content:' -';
        font-weight: 800;
      }

      a.toggle-closed:after {
        content: " ›";
        font-weight: 800;
      }

      #scrollButtons {
        width: 2rem;
        position: sticky;
        left: 0;
        bottom: 1.3rem;
      }

      #scrollSessionButton {
        display: none;
      }
    </style>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Program
      </h2>

      <p class="alert customAlert-cool my-4 w-75 mx-auto">
        <span class="editMe">Links to papers, videos, live sessions, and chat
        will be added as they become available. Additional social activities
        may also be added. We encourage you to check the program frequently.
        </span>
      </p>

      <div class="row">
        <div id="renderedProgram" class="col-12">
          <h4 class="text-center">
           Loading...
         </h4>
        </div>
      </div>

      <div id="scrollButtons">
        <img title="current session" id="scrollSessionButton" onclick="scrollToSession();" src="images/icons/time-outline.svg">
        <img onclick="window.scrollTo({top: 0,left: 0, behavior: 'smooth'})" src="images/icons/arrow-up-circle-outline.svg">
      </div>

      <!-- Handlebars script that will render the program template based on the
      program.json file -->
      <script id="program-template" type="text/x-handlebars-template">

        <!-- navigation tabs for each day (zooms you to that day in the
        program) -->
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

        <!-- the schedule for each day of the conference -->
        {{#each days}}
          <div class="row" id="day-{{date}}">
            <div class="col-12 mb-3">
              {{#if @first}}
              {{else}}
                <hr />
              {{/if}}
              <h3 class="pageSubtitle">
                {{formatDate date}}
              </h3>
            </div>
          </div>

          {{#each timeslots}}
            <div class="row" id="{{id}}">
              <!-- tabbedSessions is set in program.js if it's narrow or has >2
              parallel tracks -->
              {{#if tabbedSessions}}
                <div class="col-4 col-md-2 pr-0">
                  <p class="timeSlot mr-3">{{starttime}}-{{endtime}}</p>
                  <div class="trackMenu nav flex-column nav-pills align-items-end" id="ts-{{@../index}}-{{@index}}-tab" role="tablist" aria-orientation="vertical">
                    {{#each sessions}}
                      <a title="{{session_title}}" class="nav-link {{#if @first}} active{{/if}}" id="session-{{@../../index}}-{{@../index}}-{{@index}}-tab" data-toggle="pill" href="#session-{{@../../index}}-{{@../index}}-{{@index}}" role="tab" href="#session-{{@../../index}}-{{@../index}}-{{@index}}" aria-controls="session-{{@../../index}}-{{@../index}}-{{@index}}" aria-selected="{{#if @first}}true{{else}}false{{/if}}">Track {{#addOne @index}}{{/addOne}}</a>
                    {{/each}}
                  </div>
                </div>
              {{else}}
                <div class="col-4 col-md-2">
                  <p class="timeSlot">{{starttime}}-{{endtime}}</p>
                </div>
              {{/if}}

              <div class="pl-0 col-8 col-md-10">
                <div class="{{#if tabbedSessions}}sessionList tab-content pb-3 tabbedSessions{{else}}sessionList d-flex inlineSessions pb-3{{/if}}" {{#if tabbedSessions}}id="ts-{{@../index}}-{{@index}}-tabContent"{{/if}}>
                  {{#each sessions}}
                    <div {{#if ../tabbedSessions}}class="session tab-pane fade {{#if @first}} show active{{/if}}" id="session-{{@../../index}}-{{@../index}}-{{@index}}" role="tabpanel" aria-labelledby="session-{{@../../index}}-{{@../index}}-{{@index}}-tab"{{else}}class="session"{{/if}}>
                      <!-- TODO: is this id correct/necessary? -->
                      <h5 id="{{sessions.0.id}}">
                        {{session_title}}
                        {{#if session_url}}
                          &nbsp; <a href="{{session_url}}">
                            <img class="sessionInfoIcon" src="images/icons/info.svg" title="Session Info">
                          </a>
                        {{/if}}
                        <!-- TODO: add calendar -->
                        <!-- {{#if sessions.0.calendar}}
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
                        {{/if}} -->
                      </h5>
                      {{#if location.name}}
                        <p class="trackDescr">
                          {{location.name}}
                        </p>
                      {{/if}}
                      {{#if moderator}}
                        <p class="trackDescr">
                          {{moderator}}
                        </p>
                      {{/if}}

                      {{#each talks}}
                        <p class="talkTitle">
                          {{title}}
                        </p>
                        {{#if abstract}}
                        <!-- TODO: this appears to be a little simpler,
                        DOM-wise, in the virtual template. possible to simplify
                        here as well? -->
                          <div class="talkAbstract">
                            <a class="toggle-closed" data-toggle="collapse" href="#abstract-{{id}}" role="button" aria-expanded="false" aria-controls="abstract-{{id}}">
                              Show abstract
                            </a>
                          </div>
                          <div id="abstract-{{id}}" class="collapse mb-2 text-justify">
                            {{abstract}}
                          </div>
                        {{/if}}
                        <!-- TODO: possible to simplify
                        here as well? -->
                        <p class="authorList">
                          {{#each authors}}
                            <span class="authorName">{{this}}</span>
                          {{/each}}
                        </p>
                        {{#if speakers}}
                          <p class="eventDescr">
                            Speaker(s): {{speakers}}
                          </p>
                        {{/if}}
                        <span class="talkMedia">
                          Media: &nbsp;
                        </span>
                        {{#if eprint}}
                          <span class="talkMedia">
                            &nbsp; <a target="_blank" href="{{eprint}}">
                              <img class="talkMediaIcon" src="images/icons/lock-open-outline.svg" title="Paper on eprint.iacr.org">
                            </a>
                          </span>
                        {{/if}}
                        {{#if paperUrl}}
                          <span class="talkMedia">
                            &nbsp; <a target="_blank" href="{{paperUrl}}">
                              <img class="talkMediaIcon" src="images/icons/file.svg" title="Paper">
                            </a>
                          </span>
                        {{/if}}
                        {{#if slidesUrl}}
                          <span class="talkMedia">
                            &nbsp; <a target="_blank" href="{{slidesUrl}}">
                              <img class="talkMediaIcon" src="images/icons/presentation.svg" title="Slides">
                            </a>
                          </span>
                        {{/if}}
                        {{#if videoUrl}}
                          <span class="talkMedia">
                            &nbsp; <a target="_blank" href="{{videoUrl}}">
                              <img class="talkMediaIcon" src="images/icons/video.svg" title="Video">
                            </a>
                          </span>
                        {{/if}}
                      {{/each}} <!-- talks within a session -->
                    </div>
                  {{/each}} <!-- session -->
                </div>
              </div> <!-- col-8/9 containing session(s) -->
            </div> <!-- end of timeslot row -->
          {{/each}} <!-- end of timeslots -->
        {{/each}} <!-- end of days -->
      </script>
    </main>

    <?php include "includes/footer.php"; ?>

    <!-- Handlebars -->
    <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js"></script>

    <!-- Personal scripts -->
    <script src="./js/tooltips.js"></script>
    <script src="./js/program.js?v=1"></script>

  </body>
</html>
