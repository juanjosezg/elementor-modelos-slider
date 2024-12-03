const swiper = new Swiper('.widgetModelos-swiper', {
  // Optional parameters
  direction: 'horizontal',
  slidesPerView: 1,
  centerInsufficientSlides:true,
  spaceBetween: 25,
  centeredSlides: true,
  centeredSlidesBounds: true,
  pagination: {
    el: '.widgetModelos-pag',
  },

  navigation: {
    nextEl: '.widgetModelos-nextButton',
    prevEl: '.widgetModelos-prevButton',
  },
  breakpoints: {
    950: {
      slidesPerView: 2,
      spaceBetween: 10,
      centeredSlides: false,
      centerInsufficientSlides:true,
      initialSlide: 2,
    },
    1200: {
      slidesPerView: 2,
      spaceBetween: 20,
      centeredSlides: false,
      centerInsufficientSlides:true,
      initialSlide: 3,
    },

    1300: {
      slidesPerView: 3,
      spaceBetween: 20,
      centeredSlides: false,
      centerInsufficientSlides:true,
    },

    7300: {
      slidesPerView: 1,
      spaceBetween: 20,
      centeredSlides: true,
      centerInsufficientSlides:true,
    },
  },
});