//countdown for submission deadline
$('#submission').countdown('2017/02/12 16:00')
.on('update.countdown', function(event) {
  var format = '%D days %H:%M left';
  if(event.offset.totalDays == 1) {
    format = '%-d day%!d %H:%M left';
  }
  // if(event.offset.weeks > 0) {
  //   format = '%-w week%!w ' + format;
  // }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('This deadline has passed ');
});


//countdown for notification of decision
$('#notDecis').countdown('2017/05/08')
.on('update.countdown', function(event) {
  var format = '%D days left ';
  // if(event.offset.totalDays > 0) {
  //   format = '%-d day%!d ' + format;
  // }
  // if(event.offset.weeks > 0) {
  //   format = '%-w week%!w ' + format;
  // }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('This deadline has passed ');
});


//countdown for proceedings version
$('#procVer').countdown('2017/06/05')
.on('update.countdown', function(event) {
  var format = ' %D days left ';
  // if(event.offset.totalDays > 0) {
  //   format = '%-d day%!d ' + format;
  // }
  // if(event.offset.weeks > 0) {
  //   format = '%-w week%!w ' + format;
  // }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('This deadline has passed ');
});


//countdown for early registration
$('#earlyReg').countdown('2017/07/31')
.on('update.countdown', function(event) {
  var format = '%D days left ';
  // if(event.offset.totalDays > 0) {
  //   format = '%-d day%!d ' + format;
  // }
  // if(event.offset.weeks > 0) {
  //   format = '%-w week%!w ' + format;
  // }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('This deadline has passed ');
});


//countdown for registration date
$('#reg').countdown('2017/08/10 07:01:00')
.on('update.countdown', function(event) {
  var format = '%D days %H:%M left ';
  // if(event.offset.totalDays > 0) {
  //   format = '%-d day%!d ' + format;
  // }
  // if(event.offset.weeks > 0) {
  //   format = '%-w week%!w ' + format;
  // }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('This deadline has passed ');
});


// countdown for conference date
$('#conf').countdown('2017/08/14')
.on('update.countdown', function(event) {
  var format = '%D days left ';
  // if(event.offset.totalDays > 0) {
  //   format = '%-d day%!d ' + format;
  // }
  // if(event.offset.weeks > 0) {
  //   format = '%-w week%!w ' + format;
  // }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('This deadline has passed ');
});
