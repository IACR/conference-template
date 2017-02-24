$('#topNavTitle').hide();

$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
      $('#topNavTitle').fadeIn();
    }
    else {
      $('#topNavTitle').fadeOut();
    }
  });
})
