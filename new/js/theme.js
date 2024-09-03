jQuery(document).ready(function ($) {
    "use strict";
    $(document).ready(function () {
        scroll();
        phoneValidation();
        formValidate();
        mobileBanner();
        mobileBannerV2();
        quickJumps();
        toolTips();
    });
    function toolTips() {
          $('[data-toggle="tooltip"]').tooltip(); 
    };
    function scroll() {
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
    function phoneValidation() {
        $(function(){
          $(".phone").mask("(999) 999-9999");
          $(".phone").on("blur", function() {
              var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );
              if( last.length == 5 ) {
                  var move = $(this).val().substr( $(this).val().indexOf("-") + 1, 1 );
                  var lastfour = last.substr(1,4);
                  var first = $(this).val().substr( 0, 9 );
                  $(this).val( first + move + '-' + lastfour );
              }
          });
        });
    };
    function formValidate() {
        $(document).ready(function(){
            jQuery.validator.addMethod("phoneValidate", function(phone_number, element) {
               phone_number = phone_number.replace(/\s+/g, ""); 
               return this.optional(element) || phone_number.length > 9 &&
               phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
           }, "*Enter a valid phone number");
            var u   = 'res/submit';
            $("#contact_form").validate({meta:"validte"});
            $("#contact_submit").click(function(obj){
                if($("#contact_form").valid()){
                        $('body').append('<iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){parent.window.location=\'/thank-you\';}" style="display: none;"></iframe>');
                        $('#contact_form').submit();
                        __ctm.form.track('app.calltrackingmetrics.com',
                            'FRT472ABB2C5B9B141A87EB45D9EF215A1D42ADC2E5D860D594325BBB5E8AD132AE',
                            "8446163400",
                            {
                                country_code: "1",
                                name: document.getElementById("contact_name").value,
                                phone: document.getElementById("contact_number").value,
                                custom: { "message": document.getElementById("contact_message").value }
                            });
                } else{
                    alert('Please Fill Out Required Fields');
                }
            });
        });
    };

  function mobileBanner() {
        $(window).scroll(function() {
              if ($(this).scrollTop() > $(document).height() - $(window).height() - 300) {
              $('.m-banner-f').fadeOut();
            }
            else {
              $('.m-banner-f').fadeIn(200);
            }
    });
    $('a[href="#"]' ).click( function(e) {
      e.preventDefault();
    });
};
  function mobileBannerV2() {
        $(window).scroll(function() {
              if ($(this).scrollTop() < 100 || $(this).scrollTop() > $(document).height() - $(window).height() - 100) {
              $('.bottom-sticky').fadeOut();
            }
            else {
              $('.bottom-sticky').fadeIn(0);
            }
    });
    $('a[href="#"]' ).click( function(e) {
      e.preventDefault();
    });
};
    function quickJumps() {
  $('body').scrollspy({target: ".header", offset: 500});   
  $("#quick-jump a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
};

$('.blog-carousel').slick({
  centerMode: true,
  centerPadding: '0px',
  slidesToShow: 3,
  arrows:false,
  dots:true,
  responsive: [
  {
    breakpoint: 768,
    settings: {
    arrows: false,
    centerMode: true,
    centerPadding: '40px',
    slidesToShow: 1
    }
  }
  
  ]
});



$(function(){
    // bind change event to select
    $('.state-form select').on('change', function () {
        var url = $(this).val(); // get selected value
        if (url) { // require a URL
            window.location = url; // redirect
        }
        return false;
    });
  });

});

