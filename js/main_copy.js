let slideWrapper = $('.story_wrapper'),
    slides = slideWrapper.find('.stories'),
    slide = slides.find('.story'),
    currentIdx = 0,
    slideCount = slide.length,
    slideWidth = 800,
    slideMargin = 100,
    moveAmt = slideWidth + slideMargin,
    halfAmt = slideWidth/1.5;
    prevBtn = slideWrapper.find('.controls .prev_btn'),
    nextBtn = slideWrapper.find('.controls .next_btn');



  slides.prepend(slide.clone());
  slide.clone().appendTo(slides);

  let allSlide = slides.find('.story');
  let totalCount = allSlide.length;

  allSlide.each(function (idx) {
      $(this).css({ left: idx * moveAmt + halfAmt + 'px' });
    });
  
    slides.css('width', moveAmt * totalCount + 'px');


    let startIdx = slideCount; 
    slides.css('left', -startIdx * moveAmt + 'px');
    currentIdx = startIdx;

    function moveSlide(num) {
      slides.stop().animate({ left: -num * moveAmt + 'px' }, 500, function () {
        if (num >= totalCount - slideCount || num < slideCount) {
          slides.css('left', -startIdx * moveAmt + 'px');
          currentIdx = startIdx;
        }
      });
    }

  nextBtn.click(function(){
      moveSlide(++currentIdx);
  });
  prevBtn.click(function(){
      moveSlide(--currentIdx);
  });





//메인섹션 슬ㄹ이드
const mslides = $('.mslides-container .mslide');
let current = 0;
const mslideCount = mslides.length;
const interval = 5000; // 5초

function showSlide(idx) {
  mslides.removeClass('active').eq(idx).addClass('active');
}

function nextSlide() {
  current = (current + 1) % mslideCount;
  showSlide(current);
}

let timer = setInterval(nextSlide, interval);


// $('.slides-container, .main-title-area').hover(
//   function() { clearInterval(timer); },
//   function() { timer = setInterval(nextSlide, interval); }
// );




//메인페이지 헤더 드롭다운
// $('.all_menu_btn').on('click', function(e) {
//   e.preventDefault();
//   $('.all_menu_dropdown').toggleClass('active');
//   if($('header').css('position') !== 'fixed'){
//   if( $('header').hasClass('main_header')){
//     $('header').removeClass('main_header').addClass('sub_header');
//     $('.sign_btn').addClass('active');
//   }else{
//     $('header').removeClass('sub_header').addClass('main_header');
//     $('.sign_btn').removeClass('active');
//   }
// }
// });
// 헤더 초기 상태 저장
let initialHeaderClass = $('header').hasClass('main_header') ? 'main_header' : 'sub_header';
let initialSignBtnState = $('.sign_btn').hasClass('active');

// 메인페이지 헤더 드롭다운 (960px 이상에서만 작동)
$('.all_menu_btn').on('click', function(e) {
  e.preventDefault();
  
  // 960px 이상에서만 실행
  if (window.innerWidth > 960) {
    $('.all_menu_dropdown').toggleClass('active');
    
    if($('header').css('position') !== 'fixed') {
      if( $('header').hasClass('main_header')) {
        $('header').removeClass('main_header').addClass('sub_header');
        $('.sign_btn').addClass('active');
      } else {
        $('header').removeClass('sub_header').addClass('main_header');
        $('.sign_btn').removeClass('active');
      }
    }
  }
});

// 960px 이하로 창 크기 변경 시 드롭다운 닫기
$(window).on('resize', function() {
  if (window.innerWidth <= 960) {
    // 드롭다운 닫기
    $('.all_menu_dropdown').removeClass('active');
    
    // 현재 스크롤 위치 확인
    const scramt = $(window).scrollTop();
    const isFixed = $('header').css('position') === 'fixed';
    
    // 스크롤 위치와 fixed 상태에 따라 헤더 클래스 결정
    if (scramt > scondSectionTop || isFixed) {
      $('header').removeClass('main_header').addClass('sub_header');
      $('.sign_btn').addClass('active');
    } else {
      $('header').removeClass('sub_header').addClass('main_header');
      $('.sign_btn').removeClass('active');
    }
  }
});

//두번째 섹션부터 상단에 헤더 따라다니기

const scondSectionTop = $('.travel-container').offset().top;

$(window).scroll(function(){
  var scramt = $(window).scrollTop();
  if(scramt > scondSectionTop){
    $('header').removeClass('main_header').addClass('sub_header');
    $('.sign_btn').addClass('active');
    $('header').css({
      position:'fixed',
      top:0,
      left:0
    })
  }else{
    $('.all_menu_dropdown').removeClass('active');
    $('header').removeClass('sub_header').addClass('main_header');
    $('.sign_btn').removeClass('active');
    $('header').css({
      position:'relative',
      top:0,
      left:0
    })
  }

})


/* - - - - - - tab filter - - - - - - -*/
let tabBtns = $('.tab_btns'),
    travelCards = $('.special-travel .travel-card');
    
    
    tabBtns.click(function(){
    tabBtns.removeClass('active');
    $(this).addClass('active');

    let dataFilter = $(this).attr('data-filter');
    console.log(dataFilter);

    travelCards.hide();

    $(dataFilter).show();
  
  });



    
var $weatherSlider = $('.weather-cards');
var $weatherCards = $weatherSlider.find('.card');
var weatherCardCount = $weatherCards.length;
var weatherCardWidth = 312;
var weatherGap = 16;
var weatherStep = weatherCardWidth + weatherGap;

// 카드들을 복제해서 끝에 붙여 무한 롤링 구현
$weatherCards.clone().appendTo($weatherSlider);

var weatherTotalCards = $weatherSlider.find('.card').length;
var weatherTotalWidth = weatherTotalCards * weatherStep;
$weatherSlider.css('width', weatherTotalWidth + 'px');

var weatherPos = 0;
var weatherSpeed = 1.5; // 1px씩 이동 (원하는 속도 조절)
var weatherIsPlaying = true;
var weatherAnimationId;

function weatherAnimate() {
  if (!weatherIsPlaying) return;
  weatherPos -= weatherSpeed;
  if (Math.abs(weatherPos) >= weatherCardCount * weatherStep) {
    // 원본 카드 전체가 지나가면 위치 리셋
    weatherPos = 0;
  }
  $weatherSlider.css('transform', 'translateX(' + weatherPos + 'px)');
  weatherAnimationId = requestAnimationFrame(weatherAnimate);
}

// 시작
weatherAnimate();

const playStopbtns = $('.slides_btns button');

// 재생/멈춤 버튼
$('.play_btn').on('click', function() {
  if (!weatherIsPlaying) {
    playStopbtns.removeClass('active');
    $(this).addClass('active');
    weatherIsPlaying = true;
    weatherAnimate();
    
  }
});
$('.stop_btn').on('click', function() {
  playStopbtns.removeClass('active');
  $(this).addClass('active');
  weatherIsPlaying = false;
  cancelAnimationFrame(weatherAnimationId);
});

//마우스호버,아웃 재생 멈춤

$weatherSlider.on('mouseover',function(){
  playStopbtns.removeClass('active');
  $('.stop_btn').addClass('active');
  weatherIsPlaying = false;
  cancelAnimationFrame(weatherAnimationId);
}).on('mouseleave',function(){
  playStopbtns.removeClass('active');
  $('.play_btn').addClass('active');
  weatherIsPlaying = true;
  weatherAnimate();
});


var swiper = new Swiper(".shorts", {
  slidesPerView: 4,
  spaceBetween: 15,
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  },
});
/*
const swiperSlide = $('.swiper-slide')

 swiperSlide.css({width:'25%'})
*/