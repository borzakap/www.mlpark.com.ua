let scroll = new SmoothScroll({
    animationTime    : 800, // Время скролла 400 = 0.4 секунды
    stepSize         : 100, // Размер шага в пикселях 
    // Дополнительные настройки:
    accelerationDelta : 20,  // Ускорение 
    accelerationMax   : 2,   // Максимальное ускорение
    keyboardSupport   : true, // Поддержка клавиатуры 
    arrowScroll       : 50, // Шаг скролла стрелками на клавиатуре в пикселях
    // Pulse (less tweakable)
    // ratio of "tail" to "acceleration"
    pulseAlgorithm   : true,
    pulseScale       : 4,
    pulseNormalize   : 1,
    touchpadSupport   : true, // Поддержка тачпада
});



document.addEventListener('DOMContentLoaded', function () {

    $('.home .gallery').attr('data-aos-offset', window.innerHeight * 0.9);

    AOS.init({
        // offset: window.innerHeight * 0.75,
        once: false, 
        delay: 1000
    });

    $('.header-home-box').removeClass('_hidden')

    // Hero paralax
    let headerHomeImg = document.querySelector('#header-home-img') ?? null;
    let headerHeight = document.querySelector('.header-home')?.offsetHeight;
    
    if (headerHomeImg && headerHeight) {
        
        let trYMax = 30; // зміщення кртинки вверх в % для десктопа
        if (window.innerWidth <= 769) trYMax = 20; // для планшета
        // if (window.innerWidth <= 569) trYMax = 17; // для мобайла
        if (window.innerWidth <= 569) trYMax = 10; // для мобайла
        
        /**  Скейл зображення
         * 0.2 тут відповідає дначенню в css 1.2
         * Крипт ці 0.2 буде пропорційно змінювати до 1. 
         * 
         * Щоб погратися зі значеннями не забудь в стилях поправити 
         * transform: scale() для header .header-home > img
         * 
         */
        let cssScale = 1.2
        let scaleMax = 0.2;

        if (window.innerWidth <= 569) {
            // для мобайла
            cssScale = 1.1;
            scaleMax = 0.1;
        }

        /** Кількість пікселів при скролі від верхньої границі в'юпорта 
         *  під час якого буде спрацьовувати ефект
         */
        let threshold = headerHeight - window.innerHeight;
        if (window.innerWidth <= 769) threshold = 100; // для планшета
        if (window.innerWidth <= 569) threshold = 5; // для мобайла

        // Run
        animHeader();

        window.addEventListener('scroll', function (e) {
            animHeader()
        })

        function animHeader() {
            if (window.scrollY < threshold) {
                let translate = trYMax * window.scrollY / threshold;
                let scale = cssScale - scaleMax * window.scrollY / threshold;
                headerHomeImg.style.transform = `scale(${scale}) translateY(-${translate}%)`;
            } else {
                headerHomeImg.style.transform = `scale(1) translateY(-${trYMax}%)`;
            }
        }
    }


})

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
    $('.genplan polygon').on('click', function(){
        $(location).prop('href', $(this).attr('href'));
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


window.addEventListener('load', function () {

    if (document.querySelector('#gallery-home') && this.window.innerWidth >= 769) {

        gsap.registerPlugin(ScrollTrigger);

        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: "#gallery-home",
                start: "top top",
                end: "+=" + document.querySelector('#gallery-home').offsetHeight,
                scrub: 1,
                pin: true,
                snap: {
                    delay: 100, // wait 0.2 seconds from the last scroll event before doing the snapping
                },
            },
        });

        tl.to("#gh-2 .img", { scale: 2.2, duration: 2})
        .to("#g-title", { translateY: -300, opacity: 0, duration: 2}, '<')
        .to("#gh-1", { translateX: -300, opacity: 0.2, duration: 2}, '<')
        .to("#gh-3", { translateX: 300, opacity: 0.2, duration: 2}, '<')
        .to("#gh-4", { translateX: -300, opacity: 0.2, duration: 2}, '<')
        .to("#gh-5", { translateX: 300, opacity: 0.2, duration: 2}, '<')
        .to(".gallery-main", { translateY: 0, opacity: 1, duration: 2}, '<');

        function updateGsap() {
            tl.invalidate();
            window.removeEventListener('scroll', updateGsap);
            console.log('u')
        }

        setTimeout(function () {
            window.addEventListener('scroll', updateGsap);
        }, 500)

    } else if (document.querySelector('#gallery-home')) {
        document.querySelector('#gallery-home').setAttribute('data-aos', '');
        AOS.refreshHard();
    }
});
