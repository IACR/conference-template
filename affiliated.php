<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> affiliated events"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> affiliated events"/>

    <title>
      Affiliated Events
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">Call for Affiliated Events</h2>
      <p>
        IACR is soliciting for affiliated events to be held in
        conjunction with <?php echo $META['shortName'];?> on Saturday, August 15, and/or Sunday,
        August 16. Each such event is expected to provide a forum discussing a
        specific topic of the broad cryptographic world (theory, practice,
        implementation, standardizations, etc.). The format of the event
        (e.g., workshop, tutorial, etc.) is up to the organizers.
      </p>

     <h3 class="pageSubtitle">
       Affiliated Events
     </h3>
      <p>
        Affiliated events can be 1-2 days long.
        Proposals for events should be submitted by email to the <span class="conf_name"></span> workshop
        chair at
        <a href="mailto:crypto2020workshopchair@gmail.com">crypto2020workshopchair@gmail.com</a>.
        by January 31st, 2020 (23:59 UTC).
      </p>
      <p>
	The <span class="conf_name"></span> workshop organizers will provide for each event:
      </p>
      <ul>
        <li>Conference room with a projector</li>
        <li>Coffee breaks (lunch will be provided at the attendees’ expense at UCSB food services)</li>
        <li>Internet access</li>
        <li>Registration services (registration desk, nametags, etc.)</li>
      </ul>

      <h3 class="pageSubtitle">
        Information to Submitters
      </h3>
      <p>
        The organization of an affiliated event is supposed to be
        relatively easy.  The entire registration process as well as
        the local organization is done by the IACR (via
        the <span class="conf_name"></span> general and workshop
        chairs).  The proposal submitters need to identify a topic and
        decide on the format, and upon acceptance coordinate the
        program/speakers.
      </p>
      <p>
        The registration fee for attendees of affiliated events will
        be charged via the <span class="conf_name"></span>
        registration process and will cover the incurred costs for
        the location and equipment.  Being registered for a given
        day of workshop enables a participant to attend any of the
        workshops of that particular day.
      </p>
      <p>
	Any additional costs (for example, costs of the program,
	reimbursements to invited speakers, or printing proceedings)
	fall into the responsibility of the individual event
	organizers.
      </p>
      <p>
        The organizers of the accepted events are expected to maintain
        an updated website (which will be linked from
        the <span class="conf_name"></span> website), containing all
        relevant information for participants.
      </p>

      <h3 class="pageSubtitle">
        Submission Format for Affiliated Event Proposals
      </h3>
      <p>
        Proposals for <span class="conf_name"></span> affiliated
        events should include the following information in this order:
      </p>
      <ol>
        <li>Name (and possible acronym) of the event</li>
        <li>Names and contact information of the organizers</li>
        <li>Length of event (1-2 days); if 1 day, indicate flexibility for Saturday/Sunday</li>
        <li>A proposed format (workshop with submitted/invited talks, tutorial, panel, etc.) and potential speakers (if applicable, not complete, and no commitment)</li>
        <li>Abstract summarizing the proposed event and its justification</li>
        <li>In the case of a submission process:</li>
        <ul>
          <li>Potential committee members</li>
          <li>A draft of the relevant call (including expected dates such as submission deadline, notification, etc.)</li>
        </ul>
        <li>Estimated number of attendees total and an expected number of student attendees</li>
        <li>List of specific potential attendees (not complete, and no commitment) – This will help coordinate timing of events that might overlap in audience</li>
        <li>A one-paragraph biographical sketch for each organizer, describing relevant qualifications, including research and conference/workshop organizing experience</li>
        <li>Funding sources that may be used (and for what purposes)</li>
        <li>Information of previous similar events (incl. organizational information such as attendance number), if applicable</li>
        <li>Link to draft website (if exists)</li>
      </ol>
      <p>
        A file (preferably in PDF format) containing all the above
        information should be sent to
        <a href="mailto:crypto2020workshopchair@gmail.com">crypto2020workshopchair@gmail.com</a>.           
        by the submission deadline.
      </p>

      <h3 class="pageSubtitle">
        Important Dates
      </h3>
          
      <table style="margin-bottom: 20px;">
        <tbody>
          <tr>
            <td style="width: 300px;">Submission deadline for proposals:</td>
            <td>January 31, 2020, 23:59 UTC</td>
          </tr>
          <tr>
            <td>Notification will be sent by:</td>
            <td>February 20, 2020</td>
          </tr>
        </tbody>
      </table>

      <h3 class="pageSubtitle">
        Proposal Evaluation Criteria
      </h3>
      <p>
        Given the limited amount of conference rooms available, events
        will be selected based on their novelty, importance, and
        interest that they may have in the cryptographic
        community.  The agreement of leading members of the
        cryptographic community to engage with the event (as
        speakers or committee members) will be taken into account.
      </p>
      <p>
        For any questions please contact the workshop chair:
      </p>
      <address class="text-center">
        Carmit Hazay<br>
        Bar-Ilan University<br/>
        Israel<br/>
        <tt>crypto2020workshopchair@gmail.com</tt>
      </address>
    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
