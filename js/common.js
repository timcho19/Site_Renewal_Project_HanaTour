$('.sidebar_menu').on('click', function() {
   $('.side_bar').stop().toggleClass('hide-menu');
});

$('.top_btn').on('click', function() {
  $('html, body').animate({ scrollTop: 0 }, 200);

});

//전체메뉴 클릭 시, active 추가 (컬러)




//likes 버튼 클릭스 할일


$('.likes').click(function(){
  $(this).find('.line-heart').toggle();
  $(this).find('.fill-heart').toggle();

  likeCount = $('.likes .fill-heart:visible').length;

  if(likeCount > 0){
    $('.likes_ct').text(likeCount).fadeIn();
  } else {
    $('.likes_ct').fadeOut();
  }
});

//헤더 햄버거 버튼 클릭시
const aside = $('aside');
const asideBtn = $('.hamburger-menu');
const asidecloseBtn = $('.aside_close');



asideBtn.click(function(){
  
  aside.addClass('active');
  $('.side_bar').hide();
  
});

asidecloseBtn.click(function(){
  aside.removeClass('active')
  $('.side_bar').show();
})

// 브라우저 리사이즈
$(window).on('resize', function() {
  if ($(window).width() >= 960) {
    aside.removeClass('active'); // 960px 이상이면 무조건 닫힘
    $('.side_bar').show();
  }
  if ($(window).width() >= 576) {
    $('.company_info').show(); // 576px 이상이면 항상 보이게
  } else {
    $('.company_info').hide(); // 576px 미만이면 숨김(초기상태)
  }
});

// 페이지 로드 시에도 상태 체크
$(document).ready(function() {
  if ($(window).width() >= 960) {
    aside.removeClass('active');
  }
});

//어사이드 탭버튼 클릭시 할일
$('.aside_btns a').click(function(){
  $('.aside_btns a').removeClass('active');
  $(this).addClass('active');
  let tabIdx =  $(this).index();

  $('.aside_tabs > div').hide();
  $('.aside_tabs > div').eq(tabIdx).show();

})

$('.aside_btns').on('click', function(e){
  e.preventDefault();
});

//footer show_info 클릭시 할일
$('.show_info').click(function(){
  $('.company_info').stop().slideToggle("slow");
  $(this).find('.bi').toggleClass('rotate');
})