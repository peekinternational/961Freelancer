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
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1
});
