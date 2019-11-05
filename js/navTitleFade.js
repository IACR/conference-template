$('#topNavTitle').hide();

$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
      $('#topNavTitle').fadeIn(2000);
    }
    else {
      $('#topNavTitle').fadeOut(2000);
    }
  });
})
