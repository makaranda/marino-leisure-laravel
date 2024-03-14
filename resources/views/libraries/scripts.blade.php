
@stack('js')
<script src="{{ URL::to('') }}/resources/vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/magnefic-popup/jquery.magnific-popup.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/easing.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/superfish.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/jquery.ajaxchimp.min.js"></script>
<script src="{{ URL::to('') }}/resources/vendors/mail-script.js"></script>
<script src="{{ URL::to('') }}/resources/js/main.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
          pageLanguage: 'en', // Specify the default language of your webpage
            includedLanguages: 'en,es,fr', // Specify the languages you want to include
            /*layout: google.translate.TranslateElement.InlineLayout.SIMPLE,*/ // Adjust the layout if needed
            layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT,
            multilanguagePage: true
        }, 'google_translate_element');
        var select = document.querySelector('.goog-te-combo');
        var selectLanguageOption = document.createElement('option');
        selectLanguageOption.text = 'Select Language';
        selectLanguageOption.value = '';
        select.prepend(selectLanguageOption);        
    }
</script>


<script>
    function selectLanguage(langCode) {
        var select = document.querySelector('.goog-te-combo');
        select.value = langCode;
        select.dispatchEvent(new Event('change'));
    }
    
$(document).ready(function(){
    $('#readMoreBtn').on('click',function(){
  
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("section1_more");
      var btnText = document.getElementById("readMoreBtn");
    
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
      }
      
    });
        
    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $('#toTop').fadeIn();
            $('body').css({'transform':'none'});
        } else {
            $('#toTop').fadeOut();
            $('body').css({'transform':'none'});
        }
    });

    $("#toTop").click(function () {
        $("html, body").animate({scrollTop: 0}, 3000);
    });

    $(".owl-carousel").owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      autoplay:true,
      autoplayTimeout:10000,
      dots: false,
      responsive:{
        0:{
          items:2
        },
        600:{
          items:2
        },
        1000:{
          items:2
        }
      }
    });

// var $div = $('<div />').appendTo('body');
// $div.attr('id', 'toTop').html('<i class="fa fa-arrow-up"></i>').css({'position':'fixed'});
 });
</script>


