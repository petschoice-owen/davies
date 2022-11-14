var $ = jQuery;

// top navigation function
var windowScrolled = () => {
    function checkScroll() {
        if ($(window).scrollTop() >= 50) {
            $(".top-navigation").addClass("scrolled");
        } else {
            $(".top-navigation").removeClass("scrolled");
        }
    }

    $(document).ready(function() {
        checkScroll();
        $(window).scroll(checkScroll);
    });
}
  
// slider function
var slider = () => {
    if ($(".hero-slider .custom-slider")) {
        $('.hero-slider .custom-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            infinite: true,
            speed: 500,
            dots: false,
            adaptiveHeight: true,
            // prevArrow: $('.slick-prev'),
            // nextArrow: $('.slick-next'),
            swipe: false,
            fade: true,
            cssEase: 'linear'
        });
    }
    if ($(".testimonials .custom-slider")) {
        $('.testimonials .custom-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            infinite: true,
            speed: 800,
            dots: true,
            adaptiveHeight: true,
            prevArrow: false,
            nextArrow: false,
            swipe: false,
            fade: true,
        });
    }
}

// product quantity function
var productQuantity = () => {
    if ($(".qty-input").length) {
        $('.increment-btn').click(function (e) {
            e.preventDefault();
        
            var inc_value = $(this).closest('.product-quantity').find('.qty-input').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            
            if (value < 99) {
                value++;
                $(this).closest('.product-quantity').find('.qty-input').val(value);

                var newQuantity = $(this).closest('.product-quantity').find('.qty-input').val();

                $(this).closest(".variation-quantity").find(".woocommerce-quantity .quantity .input-text.qty.text").val(newQuantity);
            }
        });
        
        $('.decrement-btn').click(function (e) {
            e.preventDefault();
        
            var dec_value = $(this).closest('.product-quantity').find('.qty-input').val();
            var value = parseInt(dec_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                $(this).closest('.product-quantity').find('.qty-input').val(value);

                var newQuantity = $(this).closest('.product-quantity').find('.qty-input').val();
                $(this).closest(".variation-quantity").find(".woocommerce-quantity .quantity .input-text.qty.text").val(newQuantity);
            }
        });
    }
}

// product tabs function
var productTabs = () => { 
    if ($(".product-tabs .tab-content .tab-pane").length < 1) {
        $(".product-tabs").remove();
    }

    if ($(".product-tabs .nav-link").length) {
        $(".product-tabs .nav-link:first-child").attr("aria-selected", "true").addClass("active");
    }

    if ($(".product-tabs .tab-pane").length) {
        setTimeout(() => {
            $(".product-tabs .tab-pane:first-child").addClass("fade show active");
        }, 100);
    }
}
  
// initialize the functions
windowScrolled();
  
$(document).ready(function() {
    slider();
    productQuantity();
    productTabs();
});
  
$(window).resize(function() {
});
  
  