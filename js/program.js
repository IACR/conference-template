// NOTE: this may be used for loading the main program, but also from other
// pages to load a different program. The html page makes a call to installProgram
// to pass information on the template and URL to fetch the program from.
//
// currentProgram holds the program data loaded by ajax. It gets modified when
// the window size changses.
var currentProgram = null;
// renderedProgram is the dom element where the program is drawn. It is set by
// installProgram, and used in drawProgram().
var renderedProgram = null;
// theTemplate is the compiled handlebars template that is passed with installProgram.
var theTemplate = null;
// We watch this to determine when parallel tracks should be
// drawn with tabs.
var narrowWindow = window.matchMedia("(max-width: 990px)");

/**
* Set utc and local starttime and endtime on each session. tz is the IANA timezone name (e.g.,
* UTC or America/Los_Angeles) for all times in the program.
*
* each timeslot has four new times added:
* - utcstarttime (e.g., Wed Dec 7, 14:30)
* - utcendtime
* - localstarttime
* - localendtime
*
* The timeslot also gets an id which is localendtime in millis since 1970.
* Each day also gets a "localdate" to indicate what date it is in the time zone of the user.
*/
function adjustTimes(tz, day) {
  if (!day.hasOwnProperty('timeslots') || !day.timeslots.length) {
    console.log('day without timeslots:' + day.date);
    return;
  }
  let date = '';
  for (let j = 0; j < day['timeslots'].length; j++) {
    let timeslot = day['timeslots'][j];
    // Note that starttime and endtime could be '7:00' without leading 0, so we use
    // padStart to add leading 0 if necessary.
    startstr = day.date + 'T' + timeslot.starttime.padStart(5, '0') + ':00';
    let starttime = DateTime.fromISO(startstr, {zone: tz.name});
    let endtime = DateTime.fromISO(day.date + 'T' + timeslot.endtime.padStart(5, '0') + ':00',
                                   {zone: tz.name});
    timeslot.utcstarttime = starttime.setZone('UTC').toFormat('ccc LLL d HH:mm');
    timeslot.utcendtime = endtime.setZone('UTC').toFormat('ccc LLL d HH:mm');
    timeslot.localstarttime = starttime.setZone('local').toFormat('ccc LLL d HH:mm');
    if (j === 0) {
      date = starttime.setZone('local').toFormat('ccc LLL d');
    }
    let localendtime = endtime.setZone('local');
    timeslot.id = localendtime.toMillis();
    timeslot.localendtime = localendtime.toFormat('ccc LLL d HH:mm');
  }
  day.localdate = date;
}

// The id of a timeslot is the timestamp of the endtime. We go
// through the sessions until we find the one that is either going on now or
// is next to start. That would be the one with the lowest endtime >= now.
function scrollToSession() {
  if (!currentProgram) {
    return;
  }
  let now = DateTime.local().toMillis();
  // lastid will be the smallest id of a timeslot that is >= now.
  let lastid = undefined;
  for (let dayi = currentProgram.days.length - 1; dayi >=0; dayi--) {
    let day = currentProgram.days[dayi];
    for (let timesloti = day.timeslots.length - 1; timesloti >= 0; timesloti--) {
      if (now <= day.timeslots[timesloti].id) {
        lastid = String(day.timeslots[timesloti].id);
      } else {
        break;
      }
    }
  }
  if (lastid) {
    let elem = document.getElementById(lastid);
    if (elem) {
      elem.scrollIntoView({behavior: "smooth"});
      document.getElementById('scrollSessionButton').style.display = 'block';
    } else {
      console.log('unknown elem:' + lastid);
    }
  } else {
    console.log('no lastid');
  }
}

function drawProgram() {
  /* Every timeslot gets a tabbedSessions variable when
     it is drawn, to detect which ones should use tabs. */
  let days = currentProgram['days'];
  for (var i = 0; i < days.length; i++) {
    var timeslots = days[i]['timeslots'];
    for (var j = 0; j < timeslots.length; j++) {
      let timeslot = timeslots[j];
      if (timeslot['sessions'].length > 2 ||
          (timeslot['sessions'].length == 2 && currentProgram['isNarrow'])) {
        timeslot['tabbedSessions'] = true;
      } else {
        timeslot['tabbedSessions'] = false;
      }
    }
  }
  renderedProgram.innerHTML = theTemplate(currentProgram);
  document.querySelectorAll("[data-toggle='collapse']").forEach(item => {
    let typ = item.dataset.typ;
    item.addEventListener("click", event => {
      let node = event.target;
      if (node.classList.contains('toggle-closed')) {
        node.classList.remove('toggle-closed');
        node.classList.add('toggle-open');
        node.text = 'Hide ' + typ;
      } else {
        node.classList.add('toggle-closed');
        node.classList.remove('toggle-open');
        node.text = 'Show ' + typ;
      }
  });
  
  });
}
  
// jsonUrl is the URL to fetch the program from
// compiledTemplate is the result from creating the handlebars template
// programDivId is the id of the div to write the program into.
function installProgram(jsonUrl, compiledTemplate, programDivId) {
  theTemplate = compiledTemplate;
  renderedProgram = document.getElementById(programDivId);
  $.ajax({
    cache: false,
    url: jsonUrl,
    dataType: 'json',
      success: function(data) {
        if (!data.hasOwnProperty('days')) {
          renderedProgram.innerHTML = '<p>The conference program is not currently available. Please check back later.</p>';
          return;
        }

        // set up Handlebars helper to display dates with day of the week
        Handlebars.registerHelper('formatDate', function(isodate) {
	  let parts = isodate.split('-');
          let date = new Date(parts[0],
			      parts[1] - 1, // months are zero-based
			      parts[2]);
          // Insert a <br> when smaller than lg, so that tabs don't overflow.
          return date.toLocaleString('en-US', {weekday: "short"}) + ' <br class="d-lg-none">' + date.toLocaleString('en-US', {month: "short", day: "numeric"});
        });
        Handlebars.registerHelper('fullDate', function(isodate) {
	  let parts = isodate.split('-');
	  return new Date(parts[0],
			  parts[1] - 1, // months are zero-based
			  parts[2]).toLocaleString('en-US', {weekday: "long", month: "long", day: "numeric"});
        });
        
        Handlebars.registerHelper('addOne', function(ind, opts) {
          return parseInt(ind) + 1;
        });
        if (!data.config.hasOwnProperty('timezone')) {
          // set to UTC by default.
          data.config['timezone'] = {'name': 'UTC', 'abbr': 'UTC'};
        } else if(data.config.timezone.name === 'Universal Time') {
          // This was an old usage of name.
          data.config.timezone.name = 'UTC';
        }
        data['days'].forEach(day => {
          adjustTimes(data.config.timezone, day);
          day.timeslots.forEach(ts => {
            ts.sessions.forEach(ss => {
              if (ss.talks) {
                ss.talks.forEach(t => {
                  if ('slidesUrl' in t ||
                      'paperUrl' in t ||
                      'eprint' in t ||
                      'videoUrl' in t ||
                      'search' in t) {
                    t['hasMedia'] = true;
                  } else {
                    t['hasMedia'] = false;
                  }
                });
              }
            });
          });
        });
        
        console.log('rewritten data');
        console.dir(data);
        // We save this for drawing again.
        currentProgram = data;
        currentProgram['isNarrow'] = narrowWindow.matches;
        narrowWindow.addListener(function(e) {
          currentProgram['isNarrow'] = e.matches;
          drawProgram();
        });
        drawProgram();
        // Handle hash anchors in the URL
        if (window.location.hash) {
          let id = window.location.hash.substring(1);
          let elem = document.getElementById(id);
          if (elem) {
            elem.scrollIntoView({behavior: "smooth"});
          }
        } else {
          let currentTime = new Date();
          let days = currentProgram['days'];
          if (days.length > 1 && 
              currentTime > new Date(currentProgram['days'][1]['date'])) {
            console.log('scrolling');
            scrollToSession(data);
          }
        }
      },
    fail: function(jqxhr, textStatus, error) {
      let renderedProgram = document.getElementById(programDivId);
      renderedProgram.innerHTML = '<p>The conference program is not currently available. Please check back later.</p>';

      if (textStatus === 'error') {
        console.log('program.json not found, check file name and try again');
      } else {
        console.log('There is a problem with program.json. The problem is ' + error);
      }
    }
  });
}
