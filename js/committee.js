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
    error: function(jqxhr, textStatus, error) {
      console.dir(jqxhr);
      document.getElementById('errorBox');
      errorBox.innerHTML = '<p class="editMe alert alert-danger" role="alert"><img src="images/icons/exclamation.svg" class="icon" /> You need to supply a json/comm.json file. You can <a href="https://iacr.org/cryptodb/pc/">use this tool</a> to construct it.</p>';

      if (textStatus === 'error') {
        console.log('comm.json not found, check file name and try again');
      }
      else {
        console.log('There is a problem with comm.json. The problem is ' + error);
      }
    }
  });
});
