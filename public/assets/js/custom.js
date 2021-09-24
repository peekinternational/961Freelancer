$(".overlay-bg").on("click", function () {
    $(".message-box, .overlay-bg").removeClass("active");
    $('.overlay-bg').removeClass('bg-transparent');
});




$(".menubar").on("click", function () {
    $(".all-content, .home-content, .header-top.sticky").addClass("active");
});

$(".close-icon, .overlay-bg").on("click", function () {
    $(".all-content, .home-content").removeClass("active");
});


$(".menubar").on("click", function () {
    $(".ofcanvas-menu, .overlay-bg").addClass("active");
});

$(".close-icon, .overlay-bg").on("click", function () {
    $(".ofcanvas-menu, .overlay-bg").removeClass("active");
});
// sticky
var wind = $(window);
var sticky = $('.header-top, .home-header, .dashboard-page');
var headerHeight = sticky.outerHeight();
wind.on('scroll', function () {
    var scroll = wind.scrollTop();
    if (scroll < headerHeight) {
        sticky.removeClass('sticky');
    } else {
        sticky.addClass('sticky');
    }
});

$('.testimonial-carousel').slick({
  centerMode: true,
  centerPadding: '30%',
  slidesToShow: 1,
  dots: false,
  arrows: true,
  adaptiveHeight: true,
  responsive: [
	{
	  breakpoint: 1600,
	  settings: {
		  centerPadding: '21%',
		  slidesToShow: 1,
	  }
	},
	{
	  breakpoint: 993,
	  settings: {
	    centerPadding: '15%',
	    slidesToShow: 1,
	  }
	},
	{
	  breakpoint: 769,
	  settings: {
	    centerPadding: '5%',
	    dots: true,
	    slidesToShow: 1,
	    arrows: false
	  }
	}
  ]
});
/* CONSULTATION FEE SLIDER */
function ageRangeslider(){
	jQuery("#wt-productrangeslider").slider({
		range: true,
		min: 0,
		max: 150,
		values: [ 10, 110 ],
		slide: function( event, ui ) {
			jQuery( "#wt-consultationfeeamount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	jQuery( "#wt-consultationfeeamount" ).val( "$" + jQuery("#wt-productrangeslider").slider( "values", 0 ) + " - $" + jQuery("#wt-productrangeslider").slider( "values", 1 ));
}
if( jQuery("#wt-productrangeslider").length > 0 ){
	ageRangeslider();
}
/* THEME VERTICAL SCROLLBAR */
if(jQuery('.wt-verticalscrollbar').length > 0){
	var _wt_verticalscrollbar = jQuery('.wt-verticalscrollbar');
	_wt_verticalscrollbar.mCustomScrollbar({
		axis:"y",
	});
}
if(jQuery('.wt-horizontalthemescrollbar').length > 0){
	var _wt_horizontalthemescrollbar = jQuery('.wt-horizontalthemescrollbar');
	_wt_horizontalthemescrollbar.mCustomScrollbar({
		axis:"x",
		advanced:{autoExpandHorizontalScroll:true},
	});
}
/* DASHBOARD MENU */
	if(jQuery('#wt-btnmenutoggle').length > 0){
		jQuery("#wt-btnmenutoggle").on('click', function(event) {
			event.preventDefault();
			jQuery('#wt-wrapper').toggleClass('wt-openmenu');
			jQuery('body').toggleClass('wt-noscroll');
			jQuery('.wt-navdashboard ul.sub-menu').hide();
			jQuery('.menu-icon').toggleClass('click-menu-icon');
		});
	}
	jQuery('.wt-navigation ul li.menu-item-has-children, .wt-navdashboard ul li.menu-item-has-children, .wt-navigation ul li.menu-item-has-mega-menu').prepend('<span class="wt-dropdowarrow"><i class="fal fa-chevron-right"></i></span>');
	jQuery('.wt-navigation ul li.menu-item-has-children span, .wt-navigation ul li.menu-item-has-mega-menu span').on('click', function() {
		jQuery(this).parent('li').toggleClass('wt-open');
		jQuery(this).next().next().slideToggle(300);
	});
	jQuery('.wt-navdashboard ul li.menu-item-has-children').on('click', function(){
		jQuery(this).toggleClass('wt-open');
		jQuery(this).find('.sub-menu').slideToggle(300);
	});
	/* ADD Class */
	jQuery('.wt-myskills .wt-addinfo').on('click', function() {
		var _this = jQuery(this);
		_this.parents('li').addClass('wt-skillsaddinfo');
	});
	jQuery('.wt-myskills .wt-deleteinfo').on('click', function() {
		var _this = jQuery(this);
		var _val = _this.parents('li').find('.skill-dynamic-field input').val();
		_this.parents('li').find('.skill-dynamic-html .skill-val').html(_val);
		_this.parents('li').removeClass('wt-skillsaddinfo');
	});
	/* Dashboard Slider */
	// var _wt_postedsilder = jQuery("#wt-postedsilder")
	// _wt_postedsilder.owlCarousel({
	// 	item: 6,
	// 	loop:true,
	// 	nav:true,
	// 	margin: 10,
	// 	autoplay:false,
	// 	responsiveClass:true,
	// 	navClass: ['wt-prev', 'wt-next'],
	// 	navContainerClass: 'wt-slidernav',
	// 	navText: ['<span class="lnr lnr-chevron-left"></span>', '<span class="lnr lnr-chevron-right"></span>'],
	// 	responsive:{
	// 		0:{items:1,},
	// 		720:{items:2,},
	// 	}
	// });
	/*  PROGRESS BAR */
	try {
		$('#wt-ourskill').appear(function () {
			jQuery('.wt-skillholder').each(function () {
				alert('test');
				jQuery(this).find('.wt-skillbar').animate({
					width: jQuery(this).attr('data-percent')
				}, 2500);
			});
		});
	} catch (err) {}

	/* Team Slider */
	var _wt_categoriesslider = jQuery("#wt-categoriesslider")
	_wt_categoriesslider.owlCarousel({
		item: 6,
		loop:true,
		nav:false,
		margin: 0,
		autoplay:false,
		center: true,
		responsiveClass:true,
		responsive:{
			0:{items:1,},
			481:{items:2,},
			768:{items:3,},
			1440:{items:4,},
			1760:{items:6,}
		}
	});