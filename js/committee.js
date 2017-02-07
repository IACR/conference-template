$.getJSON('comm.json', function(data) {
    console.log(data);
    var theTemplateScript = $("#committee-member").html();
    var theTemplate = Handlebars.compile(theTemplateScript);
    var theCompiledHtml = theTemplate(data);
    $('#committee').html(theCompiledHtml);
});
