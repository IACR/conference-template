$(document).ready(function() {
  $.getJSON('./json/comm.json', function(data) {
    var theTemplateScript = $("#committee-member").html();
    var theTemplate = Handlebars.compile(theTemplateScript);
    var theCompiledHtml = theTemplate(data);
    $('#committee').html(theCompiledHtml);
  })
  .fail(function(jqxhr, textStatus, error) {
    if (textStatus === 'error') {
      alert('comm.json not found, check file name and try again');
      document.getElementById('committee');
      committee.innerHTML = '<p class="alert alert-success" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&ensp;The file that contains program committee members does not exist. Please check the file name and try again.</p>';
    }
    else {
      console.log('There is a problem with comm.json. The problem is ' + error);
      document.getElementById('committee');
      committee.innerHTML = '<p class="alert alert-success" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&ensp;The list of program committee members is not currently available. Please check back later.</p>';
    }
  });
});
