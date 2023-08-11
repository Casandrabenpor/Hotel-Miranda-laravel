let swiperPagination = new Swiper(".swiper-custom-pagination", {
  loop: true,
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
  },
});

let swiperButton = new Swiper(".swiper-custom-button", {
    loop: true,
    slidesPerView: 1,
    spacesBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  });

  let swiperButtonTwoSlices = new Swiper(".swiper-custom-button-twice-sliced", {
    loop: true,
    slidesPerView: 1,
    spacesBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints:{
        1000:{
          slidesPerView:2
        }
      }
  });