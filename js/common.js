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
  $('body').css('overflow', 'hidden');
  
});

asidecloseBtn.click(function(){
  aside.removeClass('active')
  $('.side_bar').show();
  $('body').css('overflow', '');
  
   // 첫 번째 탭으로 초기화
   $('.aside_btns a').removeClass('active');
   $('.aside_btns a').first().addClass('active');
 
   // 모든 탭 내용 숨기고, 첫 번째 탭 내용만 표시
   $('.aside_tabs > div').hide();
   $('.aside_tabs > div').first().show();
 
   // 언더라인을 첫 번째 탭으로 이동
   $('.aside_btns .underline').css('transform', 'translateX(0%)');
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
    $('body').css('overflow', '');
  }
});

// 어사이드 탭버튼 클릭시 할일
$('.aside_btns a').click(function(e){
  e.preventDefault(); // a태그 기본 동작 방지


  $('.aside_btns a').removeClass('active');
  $(this).addClass('active');

  let target = $(this).attr('href');


  $('.aside_tabs > div').hide();
  $(target).show();
});



//footer show_info 클릭시 할일
$('.show_info').click(function(){
  $('.company_info').stop().slideToggle("slow");
  $(this).find('.bi').toggleClass('rotate');
})


/*어사이드바 언더라인 애니메이션*/
$('.aside_btns a').on('click', function(e){
  e.preventDefault();
  var $btns = $('.aside_btns a');
  var $underline = $('.aside_btns .underline');
  var idx = $btns.index(this);

  $btns.removeClass('active');
  $(this).addClass('active');

  // underline 이동
  $underline.css('transform', 'translateX(' + (idx * 100) + '%)');
});