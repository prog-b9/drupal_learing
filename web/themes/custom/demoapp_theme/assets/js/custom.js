// (function($) {
console.log(document.querySelector(".news-comments"));
if (document.querySelector(".news-comments")) {
  var swipers = document.querySelectorAll(".news-comments");

  swipers.forEach(function (swiperElement) {
    var swiper = new Swiper(swiperElement, {
      slidesPerView: 2,
      spaceBetween: 30,
      loop: false,
      speed: 1000,
      // breakpoints: {
      //     576: {
      //         slidesPerView: 2,
      //         spaceBetween: 20,
      //     },
      //     767: {
      //         slidesPerView: 2.5,
      //         spaceBetween: 20,
      //     },
      //     991: {
      //         slidesPerView: 2.9,
      //         spaceBetween: 20,
      //     },
      //     // 1199: {
      //     //     slidesPerView: 3.9,
      //     //     spaceBetween: 30,
      //     // },
      // },
      on: {
        afterInit: function () {
          equalizeHeight(".equalizeHeight");
        },
      },
    });

    swiper.on("slideChangeTransitionStart", function () {
      swiper.loop = true;
      swiper.autoplay.start();
    });
    console.log(swiper);
  });
}
// })(jQuery);
