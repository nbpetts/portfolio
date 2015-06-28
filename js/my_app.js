$(document).ready(function () {

  var checkIfActiveLink = function (el) {
    if (("/portfolio/" + el.attr("href")) === window.location.pathname) {
      el.parent().addClass("active");
    }
  };

  var isScrolledIntoView = function (elem) {
    var $elem = $(elem),
      $window = $(window),
      docViewTop = $window.scrollTop(),
      docViewBottom = docViewTop + $window.height(),
      docViewMid = (docViewBottom + docViewTop) / 2,
      docViewTopAdj = docViewTop + 200;
    elemTop = $elem.offset().top,
      elemBottom = elemTop + $elem.height();

    return ((elemTop <= docViewMid) && (elemBottom >= docViewTopAdj));
  };


  //navbar scorll control and active styling
  $(window).load(function () {
    var nav = $("nav"),
      navTop = nav.position().top,
      pageBackground = $(".pageBackground");
    $(window).scroll(function (e) {
      $("nav").affix({
        offset: {
          top: navTop

        }


      }); // end affix
      if ($("#portfolio").length) {


        if (isScrolledIntoView($("#portfolioSection"))) {
          $("#portfolioLink").parent().addClass("active");
        } else {
          $("#portfolioLink").parent().removeClass("active");

        }

      }


      pageBackground.toggleClass("pageBackgroundMargin", $(window).scrollTop() >= navTop);

      /*nav.toggleClass("navbar-fixed-top", $(window).scrollTop() > navTop);
      pageBackground.toggleClass ("pageBackgroundMargin", $(window).scrollTop() > navTop);*/

    }); // end scroll
    $("nav").affix({
      offset: {
        top: navTop

      }


    }); // end affix


  }); // end pageload


  //scroll button controll  
  $(function () {
    $('a[href*=#]:not([href=#])').click(function () {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 100
          }, 1000);
          $("nav").affix({
            offset: {
              top: $("nav").position().top

            }


          }); // end affix
          //        $(".pageBackground").toggleClass ("pageBackgroundMargin");
          return false;
        }
      }
    });
  }); // end scroll button controll 

  /////////////////animation controll

  setTimeout(function () {
    $('.downArrow').addClass('animated bounce infinite');
  }, 4000);



  // Active Page Control
  $(".navbar-right li a").each(function () {

    if ($(this).attr("href").indexOf("#") != -1) {
      if ($("#portfolio").length) {


        if (isScrolledIntoView($("#portfolio"))) {
          $(this).parent().addClass("active");
        }

      }



    } else {
      checkIfActiveLink($(this));
    }


  }); // end each

  // nav affix issues
  $('.navWrapper').height($(".nav").height());

}); // end ready