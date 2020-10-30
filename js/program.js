var renderedProgram = document.getElementById('renderedProgram');
var programData = null;
var theTemplateScript = $("#program-template").html();
var theTemplate = Handlebars.compile(theTemplateScript);
var slideShows = [];

function drawProgram() {
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
  slideShows = new Array();
    document.querySelectorAll('.carousel-wrapper').forEach(item => {
     slideShows.push(new SlideShow(item.id));
  });
}
  
$(document).ready(function() {
  var narrowWindow = window.matchMedia("(max-width: 990px)");
  
    Handlebars.registerHelper('addOne', function(ind, opts) {
        return parseInt(ind) + 1;
    });

    Handlebars.registerHelper('tabbedSessions', function(isNarrow, sessions, opts) {
      if (sessions.length > 2) {
        return opts.fn(this);
      }
      if (sessions.length == 2 && isNarrow) {
        return opts.fn(this);
      }
      return opts.inverse(this);
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

      // set up Handlebars helper to display dates with day of the week
      Handlebars.registerHelper('formatDate', function(isodate) {
	  var parts = isodate.split('-');
	  return new Date(parts[0],
			  parts[1] - 1, // months are zero-based
			  parts[2]).toLocaleString('en-US', {weekday: "short", month: "short", day: "numeric"});
      });

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
