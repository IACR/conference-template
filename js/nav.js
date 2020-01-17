$(document).ready(function() {
  // hides top nav title by default (for title fade in)
  $('#disConfName').hide();

  // TODO: will need to specify only xs and sm sizes OR better utilize .d-flex + .d-md-none (change class name from d-none to d-flex after scroll?)

  // TODO/NOTE: right now this only really makes sense on teal and black themes; other themes don't have a sticky menu so what good would showing the conference name be?
  $(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
      $('#disConfName').fadeIn(2000);
    }
    else {
      $('#disConfName').fadeOut(2000);
    }
  });

})
