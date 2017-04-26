$(document).ready(function() {
  $.getJSON('./json/papers.json', function(data) {
    var theTemplateScript = $("#acceptedScript").html();
    var theTemplate = Handlebars.compile(theTemplateScript);
    var theCompiledHtml = theTemplate(data);
    $('#accepted').html(theCompiledHtml);
  })
  .fail(function(jqxhr, textStatus, error) {
    console.log('There is a problem with metadata.json. The problem is ' + error);
    
    document.getElementById('renderedProgram');
    renderedProgram.innerHTML = '<p class="alert alert-success" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&ensp;The program is not currently available.</p>';
  });
})
