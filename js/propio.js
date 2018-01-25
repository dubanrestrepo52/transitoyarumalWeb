//Botón de busqueda y de traducción-----------------------------------------------------------------------------------------
$(document).ready(function(){});
              
$("#click").click(function(){
        $("#busqueda").toggle();
    });

  
    $("#telefono").click(function(){
        $("#tel").toggle();
    });

    $("#click-traductor").click(function(){
        $("#traductor").toggle();
    });



    $("#acc").click(function(){
        $(".accessability_container").toggle();
    });


$('.close_container').text('');


$('.sfsiaftrpstwpr').addClass('col-12');
//Menú stycky----------------------------------------------------------------------------------------------------------

	var altura = $('.menu').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.menu').addClass('menu-fixed');
		} else {
			$('.menu').removeClass('menu-fixed');
		}
	});
 

$('.dropdown-menu').addClass('submenu');
$('.screen-reader-text').text('');



//Controles del slider de boostrap----------------------------------------------------------------------------------
(function($) {
    "use strict";



    // manual carousel controls
    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
    
})(jQuery);

//Slider de servicios----------------------------------------------------------------------------------------------



//Slider footer-----------------------------------------------------------------------------------------------------


$('').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });


$('.my-slider').slick({
  dots: true,
  autoplay: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
      {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.slider-footer').slick({
  dots: true,
  autoplay: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

//Animacion para scroll}
var pathname = document.domain; //captura el dominio del sitio
var protocolo = location.protocol; //Captura el protocolo http o https

               

               

  $('a[href="'+protocolo+'//'+pathname+'/#img-degradado"]').click(function (event)
{

event.stopPropagation();
var Position = jQuery('[id="img-degradado"]').offset().top;
jQuery('html, body').animate({ scrollTop: Position }, 1100);
return false;
});



$('a[href="'+protocolo+'//'+pathname+'/#services"]').click(function (event)
{
event.stopPropagation();
var Position = jQuery('[id="services"]').offset().top;
jQuery('html, body').animate({ scrollTop: Position }, 1100);
return false;
});


$('a[href="'+protocolo+'//'+pathname+'/#news"]').click(function (event)
{
event.stopPropagation();
var Position = jQuery('[id="news"]').offset().top;
jQuery('html, body').animate({ scrollTop: Position }, 1100);
return false;
});


$('a[href="'+protocolo+'//'+pathname+'/#maps"]').click(function (event)
{
event.stopPropagation();
var Position = jQuery('[id="maps"]').offset().top;
jQuery('html, body').animate({ scrollTop: Position }, 1100);
return false;
});


//Slider  consejos

$('#slider-consejos').slick({
  dots: true,
  autoplay: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow:'<button type="button" class="slick-prev">hola</button>',
    nextArrow: '<button type="button" class="slick-next"">hola</button>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
      {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]});



//Hasta aquí el slider de consejos

//libreria del scroll

/*$(document).ready(function() {
  $('#fullpage').fullpage();
});*/
