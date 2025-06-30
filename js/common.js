$('.sidebar_menu').on('click', function() {
   $('.side_bar').stop().toggleClass('hide-menu');
});

$('.top_btn').on('click', function() {
  $('html, body').animate({ scrollTop: 0 }, 200);

});

//전체메뉴 클릭 시, active 추가 (컬러)




//likes 버튼 클릭스 할일


$('.likes').click(function(){
  $(this).find('path').toggleClass('active')
  $('.likes_ct').fadeIn();
  $('.likes_ct').text($('.likes path.active').length);

  if($('.likes path.active').length === 0){
    $('.likes_ct').fadeOut();
  }

});

