jQuery(function ($) {

   $('.nav_burger').click(function (event) {
      $(this).toggleClass('nav_burger_active');
      $('.nav').toggleClass('nav_active');
   });

   $('.show_more').click(function (event) {
      $(this).toggleClass('show_more_active');
      $(this).siblings('p').toggleClass('active');
   });

})