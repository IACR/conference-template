// TODO: import some (all?) of these dates from metadata.json


//countdown for submission deadline
$('#submission').countdown('2017/02/08 02:00')
.on('update.countdown', function(event) {
  var format = ' in %D days %H:%M';
  if(event.offset.totalDays === 1) {
    format = ' in %-d day%!d %H:%M';
  }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html(' has passed');
});


//countdown for notification of decision
$('#notDecis').countdown('2017/05/08')
.on('update.countdown', function(event) {
  var format = ' in %D days';
  if(event.offset.totalDays === 1) {
    format = ' in %-d day%!d';
  }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('This deadline has passed ');
});


//countdown for proceedings version
$('#procVer').countdown('2017/06/05')
.on('update.countdown', function(event) {
  var format = ' due in %D days';
  if(event.offset.totalDays === 1) {
    format = ' due in %-d day%!d';
  }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html(' has occurred');
});

// NOTE: there is currently no date for this in the html; don't forget to edit this to match the others
//countdown for registration date
//countdown for early registration
// $('#earlyReg').countdown('2017/07/31')
// .on('update.countdown', function(event) {
//   var format = '%D days left ';
//   if(event.offset.totalDays === 1) {
//     format = '%-d day%!d left';
//   }
//   $(this).html(event.strftime(format));
// })
// .on('finish.countdown', function(event) {
//   $(this).html('This deadline has passed ');
// });

// NOTE: there is currently no date for this in the html; don't forget to edit this to match the others
//countdown for registration date
// $('#reg').countdown('2017/08/10 07:00')
// .on('update.countdown', function(event) {
//   var format = '%D days %H:%M left ';
//   if(event.offset.totalDays === 1) {
//     format = '%-d day%!d %H:%M left';
//   }
//   $(this).html(event.strftime(format));
// })
// .on('finish.countdown', function(event) {
//   $(this).html('This date has passed ');
// });

// countdown for conference date
$('#conf').countdown('2017/08/14')
.on('update.countdown', function(event) {
  var format = ' starts in %D days';
  if(event.offset.totalDays === 1) {
    format = ' starts in %-d day%!d';
  }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('has passed');
});
