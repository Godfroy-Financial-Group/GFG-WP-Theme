// Pre Document Ready
$('body').on('mouseenter mouseleave','.dropdown',function(e){
  var _d=$(e.target).closest('.dropdown');_d.addClass('show');
  setTimeout(function(){
    _d[_d.is(':hover')?'addClass':'removeClass']('show');
  },300);
});

new ResizeSensor(jQuery('.navbar-primary'), function() {
  var topOffset = parseInt($(".navbar-primary").css('top'));
  var navbarHeight = $(".navbar-primary").outerHeight();  
  var marginTop = topOffset + navbarHeight;
  $(".page-title-bar").css("margin-top", marginTop);
});

// Post Document Ready
$(document).ready(function() {

});