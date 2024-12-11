const swiper = new Swiper('.widgetModelos-swiper', {
  // Optional parameters
  direction: 'horizontal',
  slidesPerView: 1,
  centerInsufficientSlides:true,
  spaceBetween: 25,
  centeredSlides: true,
  centeredSlidesBounds: true,
  navigation: {
    nextEl: '.widgetModelos-nextButton',
    prevEl: '.widgetModelos-prevButton',
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 10,
      centeredSlides: false,
      centerInsufficientSlides:true,
      initialSlide: 0,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 20,
      centeredSlides: false,
      centerInsufficientSlides:true,
      initialSlide: 0,
    },
    1440: {
      slidesPerView: 3,
      spaceBetween: 24,
      centeredSlides: false,
      centerInsufficientSlides:true,
      initialSlide: 0,
    },
    /*
    1300: {
      slidesPerView: 3,
      spaceBetween: 20,
      centeredSlides: false,
      centerInsufficientSlides:true,
    },
    1440: {
      slidesPerView: 4,
      spaceBetween: 20,
      centeredSlides: true,
      centerInsufficientSlides:true,
    },*/
  },
});