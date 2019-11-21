<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
        require "includes/head.php";
          ?>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container mt-5">
      <h2 class="indPageTitle">
        Call for Papers
      </h2>

      <!-- NOTE: below is standard placeholder text for when the page is under construction. please delete this entire <div class="row"> and all elements contained within it when ready to add other content -->
      <!-- <div class="row">
        <div class="col-12">
          <p>
            This information is not yet available. Thank you for your patience.
          </p>
        </div>
      </div> -->

      <div class="row">
        <section class="col-md-6">
          <h3 class="pageSubtitle">General Information</h3>
          <p>
            <span class="conf_name"></span> will take place in <span class="conf_location"></span> on <span class="conf_dates"></span>. <span class="conf_name"></span> is organized by <a href="http://iacr.org/">the International Association for Cryptologic Research</a> (IACR). Original research papers on all technical aspects of cryptology are solicited for submission.
          </p>
          <p>
            This is not a real conference; it is a demo of what this site might look like. Parts of it are derived from past conferences that IACR has hosted, such as the program and program committee.
          </p>
        </section>
        <section class="col-md-6">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">
                Example Dates
              </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-5">
                  <p class="dateTitle">
                    Feb 13 2050
                  </p>
                </div>
                <div class="col-7">
                  <div class="countdown">
                    <p class="dateText">
                      Submission deadline at 04:00:00 UTC
                    </p>
                  </div>
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-5">
                  <p class="dateTitle">
                    March 30 2050
                  </p>
                </div>
                <div class="col-7">
                  <div class="countdown">
                    <p class="dateText">
                      First round notification
                    </p>
                  </div>
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-5">
                  <p class="dateTitle">
                    April 5 2050
                  </p>
                </div>
                <div class="col-7">
                  <div class="countdown">
                    <p class="dateText">
                      Rebuttals due by 11:45:00 UTC
                    </p>
                  </div>
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-5">
                  <p class="dateTitle">
                    April 22 2050
                  </p>
                </div>
                <div class="col-7">
                  <div class="countdown">
                    <p class="dateText">
                      Final notification
                    </p>
                  </div>
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-5">
                  <p class="dateTitle">
                    July 5 2050
                  </p>
                </div>
                <div class="col-7">
                  <div class="countdown">
                    <p class="dateText">
                      Camera-ready version
                    </p>
                  </div>
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-5">
                  <p class="dateTitle">
                    Sept 1 2050
                  </p>
                </div>
                <div class="col-7">
                  <div class="countdown">
                    <p class="dateText">
                      Conference
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> To convert UTC to your local time zone, <a href="https://www.timeanddate.com/time/zone/timezone/utc">click here</a>.
            </div>
          </div>
        </section>
      </div>

      <!-- NOTE: the information below used for the purposes of demoing this page is from Asiacrypt 2017  -->
      <div class="row">
        <section class="col-12">
          <h3 class="pageSubtitle">
            Instructions for Authors
          </h3>
          <p>
            Submissions must be at most 30 pages excluding any auxiliary supporting material, and using the Springer LNCS format (in particular, do not modify the LNCS default font sizes or margins). Details on the Springer LNCS format can be obtained <a href="http://kaymckelly.com">here</a>. It is strongly encouraged that submissions are processed in LaTeX. All submissions must have page numbers (e.g. using LaTeX command <code>\pagestyle{plain}</code>).
          </p>
          <p>
            All submissions will be blind-refereed and thus must be anonymous, with no author names, affiliations, acknowledgments, or obvious references. Submissions should begin with a title, a short abstract, and a list of keywords, followed by an introduction, a main body, an appendix (if any), and references, within 30 pages. The introduction should summarize the contributions of the paper at the level understandable for a non-expert reader.
          </p>
          <p>
            Optionally, if an author desires, a clearly-marked auxiliary supporting material can be appended to the submission. The auxiliary supporting material has no prescribed form or page limit and might be used, for instance, to provide program code, additional experimental data, etc. Alternatively, the auxiliary supporting material can be submitted as a separate file from the submission. The reviewers are not required to read the auxiliary supporting material and submissions should be intelligible without it. The final published version of an accepted paper is expected to closely match the submitted 30 pages.
          </p>
          <p>
            Submissions must be submitted electronically in PDF format. A detailed description of the electronic submission procedure and a submission link will be available on the <span class="conf_name"></span> website at a later date.
          </p>
          <p class="alert alert-success">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&ensp;
            Submissions not meeting these guidelines risk rejection without consideration of their merits.
          </p>
          <p>
            For papers that are accepted, the length of the proceedings version will be at most 30 pages using Springer’s standard fonts, font sizes, and margins. The proceedings will be published by Springer-Verlag in the Lecture Notes in Computer Science series and will be available at the conference. Authors of accepted papers must complete the <a href="http://kaymckelly.com">IACR copyright assignment form</a> for their work to be published in the proceedings. Moreover, authors of accepted papers must guarantee that their paper will be presented at the conference and agree that the presentations will be video recorded during the event. The camera-ready version of the accepted articles will be automatically uploaded to the <a href="http://kaymckelly.com">IACR ePrint server</a>.
          </p>
          <p>
            Submissions must not substantially duplicate work that any of the authors has published elsewhere or has submitted in parallel to a journal or any other conference/workshop that has proceedings. Accepted submissions may not appear in any other conference or workshop that has proceedings. IACR reserves the right to share information about submissions with other program committees to detect parallel submissions and the <a href="http://kaymckelly.com">IACR policy on irregular submissions</a> will be strictly enforced.
          </p>
          <p>
            Articles will not be reviewed by reviewers who have a conflict of interest with at least one author of the submission. As the IACR does not impose a detailed policy on conflicts of interest, the Program co-chairs will decide on what constitutes a conflict according to high standards in terms of scientific integrity (at least colleagues from the same research group, people in a current or very recent student-advisor relationship, close friends, and family members have a conflict).
          </p>
          <p>
            The Program Committee may select a paper for the best paper award.
          </p>
        </section>
      </div>

      <div class="row">
        <section class="col-md-6">
          <h3 class="pageSubtitle">
            Schedule
          </h3>
          <p>
            <span class="conf_name"></span> will operate a two-round review system with rebuttal phase. In the first round, the program committee selects the submissions which are considered of value for proceeding to the second round, and the authors receive the first round notification with review comments. The authors of the selected submissions are invited to submit a text-based rebuttal letter to the review comments.
          </p>
          <p>
            In the second round the program committee further reviews the selected submissions by taking into account their rebuttal letter, and makes the final decision of acceptance or rejection. The submissions that have not been selected during the first round of reviews may be submitted in other conferences after the first round notification date. The dates for this schedule are listed above.
          </p>
        </section>
        <section class="col-md-6">
          <h3 class="pageSubtitle">
            Stipends
          </h3>
          <p>
            Students whose papers have been accepted and who present their talks at the conference will have their registration waived. A limited number of stipends are available to those unable to obtain funding to attend the conference. Students, whose papers are accepted and who will present the paper themselves, are encouraged to apply if such assistance is needed. Requests for stipends should be sent to the general chair.
          </p>
        </section>
      </div>

      <h3 class="pageSubtitle">
        Sample Program Committee
      </h3>

      <div id="committee" class="row">
        <!-- Handlebars import of PC members -->
        <script id="committee-member" type="text/x-handlebars-template">
          {{#each committee}}
            <article class="col-12 col-sm-6 col-md-4 col-xl-3 my-2">
              <h4 class="tableItemTitle">
                {{name}}
              </h4>
              <p class="text-left">
                {{affiliation}}
              </p>
            </article>
          {{/each}}
        </script>
      </div>

      <h3 class="pageSubtitle text-center">
        General Co-Chairs
      </h3>

      <div class="row">
        <aside class="col-12 col-md-6 text-center mt-3 mb-2">
          <h4 class="tableItemTitle">
            Important Professor #1
          </h4>
          <p class="text-center">
            University of Peer Review<br/>
            China
          </p>
        </aside>
        <aside class="col-12 col-md-6 text-center mt-3 mb-2">
          <h4 class="tableItemTitle">
            World-Famous Researcher
          </h4>
          <p class="text-center">
            Institute for the Advancement of Causative Research<br/>
            Singapore
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:doNotEmailMe@fakeDomain.com">
            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
          </a>&nbsp;
          doNotEmailMe@fakeDomain.com
        </div>
      </div>

      <h3 class="pageSubtitle text-center">
        Program Co-Chairs
      </h3>

      <div class="row">
        <aside class="col-12 col-md-6 text-center mt-3 mb-2">
          <h4 class="tableItemTitle">
            SmartGuy McWriter
          </h4>
          <p class="text-center">
            Synonym College<br/>
            Romania
          </p>
        </aside>
        <aside class="col-12 col-md-6 text-center mt-3 mb-2">
          <h4 class="tableItemTitle">
            Ellis Papers
          </h4>
          <p class="text-center">
            Society for Promotion of Encryption<br/>
            Senegal
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <a href="mailto:reallyDoNotEmailMe@fakeDomain.com">
            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
          </a>&nbsp;
          reallyDoNotEmailMe@fakeDomain.com
        </div>
      </div>

    </main>

  <?php include "includes/footer.php"; ?>

    <!-- Handlebars -->
    <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js" type="text/javascript"></script>
    <!-- Personal scripts -->
    <script src="./js/committee.js"></script>

  </body>
</html>
