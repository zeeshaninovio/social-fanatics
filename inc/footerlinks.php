<!-- Bootstrap CDN -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- Bootstrap CDN -->

<!-- Magnific Popup core JS file -->
<script src="magnific-popup/jquery.magnific-popup.js"></script>
<!-- Magnific Popup core JS file -->

<!-- Main Js -->
<script src="js/main.js"></script>
<!-- Main Js -->

<!-- Slick Slider CDN -->
<script src="slick/slick.min.js"></script>
<!-- Slick Slider CDN -->

<!-- Swipper CDN -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Swipper CDN -->

<!-- Wow Js CDN -->
<script src="js/wow.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
new WOW().init();
</script>
<!-- Wow Js CDN -->

<script>
var swiper = new Swiper(".banner_slider", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    on: {
        slideChangeTransitionStart: function() {
            $('.contentDv').hide(0);
        },
        slideChangeTransitionEnd: function() {
            $('.contentDv').show(0);
        },
    }
});

// registered users Slides Js
$(".users_slider").slick({
    arrows: true,
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed: 1500,
    responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
            },
        },
    ],
});
$(".testimonials_slider").slick({
    arrows: false,
    slidesToShow: 1,
    dots: false,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    autoplaySpeed: 1500,
    cssEase: 'ease-in-out',
    touchThreshold: 100
});
// registered users Slides Js
// usersprofile Slides Js
$(".media-t").slick({
    arrows: true,
    slidesToShow: 3,
    autoplaySpeed: 1500,
    responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
            },
        },
    ],
});
// usersprofile Slides Js
// usersprofile media Slides Js
$(".media-tab").slick({
    arrows: true,
    slidesToShow: 3,
    autoplaySpeed: 1500,
    responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
            },
        },
    ],
});
// usersprofile media Slides Js
</script>