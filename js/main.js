// Pre Loader Js
$(window).on("load", function () {
  console.log("test");
  $("#preloader").fadeOut(1000);
});
// Pre Loader Js

// <!-- Over Scroll Header change -->
$(window).on("scroll", function () {
  if ($(window).scrollTop() > 140) {
    $(".scroll_header").addClass("active");
  } else {
    //remove the background property so it comes transparent again (defined in your css)
    $(".scroll_header").removeClass("active");
  }
});
// <!-- Over Scroll Header change -->

// <!-- Over Scroll Header color change -->
$(window).on("scroll", function () {
  if ($(window).scrollTop() > 140) {
    $(".go_to_top").addClass("active");
  } else {
    //remove the background property so it comes transparent again (defined in your css)
    $(".go_to_top").removeClass("active");
  }
});
// <!-- Over Scroll Header color change -->

// Banner 2nd Slider Animation
$(".banner .swiper-button-next").click(function () {
  $(".banner_slides .contentDv h4").addClass(
    "wow animate__animated animate__fadeInDown"
  );
});

$(".banner .swiper-button-next").click(function () {
  $(".banner_slides .contentDv h2").addClass(
    "wow animate__animated animate__fadeInDown animate__delay-1s"
  );
});

$(".banner .swiper-button-next").click(function () {
  $(".banner_slides .contentDv h5").addClass(
    "wow animate__animated animate__fadeInLeft animate__delay-2s"
  );
});

$(".banner .swiper-button-next").click(function () {
  $(".banner_slides .contentDv p").addClass(
    "wow animate__animated animate__fadeInUp animate__delay-3s"
  );
});
// Banner 2nd Slider Animation

// Mobile Header Js
$("header .canvas_btn").click(function () {
  $(".mobile_header").addClass("show");
});

$(".mobile_header .cancel").click(function () {
  $(".mobile_header").removeClass("show");
});
// Mobile Header Js

// Menu Active Js
// const CurrentLocation = location.href;
// const menuItem = document.querySelectorAll(".navs-menu li a");
// const menuLength = menuItem.length;
// for (let i = 0; i < menuLength; i++) {
//   if (menuItem[i].href === CurrentLocation) {
//     menuItem[i].className = "active_tab";
//   }
// }
// Menu Active Js