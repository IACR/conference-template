$(document).ready(function() {
  function getInfo() {
    $.getJSON('./json/metadata.json', function(data) {
      document.title = data.shortName;
      $('.conf_name').text(data.shortName);
      $('.conf_dates').text(data.dates);
      $('.conf_location').text(data.location);
    })
    .fail(function() {
     console.log('Houston, we have a problem with metadata.json. Double-check your syntax and try again.');
  });

    // fetch a fragment the left nav, and insert it into the DOM.
    $.get('./fragments/nav.html', function(data) {
      $('#mainmenu').html(data);
    },'html');
  }
  
  getInfo();
});
