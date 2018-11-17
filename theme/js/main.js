(function($) {

    //***************Nav******************//
    $(".hamburger").on("click", function() {
        $("nav").toggleClass("overlay");
        $(".top").toggleClass("clicked");
        $(".middle").toggleClass("clicked");
        $(".bottom").toggleClass("clicked");
    });

    //***************Button default animation******************//
    $(".btn-default-2").hover(
        function() {
            TweenMax.to(".copy-2", 0.5, {
                alpha: 0,
                left: 80,
                scale: 0.5,
                ease: Expo.easeOut
            });
            TweenMax.to(".arrow-container-2", 0.5, {
                alpha: 1,
                left: 0,
                ease: Expo.easeOut
            });
            TweenMax.fromTo(".main", 0.2, { width: "100%" }, { width: "30%" });
            TweenMax.fromTo(".arrow-head", 0.5, { width: "10%" }, { width: "5%" });
        },
        function() {
            TweenMax.to(".copy-2", 0.2, {
                alpha: 1,
                left: 0,
                scale: 1,
                ease: Power2.easeOut
            });
            TweenMax.to(".arrow-container-2", 0.2, {
                alpha: 0,
                scale: 0,
                ease: Power2.easeOut
            });
            TweenMax.fromTo(".main", 0.2, { width: "30%" }, { width: "100%" });
            TweenMax.fromTo(
                ".arrow-head",
                0.2, { width: "5%" }, { width: "10%", onComplete: startOver }
            );
        }
    );

    function startOver() {
        TweenMax.to(".arrow-container-2", 0.01, { alpha: 0, scale: 1 });
        TweenMax.to(".arrow-container-2", 0.01, { left: -100 });
    }

    //***************Header background color on scroll********************//
    $(window).on('scroll', function() {

        if ($(window).scrollTop() >= 100) {
            $('header').addClass('header-active');
        }else {
            $('header').removeClass('header-active');
        }
        
    });

    //***************Homepage timeline******************//
    var tlHome = new TimelineMax();
    tlHome.from("#name", 0.75, { alpha: 0, y: 100, ease: Power4.easeOut });
    tlHome.from(".job-title", 0.75, { alpha: 0, x: 100, ease: Elastic.easeOut.config(1, 0.75) }, '-=0.25');
    tlHome.from("#home-cta", 0.75, { alpha: 0, x: -100, ease: Elastic.easeOut.config(1, 0.75) }, '-=0.25');

    //*************About timeline***************//
    var tlAbout = new TimelineMax();
    tlAbout.from("#quote", 1, { alpha: 0, y: 100, ease: Power4.easeOut }, '+=0.25');

    //*************Tilt.js***************//
    $('.inner').tilt({
        glare: true,
        maxGlare: .1
    });

    $('.single-project').tilt({
        reset: false
    });
    


})(jQuery);
