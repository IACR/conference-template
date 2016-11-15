$(document).ready(function() {
 function getInfo() {
   console.log('fetching json');
   $.getJSON('metadata.json', function(data) {
     console.log(data);
     document.title = data.name;
     $('.conf_name').text(data.name);
     $('.conf_dates').text(data.dates);
     $('.conf_location').text(data.location);
   }).fail(function(d) {
     console.log('failed to parse');
     console.log(d);
   });
   // fetch a fragment the left nav, and insert it into the DOM.
   $.get('./fragments/nav.html', function(data) {$('#mainmenu').html(data);},'html');
 }
 getInfo();
});
