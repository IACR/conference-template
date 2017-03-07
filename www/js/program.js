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
    console.log(data);

    var theCompiledHtml = theTemplate(data);
    // console.log(theCompiledHtml);
    $('#footer').before(theCompiledHtml);
  });
})
