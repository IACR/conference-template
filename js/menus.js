$(document).ready(function() {
 function getInfo() {
   $.getJSON('./json/metadata.json', function(data) {
     document.title = data.name;
     $('.conf_name').text(data.name);
     $('.conf_dates').text(data.dates);
     $('.conf_location').text(data.location);
   }).fail(function(d) {
     console.log('failed to parse metadata.json');
     console.log(d);
   });
   
   // fetch a fragment the left nav, and insert it into the DOM.
   $.get('./fragments/nav.html', function(data) {
     $('#mainmenu').html(data);
   },'html');
 }
 getInfo();
});
