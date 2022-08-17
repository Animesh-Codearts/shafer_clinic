// JavaScript Document
jQuery('#custom-partner-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:8
        }
    }
});
jQuery('#custom-news-outlet-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
});
jQuery('#custom-testimonial-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    },
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
});


// //open and close tab menu
// $('.nav-tabs-dropdown')
//     .on("click", "li:not('.active') a", function(event) {  $(this).closest('ul').removeClass("open");
//     })
//     .on("click", "li.active a", function(event) {        $(this).closest('ul').toggleClass("open");
//     });

jQuery(document).ready(function(){
    jQuery( ".gallery-a-btn" ).each(function() {
        jQuery(this).on("click", function(){
        jQuery(this).parent().toggleClass('cus-hide')
        jQuery(this).parent().siblings('.gal-img-btn-yn').toggleClass('cus-hide')
        jQuery(this).parent().parent('.gallery-img-box').css('background-color', "#697e8a")
        });
    });
    jQuery('.gal-img-button-n').click(function(){
        jQuery(this).parent().parent().find('.gal-img-btn').removeClass('cus-hide')
        jQuery(this).parent().parent().find('.gal-img-btn-yn').addClass('cus-hide')
        jQuery(this).parent().parent('.gallery-img-box').css('background-color', "#333")
    })
    jQuery('.gal-img-button-y').click(function(){
        jQuery(this).parent().parent().siblings('.gallery-image ').removeClass('cus-hide')
        jQuery(this).parent().parent('.gallery-img-box').addClass('cus-hide')
    })
}); 


jQuery(document).ready(function(){
    jQuery(window).scroll(function() {
       if(jQuery(this).scrollTop() > 100 ) {
       jQuery(".header-bottom").addClass("fixed-top");
      } else {
       jQuery(".header-bottom").removeClass("fixed-top");
      }
    });
    jQuery('.nav-item').click(function() {
        jQuery('.nav-item').removeClass('active')
        jQuery(this).addClass('active')
    })
});

