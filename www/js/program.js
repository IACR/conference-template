$(document).ready(function() {
  $.getJSON('./json/program.json', function(data) {
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
    var renderedProgram = document.getElementById('renderedProgram');
    renderedProgram.innerHTML = theCompiledHtml;
  })
  .fail(function(jqxhr, textStatus, error) {
   alert('There is a problem with program.json. The problem is ' + error);

   document.getElementById('renderedProgram');
   renderedProgram.innerHTML = '<p class="alert alert-success" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&ensp;The program is not currently available.</p>';
  });
})
