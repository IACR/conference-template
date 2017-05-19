$(document).ready(function() {
  $.getJSON('./json/papers.json', function(data) {
    var theTemplateScript = $("#acceptedScript").html();
    var theTemplate = Handlebars.compile(theTemplateScript);
    var theCompiledHtml = theTemplate(data);
    $('#accepted').html(theCompiledHtml);
  })
  .fail(function(jqxhr, textStatus, error) {
    if (textStatus === 'error') {
      console.log('papers.json not found, check file name and try again');
      document.getElementById('errorBox');
      errorBox.innerHTML = '<p>The list of accepted papers is not currently available. Please check back later.</p>';
    }
    else {
      console.log('There is a problem with papers.json. The problem is ' + error);
      document.getElementById('errorBox');
      errorBox.innerHTML = '<p>The list of accepted papers is not currently available. Please check back later.</p>';
    }
  });
})
