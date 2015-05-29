$(document).ready(function() {
    
    //navbar scorll control\
    var nav = $("nav"),
        navTop = nav.offset().top,
        pageBackground = $(".pageBackground");
    $(window).scroll(function(e) {
      
      nav.toggleClass("navbar-fixed-top", $(window).scrollTop() > navTop);
      pageBackground.toggleClass ("pageBackgroundMargin", $(window).scrollTop() > navTop);
      
    });
  
//scroll button controll  
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 125
        }, 1000);
        
        return false;
      }
    }
  });
}); // end scroll button controll 
  
  // Bit of my work control
  
$(".bitOfWork ").on("click", "a.more", function(e){
  e.preventDefault();
  var elCurrentActiveImage = $(".activeImage"),
      elCurrentActiveCaptionTitle = $(".activeCaptionTitle"),
      elCurrentActiveCaption = $(".activeCaption"),
      elActiveSpot = $(".mainWork"),
      currentActiveImage = $(".activeImage").attr("src"),
      currentActiveCaptionTitle = $(".activeCaptionTitle").html(),
      currentActiveCaption = $(".activeCaption").html(),
      
      // this all needs to be re-writtne. This refers to the whole link now, so all the parents, nexts etc. need to be redone. (sigh)
      elClickedCaptionTitle = $(this),
      elClickedCaptionImage = $(this).parent().parent().prev("img"),
      elClickedCaption = $(this).parent().next(),
      clickedCaptionTitle = $(this).html(),
      clickedImage = $(this).parent().parent().prev("img").attr("src"),
      clickedCaption = $(this).parent().next().html();
  
  
  elActiveSpot.hide(function(){
    $(".activeImage").attr("src", clickedImage);
    $(".activeCaptionTitle").html(clickedCaptionTitle);
    $(".activeCaption").html(clickedCaption);
    elClickedCaptionTitle.html(currentActiveCaptionTitle);
    elClickedCaptionImage.attr("src", currentActiveImage);
    elClickedCaption.html(currentActiveCaption);
    elActiveSpot.show();
    
  }); // end hide

 
}); // end on click
  


}); // end ready 