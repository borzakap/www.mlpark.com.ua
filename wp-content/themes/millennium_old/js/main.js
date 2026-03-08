if(window.innerWidth >= 769) {
    $(function() {
        $('.burger-link,.panel-background,.panel-close').on('click touchstart', function(e) {
            e.preventDefault();
            $('.burger-link').toggleClass('is-open');
            $('.panel-content,.panel-background').toggleClass('is-visible');
        });
    });
}


function setScrollbarWidth() {
    var width_with_scrollbar = window.innerWidth,
        width_without_scrollbar = document.querySelector( "html" ).getBoundingClientRect().width,
        root = document.documentElement;
    
    scrollbar_width = parseInt( ( width_with_scrollbar - width_without_scrollbar ), 10 ) + "px";
    root.style.setProperty( "--scrollbar", scrollbar_width );
}

setScrollbarWidth();
    window.addEventListener( "resize", function() {
    setScrollbarWidth();
});


$(document).ready(function() {
    $('.burger-link, .panel-background').click(function() {
      $('.burger-link, .panel-background, .panel-content, body').toggleClass('show');
        return false;
    });
});


/* Sticky header */
$(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 1){
      $('.header-home-inner, .header-main').addClass("sticky");
      }
      else{
      $('.header-home-inner, .header-main').removeClass("sticky");
      }
      });
  });
  /* END Sticky header */