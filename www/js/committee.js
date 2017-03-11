$(document).ready(function() {
  $.getJSON('./json/comm.json', function(data) {
    var theTemplateScript = $("#committee-member").html();
    var theTemplate = Handlebars.compile(theTemplateScript);
    var theCompiledHtml = theTemplate(data);
    $('#committee').html(theCompiledHtml);
  })
  .fail(function(jqxhr, textStatus, error) {
    alert('Houston, we have a problem with comm.json. The problem is ' + error);
  });
});
