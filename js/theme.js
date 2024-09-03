

jQuery(document).ready(function ($) {
    "use strict";

    // ---------------------------------------------------------------------------------------------------------------------------->
    // GENERAL SCRIPTS FOR ALL PAGES    ||----------- 
    // ---------------------------------------------------------------------------------------------------------------------------->

    $(document).ready(function () {
        scroll();
    });

    // ---------------------------------------------------------------------------------------------------------------------------->
    // SCROLL FUNCTIONS   ||-----------
    // ---------------------------------------------------------------------------------------------------------------------------->

    function scroll() {

        // //Click Event to Scroll to Top
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                $('.jp-tp').fadeIn();
            } else {
                $('.jp-tp').fadeOut();
            }

        });
        $('.jp-tp').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 800);
            return false;
        });

        // Scroll Down Elements
        $('.scroll-down[href^="#"], .scroll-to-target[href^="#"]').on('click', function (e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });

    };

});