// getting dates from JSON
$.getJSON('./json/metadata.json', function(data) {

  // setup for countdowns
  var countSubmit = data.submitdate;
  var count1stRound = data.firstRound;
  var countRebuttal = data.rebuttalDue;
  var countFinalNotif = data.finalNotification;
  var countCamera = data.cameraReady;
  var countStartDate = data.startdate;

  // countdown for submission deadline
  $('#submission').countdown(countSubmit)
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
  $('#1stRound').countdown(count1stRound)
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
  $('#rebuttals').countdown(countRebuttal)
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
  $('#finalNotification').countdown(countFinalNotif)
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
  $('#camera').countdown(countCamera)
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
  $('#conf').countdown(countStartDate)
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
})
.fail(function(jqxhr, textStatus, error) {
  console.log('There is an issue with metadata.json. The problem is ' + error);
});
