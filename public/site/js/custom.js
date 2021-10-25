$(function() {
"use strict";

function scrollfix () {
	var scroll = $(window).scrollTop();
	if (scroll >500) {
  		$(".home2 #header").addClass('fix');
	}
	else
	{
		$(".home2 #header").removeClass('fix');
	}
}
function bannerheight () {
    var bannerheight = $(".banner").height();
	$(".banner-detail").css('top', Math.round(bannerheight/3.5)+'px');

    var full_onescreen_banner_height = $("#container").height();
	$(".banner-detail").css('top', Math.round(full_onescreen_banner_height/3)+'px');
}
function re_size () {
	if ($( window ).width() <= 991) {
		$('.nav li').on('click', function () {
		$('#menu ul').css({"display":"none"});
		});

		/* ------------bannre button margin ------------- */
		$('.cd-intro').children('button').removeClass('mt_30').addClass('mt_20');
	}
	if ($(window).width() > 991) {
		/* ------------bannre button margin ------------- */
		 $('.cd-intro').children('button').addClass('mt_30').removeClass('mt_20');
	}
}

function swiper () {
    $(".slider-main").slick({
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        pauseOnHover: true,
        dots: false,
        cssEase: 'linear',
        fade: true,
        draggable: true,
        prevArrow: '<button class="PrevArrow fa fa-angle-left"></button>',
        nextArrow: '<button class="NextArrow fa fa-angle-right"></button>',
        responsive: [{
            breakpoint: 340,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: false,
            }
        },
        ]
    });

    $(".slider-circle").slick({
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 5,
        slidesToScroll: 5,
        pauseOnHover: true,
        dots: false,
        cssEase: 'linear',
        fade: false,
        draggable: true,
        prevArrow: '<button class="PrevArrow fa fa-angle-left"></button>',
        nextArrow: '<button class="NextArrow fa fa-angle-right"></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
}

function parallax (){
    var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
    if(!isMobile) {
        if($(".parallax").length){  $(".parallax").sitManParallex({  invert: false });};
    }else{
        $(".parallax").sitManParallex({  invert: true });

    }
}
/* ===== Right Click Disable   =====   */
//document.oncontextmenu = document.body.oncontextmenu = function() {return false;}

    $( window ).on("load",function() {
        bannerheight ();
    });
	$( window ).ready(function() {
		$('[data-toggle="tooltip"]').tooltip();
		$(".loder").fadeOut("slow");
		// scrollfix ();
        swiper ();
		bannerheight ();
		re_size();
		parallax ();

	});
	$( window ).resize(function() {
		re_size();
		bannerheight ();
	});

	// $(window).scroll(function() {
	// 	scrollfix ();
	// });

});
