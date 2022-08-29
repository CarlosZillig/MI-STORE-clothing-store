const swiper = new Swiper(".swiper", {
   // Default parameters
   slidesPerView: 1,
   spaceBetween: 10,
   // Responsive breakpoints
   breakpoints: {
      // when window width is >= 320px
      320: {
         slidesPerView: 1,
         spaceBetween: 20,
      },
      // when window width is >= 640px
      640: {
         slidesPerView: 3,
         spaceBetween: 40,
      },

      1200: {
         slidesPerView: 5,
         spaceBetween: 40,
      },
   },
});
