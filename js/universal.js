// Pre Document Ready
$('body').on('mouseenter mouseleave','.dropdown',function(e){
  var _d=$(e.target).closest('.dropdown');_d.addClass('show');
  setTimeout(function(){
    _d[_d.is(':hover')?'addClass':'removeClass']('show');
  },300);
});

new ResizeSensor(jQuery('.navbar-primary'), function() {
  var adminBarOffset = 0;
  if ($("#wpadminbar").length) {
    adminBarOffset += 32;
  }
  
  var topOffset = parseInt($(".navbar-primary").css('top'));
  var navbarHeight = $(".navbar-primary").outerHeight();

  $(".page-title-bar").css("margin-top", topOffset + navbarHeight - adminBarOffset);
});

// Post Document Ready
$(document).ready(function() {

});