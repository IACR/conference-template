// fetch two fragments for top and left nav, and insert them into the DOM.
$.get('./fragments/header.html', function(data) {$('#conf_id').html(data);},'html');
$.get('./fragments/nav.html', function(data) {$('#mainmenu').html(data);},'html');
