// getting dates from JSON
$.getJSON('./json/metadata.json', function(data) {
  $('.submissionDate').text(data.submitdate);
  $('.firstRoundNotif').text(data.firstRound);
  $('.rebuttal').text(data.rebuttalDue);
  $('.finalNotif').text(data.finalNotification);
  $('.cameraReady').text(data.cameraReady);
})
.fail(function(jqxhr, textStatus, error) {
  console.log('There\'s an issue with metadata.json. The problem is ' + error);
});

// countdown for submission deadline
$('#submission').countdown('2017/05/19 02:00')
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


//countdown for first round of notifications
$('#1stRound').countdown('2017/07/09')
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


//countdown for rebuttals due
$('#rebuttals').countdown('2017/07/14')
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

// countdown for final notification
$('#finalNotification').countdown('2017/08/13')
.on('update.countdown', function(event) {
  var format = ' in %D days';
  if(event.offset.totalDays === 1) {
    format = ' due in %-d day%!d';
  }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html(' has occurred');
});

// countdown for cameraReady deadline
$('#camera').countdown('2017/09/07')
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

// countdown for conference date
$('#conf').countdown('2017/12/03')
.on('update.countdown', function(event) {
  var format = ' begins in %D days';
  if(event.offset.totalDays === 1) {
    format = ' starts in %-d day%!d';
  }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('has passed');
});
