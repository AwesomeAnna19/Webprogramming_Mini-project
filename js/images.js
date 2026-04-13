/* This here is for the image cards, from this website here: https://youtu.be/VUtJ7FWCfZA */
/* This here is for the image cards, from this website here: https://swiperjs.com/get-started */

const swiper = new Swiper('.card-wrapper', {
  loop: false,
  spaceBetween: 10,
  direction: 'horizontal',

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },

  scrollbar: {
    el: '.swiper-scrollbar',
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    }
  }
});