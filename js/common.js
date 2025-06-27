$('.sidebar_menu').on('click', function() {
   $('.side_bar').stop().toggleClass('hide-menu');
});

$('.top_btn').on('click', function() {
  $('html, body').animate({ scrollTop: 0 }, 200);

});

//전체메뉴 클릭 시, active 추가 (컬러)

$('.all_menu_btn').click(function(){
  $(this).toggleClass('active');
})