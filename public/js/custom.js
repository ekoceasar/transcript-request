
  (function ($) {
  
  "use strict";

    // COUNTER NUMBERS
    jQuery('.counter-thumb').appear(function() {
      jQuery('.counter-number').countTo();
    });
    
    // CUSTOM LINK
    $('.smoothscroll').click(function(){
    var el = $(this).attr('href');
    var elWrapped = $(el);
    var header_height = $('.navbar').height();

    scrollToDiv(elWrapped,header_height);
    return false;

    function scrollToDiv(element,navheight){
      var offset = element.offset();
      var offsetTop = offset.top;
      var totalScroll = offsetTop-navheight;

      $('body,html').animate({
      scrollTop: totalScroll
      }, 300);
    }
});
$('#nationality').click(function(){  
    $("#d-state").removeClass("d-none");
    $("#d-lga").removeClass("d-none");
    $("#d-country").addClass("d-none");
    $("#d-region").addClass("d-none");
    $("#d-district").addClass("d-none");
  
});
$('#nationality2').click(function(){  
    $("#d-state").addClass("d-none");
    $("#d-lga").addClass("d-none");
    $("#d-country").removeClass("d-none");
    $("#d-region").removeClass("d-none");
    $("#d-district").removeClass("d-none");
  
});
    
  })(window.jQuery);


