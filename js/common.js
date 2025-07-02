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

//헤더 햄버거 버튼 클릭시
const aside = $('aside');
const asideBtn = $('.hamburger-menu');
const asidecloseBtn = $('.aside_close');



asideBtn.click(function(){
  
  aside.addClass('active')
});

asidecloseBtn.click(function(){
  aside.removeClass('active')
})

// 브라우저 리사이즈
$(window).on('resize', function() {
  if ($(window).width() >= 960) {
    aside.removeClass('active'); // 960px 이상이면 무조건 닫힘
  }
});

// 페이지 로드 시에도 상태 체크
$(document).ready(function() {
  if ($(window).width() >= 960) {
    aside.removeClass('active');
  }
});