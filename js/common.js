$('.sidebar_menu').on('click', function() {
   $('.side_bar').stop().toggleClass('hide-menu');
});

$('.top_btn').on('click', function() {
  $('html, body').animate({ scrollTop: 0 }, 200);

});




