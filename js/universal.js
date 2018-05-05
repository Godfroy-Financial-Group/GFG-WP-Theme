// Pre Document Ready
$('body').on('mouseenter mouseleave','.dropdown',function(e){
  var _d=$(e.target).closest('.dropdown');_d.addClass('show');
  setTimeout(function(){
    _d[_d.is(':hover')?'addClass':'removeClass']('show');
  },300);
});

new ResizeSensor(jQuery('.navbar-primary'), function() {
  var offset = 0;
  if ($("#wpadminbar").length) {
    offset += 32;
  }
  
  $(".page-title-bar").css("margin-top", $(".navbar-primary").outerHeight() - offset);
});

// Post Document Ready
$(document).ready(function() {

});