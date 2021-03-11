$( document ).ready(function() {
  $("#hello-message").fadeOut(1000, function() {
    var date = new Date()
    var hours = date.getHours()
    if (hours > 6 && hours < 12) {
      $(this).html('<span><i data-feather="sun"></i></span>Good morning');
    } else if (hours > 12 && hours < 18) {
      $(this).html('<span><i data-feather="sun"></i></span>Good afternoon');
    } else if (hours > 18 && hours < 22) {
      $(this).html('<span><i data-feather="moon"></i></span>Good afternoon');
    } else {
      $(this).html('<span><i data-feather="moon"></i></span>Good night');
    }
    feather.replace()
  }).fadeIn(1000);
});
