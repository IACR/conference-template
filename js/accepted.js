// NOTE: this imports the list of accepted papers in a format that is exported from websubrev. See sample papers.json.

$(document).ready(function() {
  $.ajax({
    cache: false,
    url: './json/papers.json',
    dataType: 'json',
    success: function(data) {
      var theTemplateScript = $("#acceptedScript").html();
      var theTemplate = Handlebars.compile(theTemplateScript);
      var theCompiledHtml = theTemplate(data);
      $('#accepted').html(theCompiledHtml);
    },
    fail: function(jqxhr, textStatus, error) {
      document.getElementById('errorBox');
      errorBox.innerHTML = '<p>The list of accepted papers is not currently available. Please check back again later.</p>';

      if (textStatus === 'error') {
        console.log('papers.json not found, check file name and try again');
      }
      else {
        console.log('There is a problem with papers.json. The problem is ' + error);
      }
    }
  });
});
