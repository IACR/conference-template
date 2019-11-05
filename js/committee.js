$(document).ready(function() {
  $.ajax({
    headers: {
      'Cache-Control': 'max-age=400'
    },
    url: './json/comm.json',
    dataType: 'json',
    success: function(data) {
      var theTemplateScript = $("#committee-member").html();
      var theTemplate = Handlebars.compile(theTemplateScript);
      var theCompiledHtml = theTemplate(data);
      $('#committee').html(theCompiledHtml);
    },
    fail: function(jqxhr, textStatus, error) {
      document.getElementById('errorBox');
      errorBox.innerHTML = '<p class="alert alert-success" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&ensp;The list of program committee members is not currently available. Please check back later.</p>';

      if (textStatus === 'error') {
        console.log('comm.json not found, check file name and try again');
      }
      else {
        console.log('There is a problem with comm.json. The problem is ' + error);
      }
    }
  });
});
