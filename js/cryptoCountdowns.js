//countdown for submission deadline
$('#submission').countdown('2017/02/09 23:00:00')
.on('update.countdown', function(event) {
  var format = '%H:%M:%S ';
  if(event.offset.totalDays > 0) {
    format = '%-d day%!d ' + format;
  }
  if(event.offset.weeks > 0) {
    format = '%-w week%!w ' + format;
  }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('No time remains ');
});


//countdown for notification of decision
$('#notDecis').countdown('2017/05/06')
.on('update.countdown', function(event) {
  var format = ' ';
  if(event.offset.totalDays > 0) {
    format = '%-d day%!d ' + format;
  }
  if(event.offset.weeks > 0) {
    format = '%-w week%!w ' + format;
  }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('No time remains ');
});

//countdown for proceedings version
$('#procVer').countdown('2017/06/03')
.on('update.countdown', function(event) {
  var format = ' ';
  if(event.offset.totalDays > 0) {
    format = '%-d day%!d ' + format;
  }
  if(event.offset.weeks > 0) {
    format = '%-w week%!w ' + format;
  }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('No time remains ');
});


//countdown for early registration
$('#earlyReg').countdown('2017/07/31')
.on('update.countdown', function(event) {
  var format = ' ';
  if(event.offset.totalDays > 0) {
    format = '%-d day%!d ' + format;
  }
  if(event.offset.weeks > 0) {
    format = '%-w week%!w ' + format;
  }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('No time remains ');
});


//countdown for registration date
$('#reg').countdown('2017/08/10 07:01:00')
.on('update.countdown', function(event) {
  var format = '%H:%M:%S ';
  if(event.offset.totalDays > 0) {
    format = '%-d day%!d ' + format;
  }
  if(event.offset.weeks > 0) {
    format = '%-w week%!w ' + format;
  }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('No time remains ');
});


// countdown for conference date
$('#conf').countdown('2017/08/14')
.on('update.countdown', function(event) {
  var format = ' ';
  if(event.offset.totalDays > 0) {
    format = '%-d day%!d ' + format;
  }
  if(event.offset.weeks > 0) {
    format = '%-w week%!w ' + format;
  }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('No time remains ');
});
