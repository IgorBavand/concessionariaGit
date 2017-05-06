$(function(){

    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 410){
            jQuery("#navegacao").css("background-color","rgba(32, 40, 53, 1)");
            jQuery("#navegacao").addClass("animated-nav");
        } else {
            jQuery("#navegacao").css("background-color","rgba(32, 40, 53, 0.5)");
            jQuery("#navegacao").removeClass("animated-nav");
        }
    });

    $('#nav').onePageNav({
        filter: ':not(.external)',
        scrollSpeed: 950,
        scrollThreshold: 1
    });

     $('.product-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:5,
            }
        }
    });
		$(".typed").typewriter({
			speed: 60
		});
    // Slider Não mecha esse carai
    var slideHeight = $(window).height();
    $('#home-carousel .carousel-inner .item, #home-carousel .video-container').css('height',slideHeight);

    $(window).resize(function(){'use strict',
        $('#home-carousel .carousel-inner .item, #home-carousel .video-container').css('height',slideHeight);
    });
 
// Slide Carousel tambem não mecha
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});


    $("#testimonial").owlCarousel({
        pagination : true, 
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true
    });

});
