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
     li.nav-item {
       border-radius: 10px;
       border-color: black;
     }
     ul.nav .nav-link:hover {
       background-color: #eeeeee;
     }
     .nav-tabs .nav-link {
       margin-right: .5rem;
       padding-left: 2rem;
       padding-right: 2rem;
       border-color: #e9ecef #e9ecef #dee2e6;
       border-top-left-radius: .6rem;
       border-top-right-radius: .6rem;
       font-weight: 600;
       background-color: #f2f2f2;
     }
    </style>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container">
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

      <div id="renderedProgram">
        <h4>Loading...</h4>
      </div>

      <!-- Handlebars script that will render the program template based on the program.json file -->
      <script id="program-template" type="text/x-handlebars-template">
        <div role="navigation">
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
          <div class="col-12 col-sm-5">
            <hr />
            <h3 class="pageSubtitle">
              {{formatDate date}}
            </h3>
          </div>
        </div>
        {{#each timeslots}}
        <div class="row">
          <div class="col-3">
            <p class="timeSlot">
              {{starttime}}-{{endtime}}
            </p>
          </div>
          <div class="col-9">
            {{#tabbedSessions @root.isNarrow sessions}}
            <div class="sessionWrapper carousel-wrapper" id="timeslot-{{@../index}}-{{@index}}">
              <div class="slideControls d-flex w-100 justify-content-center">
                <button class="btn btn-sm btn-info slide-prev-butt">Previous</button>
                <div class="mx-3 my-2">
                  Track <span class="slide_selected">1</span> of <span class="slide_count"></span>
                </div>
                <button class="btn btn-sm btn-info slide-next-butt">Next   </button>
              </div>
              <div class="sessionList carousel">
            {{else}}
            <div class="sessionWrapper">
              <div class="sessionList d-flex inlineSessions">
            {{/tabbedSessions}}
            {{#each sessions}}
              <div class="session {{#tabbedSessions @root.isNarrow ../sessions}}slide_card{{#if @first}} active{{/if}}{{/tabbedSessions}}">
                      <h5 class="text-center">
                        {{session_title}}
                        {{#if session_url}}
                        &nbsp; <a href="{{session_url}}"><img class="sessionInfoIcon" src="images/icons/info.svg" title="Session Info"></a>
                        {{/if}}
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
                      <div class="talkAbstract">
                        <a class="toggle-closed" data-toggle="collapse" href="#abstract-{{id}}" role="button" aria-expanded="false" aria-controls="abstract-{{id}}">
                          Show abstract
                        </a>
                      </div>
                      <div id="abstract-{{id}}" class="collapse mb-2 text-justify">
                        {{abstract}}
                      </div>
                      {{/if}}
                      <p class="authorList">
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
                      {{/each}}
                    </div>
                    {{/each}} <!-- sessions -->
                  </div>
                </div> <!-- conclude sessionWrapper -->
              </div> <!-- col-9 -->
            </div>
            {{/each}}
            {{/each}}
      </script>
    </main>

    <?php include "includes/footer.php"; ?>
    <!-- Handlebars -->
    <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js" type="text/javascript"></script>

    <!-- Personal scripts -->
    <script src="./js/tooltips.js"></script>
    <script src="js/slides.js"></script>
    <script src="./js/program.js"></script>

  </body>
</html>
