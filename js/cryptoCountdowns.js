// $("#submissionDeadline").countdown("2017/02/09 23:00:00 UTC", function(event) {
//   $(this).text(
//     event.strftime('%D days %H:%M:%S')
//   );
// });

$('[data-countdown]').each(function() {
  var $this = $(this), finalDate = $(this).data('countdown');
  $this.countdown(finalDate, function(event) {
    $this.html(event.strftime('%D days %H:%M:%S'));
  });
  // if only date is given (no time), do not display hours/minutes/seconds
});
