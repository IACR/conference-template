$(document).ready(function() {
  $.getJSON('./json/program.json', function(data) {
    var renderedProgram = document.getElementById('renderedProgram');
    if (!data.hasOwnProperty('days')) {
      document.getElementById('renderedProgram');
      renderedProgram.innerHTML = '<p>The conference program is not currently available. Please check back later.</p>';
      return;
    }

    // set up Handlebars helper to display dates with day of the week
    Handlebars.registerHelper('formatDate', function(isodate) {
      // NOTE: if possible, detect user's locale(?)
      return new Date(isodate).toLocaleString('en-En', {weekday: "long", month: "short", day: "numeric"});
    })

    var theTemplateScript = $("#program-template").html();
    var theTemplate = Handlebars.compile(theTemplateScript);
    var days = data['days'];
    for (var i = 0; i < days.length; i++) {
      var timeslots = days[i]['timeslots'];
      for (var j = 0; j < timeslots.length; j++) {
        if(timeslots[j]['sessions'].length > 1) {
          timeslots[j]['twosessions'] = true;
        }
      }
    }

    var theCompiledHtml = theTemplate(data);
    renderedProgram.innerHTML = theCompiledHtml;
  })
  .fail(function(jqxhr, textStatus, error) {
    document.getElementById('renderedProgram');
    renderedProgram.innerHTML = '<p>The conference program is not currently available. Please check back later.</p>';

    if (textStatus === 'error') {
      console.log('program.json not found, check file name and try again');
    }
    else {
      console.log('There is a problem with program.json. The problem is ' + error);
    }
  });
})
