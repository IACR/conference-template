$(document).ready(function() {
  $.getJSON('./json/comm.json', function(data) {
    var theTemplateScript = $("#committee-member").html();
    var theTemplate = Handlebars.compile(theTemplateScript);
    var theCompiledHtml = theTemplate(data);
    $('#committee').html(theCompiledHtml);
  })
  .fail(function(jqxhr, textStatus, error) {
    alert('There is a problem with comm.json. The problem is ' + error);

    document.getElementById('committee');
    committee.innerHTML = '<p class="alert alert-success" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&ensp;The list of program committee members is not currently available. Please check back later.</p>';
  });
});
