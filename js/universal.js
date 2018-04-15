// Pre Document Ready
$('body').on('mouseenter mouseleave','.dropdown',function(e){
  var _d=$(e.target).closest('.dropdown');_d.addClass('show');
  setTimeout(function(){
    _d[_d.is(':hover')?'addClass':'removeClass']('show');
  },300);
});

new ResizeSensor(jQuery('.navbar-primary'), function() {
  $(".page-title-bar").css("margin-top", $(".navbar-primary").outerHeight());
});

// Post Document Ready
$(document).ready(function() {

});