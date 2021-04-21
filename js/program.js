var renderedProgram = document.getElementById('renderedProgram');
var programData = null;
var theTemplateScript = $("#program-template").html();
var theTemplate = Handlebars.compile(theTemplateScript);

function drawProgram() {
  /* Every timeslot gets a tabbedSessions variable when
     it is drawn, to detect which ones should use tabs. */
  var days = programData['days'];
  for (var i = 0; i < days.length; i++) {
    var timeslots = days[i]['timeslots'];
    for (var j = 0; j < timeslots.length; j++) {
      let timeslot = timeslots[j];
      if (timeslot['sessions'].length > 2 ||
          (timeslot['sessions'].length == 2 && programData['isNarrow'])) {
        timeslot['tabbedSessions'] = true;
      } else {
        timeslot['tabbedSessions'] = false;
      }
    }
  }
  renderedProgram.innerHTML = theTemplate(programData);
  document.querySelectorAll("[data-toggle='collapse']").forEach(item => {
    item.addEventListener("click", event => {
      let node = event.target;
      if (node.classList.contains('toggle-closed')) {
        node.classList.remove('toggle-closed');
        node.classList.add('toggle-open');
        node.text = 'Hide abstract';
      } else {
        node.classList.add('toggle-closed');
        node.classList.remove('toggle-open');
        node.text = 'Show abstract';
      }
    });
  });
}

$(document).ready(function() {
    // We watch this to determine when parallel tracks should be
    // drawn with tabs.
    var narrowWindow = window.matchMedia("(max-width: 990px)");

    // set up Handlebars helper to display dates with day of the week
    Handlebars.registerHelper('formatDate', function(isodate) {
	var parts = isodate.split('-');
	return new Date(parts[0],
			parts[1] - 1, // months are zero-based
			parts[2]).toLocaleString('en-US', {weekday: "short", month: "short", day: "numeric"});
    });

    Handlebars.registerHelper('addOne', function(ind, opts) {
        return parseInt(ind) + 1;
    });

  $.ajax({
    cache: false,
    url: './json/program.json',
    dataType: 'json',
    success: function(data) {
      if (!data.hasOwnProperty('days')) {
        renderedProgram.innerHTML = '<p>The conference program is not currently available. Please check back later.</p>';
        return;
      }

      var days = data['days'];
      for (var i = 0; i < days.length; i++) {
        var timeslots = days[i]['timeslots'];
        for (var j = 0; j < timeslots.length; j++) {
          if(timeslots[j]['sessions'].length > 1) {
            timeslots[j]['twosessions'] = true;
          }
        }
      }
      data['isNarrow'] = narrowWindow.matches;
      programData = data;
      narrowWindow.addListener(function(e) {
        console.log('watcher');
        console.dir(e);
        programData['isNarrow'] = e.matches;
        drawProgram();
      });
      drawProgram();
    },
    fail: function(jqxhr, textStatus, error) {
      document.getElementById('renderedProgram');
      renderedProgram.innerHTML = '<p>The conference program is not currently available. Please check back later.</p>';

      if (textStatus === 'error') {
        console.log('program.json not found, check file name and try again');
      } else {
        console.log('There is a problem with program.json. The problem is ' + error);
      }
    }
  });
});
