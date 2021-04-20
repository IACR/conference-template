<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> affiliated events"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> affiliated events"/>

    <title>
      <?php echo $META['shortName'];?> Affiliated Events
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Affiliated Events
      </h2>
      <p>
        IACR is soliciting for affiliated events to be held in
        conjunction with <?php echo $META['shortName'];?> on
        <span class="editMe">Saturday, August 15, and/or Sunday, August 16</span>.
        Each such event is expected to provide a forum discussing a
        specific topic of the broad cryptographic world (theory, practice,
        implementation, standardizations, etc.). The format of the event
        (e.g., workshop, tutorial, etc.) is up to the organizers.
      </p>

     <h3 class="pageSubtitle">
       Call for Affiliated Events
     </h3>
      <p>
        Affiliated events can be 1-2 days long.
        Proposals for events should be submitted by email to the workshop
        chair at <span class="editMe">***insert email address of affiliated
        workshops person*** by DATE & TIME</span>.
      </p>
      <!-- <span class="editMe">
        <p>
  	      The workshop organizers will provide for each event:
        </p>
        <ul>
          <li>Conference room with a projector</li>
          <li>Coffee breaks (lunch will be provided at the attendees’ expense at UCSB food services)</li>
          <li>Internet access</li>
          <li>Registration services (registration desk, nametags, etc.)</li>
        </ul>
      </span> -->

      <h4 class="subSubtitle">
        Information to Submitters
      </h4>
      <p>
        The organization of an affiliated event is supposed to be
        relatively easy. <span class="editMe">The entire registration process as well as
        the local organization is done by the IACR (via
        the general and workshop
        chairs).</span> The proposal submitters need to identify a topic and
        decide on the format, and upon acceptance coordinate the
        program/speakers.
      </p>
      <p>
        The registration fee for attendees of affiliated events will be charged
        via the registration process and will cover the incurred costs for the
        location and equipment. Being registered for a given day of workshop
        enables a participant to attend any of the workshops of that particular
        day.
      </p>
      <p>
      	Any additional costs (e.g. costs of the program,
      	reimbursements to invited speakers, or printing proceedings)
      	are the responsibility of the individual event
      	organizers.
      </p>
      <t>
        The organizers of the accepted events are expected to maintain an
        updated website (which will be linked from the <?php echo
        $META['shortName'];?> website), containing all relevant information for
        participants.
      </p>

      <h4 class="subSubtitle">
        Submission Format for Affiliated Event Proposals
      </h4>
      <p>
        Proposals for affiliated events should include the following information
        in this order:
      </p>
      <ol>
        <li>Name (and possible acronym) of the event</li>
        <li>Names and contact information of the organizers</li>
        <li>Length of event (1-2 days); if 1 day, indicate flexibility for
        dates</li>
        <li>A proposed format (workshop with submitted/invited talks, tutorial,
        panel, etc.) and potential speakers (if applicable, not complete,
        and no commitment)</li>
        <li>Abstract summarizing the proposed event and its justification</li>
        <li>In the case of a submission process:</li>
        <ul>
          <li>Potential committee members</li>
          <li>A draft of the relevant call (including expected dates such as
          submission deadline, notification, etc.)</li>
        </ul>
        <li>Estimated number of attendees total and an expected number of
        student attendees</li>
        <li>List of specific potential attendees (not complete, and no
        commitment); this will help coordinate timing of events that might
        overlap in audience</li>
        <li>A one-paragraph biographical sketch for each organizer, describing
        relevant qualifications, including research and conference/workshop
        organizing experience</li>
        <li>Funding sources that may be used (and for what purposes)</li>
        <li>Information of previous similar events (incl. organizational
        information such as attendance number), if applicable</li>
        <li>Link to draft website (if exists)</li>
      </ol>
      <p>
        A file (preferably in PDF format) containing all the above
        information should be sent to
        <span class="editMe">insert email address of workshops chair</span>.
        by the submission deadline.
      </p>

      <!-- <div class="row my-3">
        <div class="offset-lg-2 col-lg-8">
          <article class="customCard">
            <h4 class="customCardHeader">
              Important Dates
            </h4>
            <div class="customCardRow row">
              <h6 class="dateTitle col-6 col-md-5">
                <span class="editMe">31 Jan 2020</span>
              </h6>
              <p class="col-6 col-md-7">
                Submission deadline for proposals
              </p>
            </div>
            <div class="customCardRow row">
              <h6 class="dateTitle col-6 col-md-5">
                <span class="editMe">20 Feb 2020</span>
              </h6>
              <p class="col-6 col-md-7">
                Notification of decision
              </p>
            </div>
          </article>
        </div>
      </div> -->

      <h4 class="subSubtitle">
        Proposal Evaluation Criteria
      </h4>
      <p>
        Given the limited amount of conference rooms available, events
        will be selected based on their novelty, importance, and
        interest that they may have in the cryptographic
        community. The agreement of leading members of the
        cryptographic community to engage with the event (as
        speakers or committee members) will be taken into account.
      </p>
      <div class="row mt-4">
        <aside class="col-12 text-center">
          <h3 class="pageSubtitle text-left">
            Still Have Questions?
          </h3>
          <span class="editMe">
            <h4 class="subSubtitle mt-3">
              Teach Professory
            </h4>
            <p class="text-center">
              University of Cool Cats<br>
              Israel
            </p>
            <a href="mailto:doNotEmailMe@fakeDomain.com">
              <img src="images/icons/email.svg" class="icon" />
            </a>&nbsp;
            doNotEmailMe@fakeDomain.com
          </span>
        </aside>
      </div>

      <!-- NOTE: this is one way of arranging the page if you have multiple affiliated events and would like to include their schedules, but this is by no means the only way of arranging the page (this example is from Crypto 2020) -->
      <!--
      <p>
        This page now provides a unified view of the schedules of the affiliated events.
        Times and dates are provided both in UTC and in your local timezone, which
        appears to be <span id="timezone"></span>.
      </p>
      <div class="mt-3 row">
        <div class="col-md-6">
          <article class="customCard">
            <h4 class="customCardHeader">
              CFAIL (Conference for Failed Approaches and Insightful Losses in Cryptology)
            </h4>
            <div class="p-3">
              <h5 class="text-center">Saturday August 15</h5>
              <h5>Contact: Allison Bishop</h5>
              <p class="mt-3"><strong>Abstract: </strong>
                The Conference for Failed Approaches and Insightful
                Losses in cryptology is an annual event that
                celebrates the crucial role that failure plays in the
                advancement of cryptologic research. Our mission is to
                encourage the sharing of insights gained from failed
                research attempts within our community by providing a
                publication venue for such works.
                </p>
              <a class="w-75 mx-auto btn customBtn-cool btn-outline-dark btn-block" href="https://www.cfail.org/upcoming-events">Workshop website</a>
            </div>
            <div id="cfail_program" class="p-3">
            </div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="customCard">
            <h4 class="customCardHeader">
              ACAS (Standardization and Applications)
            </h4>
            <div class="p-3">
              <h5 class="text-center">Saturday August 15th</h5>
              <h5>Contact: Daniel Benarroch and Tancrède Lepoint</h5>
              <p class="mt-3"><strong>Abstract: </strong>
                The past decade has witnessed the first successful
                deployments of encrypted computing, multiparty
                computation, and cryptographic zero-knowledge proofs
                as privacy preserving technologies. In order to enable
                the mainstream use of these technologies and educate
                application developers, several community based
                standardization groups have been created
                (<a href="https://homomorphicencryption.org">homomorphicencryption.org</a>,
                <a href="https://zkproof.org/">zkproof.org</a>,
                <a href="https://mpcalliance.org/">mpcalliance.org</a>)
                and standard organizations (ISO,
                NIST) are already considering how to standardize these
                advanced cryptographic techniques.
              </p>
              <p>
                The Advanced Cryptography Applications and Standards
                workshop serves to bring together the industry,
                academia and standardization bodies around the
                adoption and usability of privacy-enhancing advanced
                cryptographic schemes. It aims to highlight the
                importance and challenges of deploying these
                techniques in real-world applications, as well as of
                standardizing these complex cryptographic protocols.
                </p>
              <a class="w-75 mx-auto btn customBtn-cool btn-outline-dark btn-block" href="https://zkproof.org/acas20">Workshop website</a>
            </div>
          <div id="acas_program" class="p-3">
          </div>
          </article>
        </div>
      </div>
      <div class="mt-3 row">
        <div class="col-md-6">
          <article class="customCard">
            <h4 class="customCardHeader">
              PPML (Privacy Preserving Machine Learning)
            </h4>
            <div class="p-3">
              <h5 class="text-center">Sunday August 16th</h5>
              <h5>Contact: Gilad Asharov, Rafail Ostrovsky and Antigoni Polychroniadou</h5>
              <p class="mt-3">
                <strong>Abstract: </strong> The workshop
                on privacy preserving machine learning aims to
                strengthen collaborations among the machine learning
                and cryptography communities. The scope includes
                privacy preserving techniques for training, inference,
                and disclosure.
              </p>
              <a class="w-75 mx-auto btn customBtn-cool btn-outline-dark btn-block" href="https://crypto-ppml.github.io/2020/">Workshop website</a>
            </div>
            <div id="ppml_program" class="p-3">
            </div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="customCard">
            <h4 class="customCardHeader">
              Attacks in Crypto
            </h4>
            <div class="p-3">
      	      <h5 class="text-center">Sunday August 16th</h5>
              <h5>Contact: <a href="https://eyalro.net/">Eyal Ronen</a> and <a href="https://www.mathyvanhoef.com/">Mathy Vanhoef</a></h5>
              <p class="mt-3"><strong>Abstract: </strong> Cryptography
                is often thought of as the bright spot of practical
                security, a mathematical paradise where security can
                be rigorously proven and issues like buffer overflows
                are in someone else’s department. However, there is a
                growing community of researchers who regularly find
                serious flaws in widely deployed cryptographic
                implementations and protocols. In recent years, this
                type of research has mostly been published in systems
                security conferences. This workshop will bring
                together researchers who work on cryptographic attacks
                and provide a showcase of their work for the Crypto
                community. This is the third edition of the WAC
                workshop, which has been established by Nadia
                Heninger.
              </p>
              <a class="w-75 mx-auto btn customBtn-cool btn-outline-dark btn-block" href="wac.php">Workshop website</a>
            </div>
            <div id="attacks_program" class="p-3">
            </div>
          </article>
        </div>
      </div>

      template for affiliated program. Note that this is different
           from ordinary program. It only allows a single session, so do
           not reuse
      <script id="program-template" type="text/x-handlebars-template">
        <hr>
        <h4 class="text-center pageSubtitle">Schedule</h4>
        {{#each days}}
        {{#each timeslots}}
        <p class="timeSlot text-center" title="UTC: {{../date}} {{starttime}}-{{endtime}}">
          {{localstarttime}} to {{localendtime}}<br>
          <small class="text-center">(UTC: {{starttime}}-{{endtime}})</small>
        </p>
        <div class="row">
          <div class="col-sm-12">
            <div class="mutualEvent">
              <h4 id="{{sessions.0.id}}">
                {{sessions.0.session_title}}
                {{#if sessions.0.session_url}}
                &nbsp; <a href="{{sessions.0.session_url}}"><img class="sessionInfoIcon" src="images/icons/info.svg" title="Session Info"></a>
                {{/if}}
                {{#if sessions.0.calendar}}
                <div class="ml-3 text-right dropdown d-inline-block">
                  <a id="{{sessions.0.id}}-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="sessionInfoIcon" title="Add to Calendar" src="images/icons/calendar-outline.svg"></a>
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
              {{#if sessions.0.chatUrl}}
              <a class="btn customBtn-cool m-3" target="_blank" href="{{sessions.0.chatUrl}}">Chat</a>
              {{/if}}
              {{#if sessions.0.zoomUrl}}
              <a class="btn customBtn-cool m-3" target="_blank" href="{{sessions.0.zoomUrl}}">Zoom room</a>
              {{/if}}
              {{#if sessions.0.miscUrl}}
              <a class="btn customBtn-cool m-3" href="{{sessions.0.miscUrl.url}}">{{sessions.0.miscUrl.title}}</a>
              {{/if}}
              {{#if sessions.0.location.name}}
              <p class="eventDescr">
                {{{sessions.0.location.name}}}
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
        -->
    </main>

    <?php include "includes/footer.php"; ?>
    <!-- NOTE: if you include schedules of affiliated events on this page, you'll like also need the following things -->
    <!--
    <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js" type="text/javascript"></script>
    <script src="https://iacr.org/libs/js/moment/moment.js"></script>
    <script src="https://iacr.org/libs/js/moment/moment-timezone-with-data-10-year-range.js"></script>

    <script src="./js/program.js?v=6"></script>
    <script>
     $(document).ready(function() {
       let theTemplateScript = $("#program-template").html();
       let theTemplate = Handlebars.compile(theTemplateScript);
       installProgram('addLinks.php?affil=cfail&v=' + Date.now(), theTemplate, 'cfail_program');
       installProgram('addLinks.php?affil=acas&v=' + Date.now(), theTemplate, 'acas_program');
       installProgram('addLinks.php?affil=ppml&v=' + Date.now(), theTemplate, 'ppml_program');
       installProgram('addLinks.php?affil=attacks&v=' + Date.now(), theTemplate, 'attacks_program');
       document.getElementById('timezone').innerText = moment.tz.guess();
     });
    </script>
    -->
  </body>
</html>
