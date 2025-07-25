<!DOCTYPE html>
<html lang="en">

<head>
  <?php // The header includes the head tag and start of body
  require "includes/head.php";
  ?>
  <meta property="og:title" content="<?php echo $META['shortName']; ?> affiliated events" />
  <meta name="twitter:title" content="<?php echo $META['shortName']; ?> affiliated events" />

  <title>
    <?php echo $META['shortName']; ?> Affiliated Events
  </title>
</head>

<body>
  <?php require "includes/nav.php"; ?>

  <main class="container-lg px-4 px-lg-0">
    <h2 class="indPageTitle">
      Affiliated Events
    </h2>
    <p>
      IACR is soliciting for affiliated events to be held in
      conjunction with <?php echo $META['shortName']; ?> on
      SOME DATES.
      Each such event is expected to provide a forum discussing a
      specific topic of the broad cryptographic world (theory, practice,
      implementation, standardizations, etc.). The format of the event
      (e.g., workshop, tutorial, etc.) is up to the organizers.
    </p>

    <h3 class="pageSubtitle mt-4">
      Call for affiliated events
    </h3>
    <p>
      Affiliated events can be 1-2 days long.
      Proposals for events should be submitted by email to the workshop
      chair at EMAIL by DATE & TIME.
    </p>
    <p class="mb-0">
      The workshop organizers will provide for each event:
    </p>
    <ul>
      <li class="my-2">
        Conference room with a projector
      </li>
      <li class="my-2">
        Coffee breaks (lunch will be provided at the attendees’ expense at UCSB food services)
      </li>
      <li class="my-2">
        Internet access
      </li>
      <li class="my-2">
        Registration services (registration desk, nametags, etc.)
      </li>
    </ul>

    <h4 class="subSubtitle mt-4">
      Information to Submitters
    </h4>
    <p>
      The organization of an affiliated event is supposed to be
      relatively easy. The entire registration process as well as
      the local organization is done by the IACR (via
      the general and workshop
      chairs). The proposal submitters need to identify a topic and
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
      Any additional costs (e.g., costs of the program,
      reimbursements to invited speakers, or printing proceedings)
      are the responsibility of the individual event
      organizers.
    </p>
    <p>
      The organizers of the accepted events are expected to maintain an
      updated website (which will be linked from the <?php echo $META['shortName']; ?> website),
      containing all relevant information for
      participants.
    </p>

    <h4 class="subSubtitle mt-4">
      Submission Format for Affiliated Event Proposals
    </h4>
    <p class="mb-0">
      Proposals for affiliated events should include the following information
      in this order:
    </p>

    <ol>
      <li class="my-2">
        Name (and possible acronym) of the event
      </li>
      <li class="my-2">
        Names and contact information of the organizers
      </li>
      <li class="my-2">
        Length of event (1-2 days); if 1 day, indicate flexibility for
        dates
      </li>
      <li class="my-2">
        A proposed format (workshop with submitted/invited talks, tutorial,
        panel, etc.) and potential speakers (if applicable, not complete,
        and no commitment)
      </li>
      <li class="my-2">
        Abstract summarizing the proposed event and its justification
      </li>
      <li class="my-2">
        In the case of a submission process:
      </li>
      <ul>
        <li class="my-2">
          Potential committee members
        </li>
        <li class="my-2">
          A draft of the relevant call (including expected dates such as
          submission deadline, notification, etc.)
        </li>
      </ul>
      <li class="my-2">
        Estimated number of attendees total and an expected number of
        student attendees
      </li>
      <li class="my-2">
        List of specific potential attendees (not complete, and no
        commitment); this will help coordinate timing of events that might
        overlap in audience
      </li>
      <li class="my-2">
        A one-paragraph biographical sketch for each organizer, describing
        relevant qualifications, including research and conference/workshop
        organizing experience
      </li>
      <li class="my-2">
        Funding sources that may be used (and for what purposes)
      </li>
      <li class="my-2">
        Information of previous similar events (incl. organizational
        information such as attendance number), if applicable
      </li>
      <li class="my-2">
        Link to draft website (if exists)
      </li>
    </ol>
    <p>
      A file (preferably in PDF format) containing all the above
      information should be sent to EMAIL.
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
                31 Jan 2045
              </h6>
              <p class="col-6 col-md-7">
                Submission deadline for proposals
              </p>
            </div>
            <div class="customCardRow row">
              <h6 class="dateTitle col-6 col-md-5">
                20 Feb 2045
              </h6>
              <p class="col-6 col-md-7">
                Notification of decision
              </p>
            </div>
          </article>
        </div>
      </div> -->

    <h4 class="subSubtitle mt-4">
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
        <h3 class="pageSubtitle text-start">
          Still have questions?
        </h3>
        <h4 class="subSubtitle mt-3">
          Teach Professory
        </h4>
        <p class="text-center">
          University of Cool Cats<br>
          Israel
        </p>
        <a href="mailto:doNotEmailMe@fakeDomain.com">
          <img src="images/icons/mail.svg" class="icon" />
        </a> doNotEmailMe@fakeDomain.com
      </aside>
    </div>

  </main>

  <?php include "includes/footer.php"; ?>
</body>

</html>