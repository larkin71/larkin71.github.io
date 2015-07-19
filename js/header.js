$(document).ready(function(e) {
    width = "+=" + 200;
    $("#moveleft").animate({
    right: width
  }, 1000, function() {
    // Animation complete.
  });
});

$(document).ready(function(e) {
    width = "+=" + 200;
    $("#moveright").animate({
    left: width
  }, 1000, function() {
    // Animation complete.
  });
});

