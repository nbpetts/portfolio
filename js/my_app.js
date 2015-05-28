$(document).ready(function() {
    
    //navbar scorll control\
    var nav = $("nav"),
    navTop = nav.offset().top;
    $(window).scroll(function(e) {
      
      nav.toggleClass("navbar-fixed-top", $(window).scrollTop() > navTop)
      
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
      currentActiveImage = $(".activeImage").attr("src"),
      currentActiveCaptionTitle = $(".activeCaptionTitle").html(),
      currentActiveCaption = $(".activeCaption").html(),
      elClickedCaptionTitle = $(this),
      elClickedCaptionImage = $(this).parent().parent().prev("img"),
      elClickedCaption = $(this).parent().next(),
      clickedCaptionTitle = $(this).html(),
      clickedImage = $(this).parent().parent().prev("img").attr("src"),
      clickedCaption = $(this).parent().next().html();
  
  $(".activeImage, .activeCaptionTitle, .activeCaption").hide(function(){
    $(".activeImage").attr("src", clickedImage);
    $(".activeCaptionTitle").html(clickedCaptionTitle);
    $(".activeCaption").html(clickedCaption);
    elClickedCaptionTitle.html(currentActiveCaptionTitle);
    elClickedCaptionImage.attr("src", currentActiveImage);
    elClickedCaption.html(currentActiveCaption);
    $(".activeImage, .activeCaptionTitle, .activeCaption").show();
    
  }); // end hide
  console.log(clickedCaption);
}); // end on click
  


}); // end ready 