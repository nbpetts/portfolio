$(document).ready(function() {
    
    //navbar scorll control\
    var nav = $("nav"),
        navTop = nav.offset().top,
        pageBackground = $(".pageBackground");
    $(window).scroll(function(e) {
      
      nav.toggleClass("navbar-fixed-top", $(window).scrollTop() > navTop);
      pageBackground.toggleClass ("pageBackgroundMargin", $(window).scrollTop() > navTop);
      
    }); // end scroll
  
//scroll button controll  
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 100
        }, 1000);
        nav.toggleClass("navbar-fixed-top");
        pageBackground.toggleClass ("pageBackgroundMargin");
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
      
      elClicked = $(this),
      elClickedCaptionImage = $(this).children(".thumbnail").children(".sidebarImage"),
      elClickedCaption = $(this).siblings("p"),
      elclickedCaptionTitle = $(this).children(".thumbnail").children(".caption").children("h4"),
      clickdCaptionTitle = elclickedCaptionTitle.html(),
      clickedImage = elClickedCaptionImage.attr("src"),
      clickedCaption = elClickedCaption.html();
  
  
  elActiveSpot.add(elClicked).fadeOut("fast",function(){
    $(".activeImage").attr("src", clickedImage);
    $(".activeCaptionTitle").html(clickdCaptionTitle);
    $(".activeCaption").html(clickedCaption);
    elclickedCaptionTitle.html(currentActiveCaptionTitle);
    elClickedCaptionImage.attr("src", currentActiveImage);
    elClickedCaption.html(currentActiveCaption);
    elActiveSpot.add(elClicked).fadeIn("fast");
    
  }); // end hide

 
}); // end on click
  
// Active Page Control
  $(".navbar-right li a").each(function(){

    if ( ("/portfolio/" + $(this).attr("href")) === window.location.pathname.replace("/","")){
      $(this).parent().addClass("active");
    }
    
  });// end each
  


}); // end ready 