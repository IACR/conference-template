<!DOCTYPE html>
<html lang="en">

<head>
  <?php // The header includes the head tag and start of body
  require "includes/head.php";
  ?>
  <meta property="og:title" content="<?php echo $META['shortName']; ?> code of conduct" />
  <meta name="twitter:title" content="<?php echo $META['shortName']; ?> code of conduct" />

  <title>
    <?php echo $META['shortName']; ?> Code of Conduct
  </title>
</head>

<body>
  <?php require "includes/nav.php"; ?>

  <main class="container-lg px-4 px-lg-0">
    <h2 class="indPageTitle">
      Code of Conduct
    </h2>
    <p>
      You can <a href="https://www.iacr.org/docs/ethics.pdf">read more about the IACR ethics committee</a>, which was created
      in 2019 and establishes guidelines for ethical behavior within IACR.
    </p>

    <h3 class="pageSubtitle mt-4">
      Mission
    </h3>
    <p>
      <a href="https://www.iacr.org">The IACR</a> is committed to providing an experience free of harassment and discrimination in its events, respecting the dignity of every participant. We expect all participants in IACR events to exercise consideration and respect in their speech and actions and to refrain from demeaning, discriminatory, or harassing speech or behavior in all venues, including ancillary events and unofficial social gatherings.
    </p>

    <h3 class="pageSubtitle mt-4">
      Scope
    </h3>
    <p>
      The IACR Code of Conduct applies to all conferences and events run by the IACR. This does not apply to IACR publications, which are governed by separate policies. Events that are designated as “in cooperation with the IACR” are required to adopt similar code of conduct policies.
    </p>

    <h3 class="pageSubtitle mt-4">
      Responsibility for administration
    </h3>
    <p>
      The <a href="https://www.iacr.org/bod.html">IACR board</a> appoints <a href="https://www.iacr.org/committees.html">a code of conduct liaison</a>, who is empowered to form and oversee a code of conduct committee. Members of the code of conduct committee serve as additional points of contact for IACR event participants who wish to report a potential violation. Identities and contact information for the code of conduct liaison and code of conduct committee members can be found on each IACR event website. The code of conduct liaison and committee also consult with the IACR board on the evolution of these policies.
    </p>

    <h3 class="pageSubtitle mt-4">
      Policy
    </h3>
    <p>
      If you experience or witness harassment or discriminatory behavior at an IACR event, we encourage you to reach out to the code of conduct liaison, a member of the code of conduct committee, <a href="contact.php">the conference general chair(s)</a>, a member of the <a href="https://iacr.org/committees.html#ethics">IACR ethics committee</a>, or any member of <a href="https://iacr.org/bod.html">the IACR board</a>. In choosing an appropriate point of contact, please note that a formal complaint to the ethics committee will typically result in a disclosure to the entirety of the committee (except when there is a conflict), while an informal discussion can be escalated selectively as appropriate.
    </p>
    <p>
      If you are planning to attend an IACR event and are concerned about a potential situation, please reach out ahead of time to the code of conduct liaison, a member of the IACR ethics committee, or the IACR board.
    </p>

    <h3 class="pageSubtitle mt-4">
      Illustrative examples
    </h3>
    <p>
      Examples of unacceptable behavior at an IACR event include but are not limited to:
    </p>
    <ul>
      <li>
        intimidating, harassing, abusive, discriminatory, derogatory, or demeaning speech, whether in verbal, written, or visual form
      </li>
      <li>
        sexual advances in a situation where one person has authority over another person
      </li>
      <li>
        a repeated sexual advance to the same person, after a previous advance has been rejected
      </li>
      <li>
        inappropriate touching
      </li>
      <li>
        display or distribution of sexually explicit images or messages
      </li>
      <li>
        deliberate intimidation, stalking, or following
      </li>
      <li>
        harassing photography or recording
      </li>
      <li>
        sustained disruption of talks or other events
      </li>
      <li>
        real or implied threat of physical, financial, or professional harm
      </li>
      <li>
        inappropriate/unauthorized/misleading use of the IACR logo
      </li>
    </ul>
    <p>
      We note that harassment can occur without a deliberate intention to offend. Harassment committed in a joking manner or disguised as a compliment still constitutes unacceptable behavior. Remember that sexist, racist, stereotyped, and other exclusionary jokes can be offensive to those around you. We are an international community, and must be mindful that things that are acceptable in one culture may be offensive to another.
    </p>

    <h3 class="pageSubtitle mt-4">
      Procedures for reporting & handling violations
    </h3>
    <p>
      Once a report is received, all steps taken will be with the consent of the victim of the reported behavior. A necessary exemption to this exists in cases where legal obligations compel reporting to law enforcement or similar. In order to be acted upon, a report must be escalated to <a href="https://iacr.org/committees.html">the code of conduct liaison</a>, <a href="contact.php">the event general chair(s)</a>, <a href="mailto:ethics-committee@iacr.org">the IACR ethics committee</a>, or to <a href="https://iacr.org/bod.html">the IACR President</a>, and the person accused of violating the code of conduct must be consulted. Additional parties may be consulted as appropriate. All care will be taken to preserve anonymity and privacy of those involved to the greatest extent possible. If the conduct is deemed to violate the policy, the violator may be cautioned, sanctioned, or expelled from the event.
    </p>

    <h3 class="pageSubtitle mt-4">
      Who to contact
    </h3>
    <div class="row">
      <aside class="col-sm-4">
        <a href="https://iacr.org/committees.html">
          <h4 class="subSubtitle mb-1">
            Code of Conduct Liaison
          </h4>
        </a>
        <p class="text-start lead mb-2">
          <!-- TODO: check name is correct -->
          Tal Rabin
        </p>
        <a href="mailto:conduct@iacr.org">
          <img src="images/icons/mail.svg" class="icon" />
        </a>
        conduct at iacr.org
      </aside>

      <aside class="col-sm-4">
        <a href="https://iacr.org/committees.html#ethics">
          <h4 class="subSubtitle mb-1">
            Ethics Committee
          </h4>
        </a>
        <p class="text-start lead mb-2">
          <!-- TODO: check members are current -->
          Allison Bishop (chair)<br>
          Anna Lysyanskaya<br>
          Bart Preneel
        </p>
        <a href="mailto:ethics-committee@iacr.org">
          <img src="images/icons/mail.svg" class="icon" />
        </a>
        ethics-committee at iacr.org
      </aside>

      <aside class="col-sm-4">
        <a href="https://iacr.org/bod.html">
          <h4 class="subSubtitle mb-1">
            IACR President
          </h4>
        </a>
        <p class="text-start lead mb-2">
          <!-- TODO: check name is correct -->
          Michel Abdalla
        </p>
        <a href="mailto:president@iacr.org">
          <img src="images/icons/mail.svg" class="icon" />
        </a>
        president at iacr.org
      </aside>
    </div>
  </main>

  <?php include "includes/footer.php"; ?>

</body>

</html>