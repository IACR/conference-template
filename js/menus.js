$(document).ready(function() {
  function getInfo() {
    $.ajax({
      headers: {
        'Cache-Control': 'max-age=400'
      },
      url: './json/metadata.json',
      dataType: 'json',
      success: function(data) {
        document.title = data.shortName + ' ' + document.title;
        $('.conf_name').text(data.shortName);
        $('.long_conf').text(data.name);
        $('.conf_dates').text(data.dates);
        $('.conf_location').text(data.location);
        $('.conf_start').text(data.startdate);
      },
      fail: function(jqxhr, textStatus, error) {
       alert('There is a problem with metadata.json. The problem is ' + error);
      }
    });

    // fetch a fragment - the left nav - and insert it into the DOM
    // TODO: only for experimental.html DO NOT PUSH
    $.get('./fragments/try-nav.html', function(data) {
      $('#sidebarWrapper').html(data);
    },'html');
  }

  getInfo();
});
