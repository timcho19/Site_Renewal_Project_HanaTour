let slideWrapper = $('.story_wrapper'),
                slides = slideWrapper.find('.stories'),
                slide = slides.find('.story'),
                currentIdx = 0,
                slideCount = slide.length,
                slideWidth = 1142,
                slideMargin = 90,
                moveAmt = slideWidth + slideMargin,
                prevBtn = slideWrapper.find('.controls .prev_btn'),
                nextBtn = slideWrapper.find('.controls .next_btn');



    slides.prepend(slide.clone());
    slide.clone().appendTo(slides);

    let allSlide = slides.find('.story');
    let totalCount = allSlide.length;

    allSlide.each(function (idx) {
        $(this).css({ left: idx * moveAmt + 'px' });
      });
    
      slides.css('width', moveAmt * totalCount + 'px');


      let startIdx = slideCount; 
      slides.css('left', -startIdx * moveAmt + 'px');
      currentIdx = startIdx;

      function moveSlide(num) {
        slides.stop().animate({ left: -num * moveAmt + 'px' }, 500, function () {
          if (num >= totalCount - slideCount) {

            slides.css('left', -startIdx * moveAmt + 'px');
            currentIdx = startIdx;
          } else if (num < slideCount) {

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
$('.all_menu_btn').on('click', function(e) {
  e.preventDefault();
  $('.all_menu_dropdown').toggleClass('active');
  if( $('header').hasClass('main_header')){
    $('header').removeClass('main_header').addClass('sub_header');
    $('.sign_btn').addClass('active');
  }else{
    $('header').removeClass('sub_header').addClass('main_header');
    $('.sign_btn').removeClass('active');
  }

});


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
/*    취향저격  컨셉따라 여행 슬라이드드     */

const $wrapper = $('.slider-wrapper.special-travel');
const $track = $wrapper.find('.travel-cards');
const $cards = $track.children('.travel-card');
const visibleCards = 4; 
const cardgap= 24;
const cardWH = $cards[0].offsetWidth + cardgap; 
const totalOriginal = $cards.length;
let currentIndex = visibleCards;
let isAnimating = false;


const $prepend = $cards.slice(-visibleCards).clone(); 
const $append = $cards.slice(0, visibleCards).clone(); 
$track.prepend($prepend);
$track.append($append);

const totalCards = totalOriginal + visibleCards * 2;


$track.css({
  width: cardWH * totalCards,
  transform: `translateX(-${cardWH * currentIndex}px)`,
});


function moveSlide(dir) {
  if (isAnimating) return;
  isAnimating = true;
  currentIndex += dir;

  $track.css({
    transition: 'transform 0.5s',
    transform: `translateX(-${cardWH * currentIndex}px)`,
  });

  setTimeout(() => {
    if (currentIndex <= visibleCards - 1) {
      currentIndex = totalOriginal + (currentIndex - visibleCards);
      $track.css({
        transition: 'none',
        transform: `translateX(-${cardWH * currentIndex}px)`,
      });
    } else if (currentIndex >= totalOriginal + visibleCards) {
      currentIndex = visibleCards;
      $track.css({
        transition: 'none',
        transform: `translateX(-${cardWH * currentIndex}px)`,
      });
    }
    isAnimating = false;
  }, 500);
}


$('.tabstroy .contents_prev_btn').click(function(){
  moveSlide(-1);
});
$('.tabstroy .contents_next_btn').click(function(){
  moveSlide(1);
});


/* - - - - - - best 여행지 무한 슬라이드 - - - - - */
// let monthlyWrapper = $('.monthly-travel'),
//     monthlyCards = monthlyWrapper.find('.weather-cards'),
//     monthlyCard = monthlyCards.find('.card'),
//     cardWidth = 312,
//     cardMargin = 24;
//     moveAmt = cardWidth + cardMargin,
//     speed = 1;

// monthlyCards.prepend(monthlyCard.clone());


// let allCard = monthlyCards.find(monthlyCard);

// function slideLayout(cw, cm){
//   allCard.each(function(idx){
//     let newLeft = idx * (cw + cm);

//     $(this).css({left:newLeft, widht:cw});
//   })
// }

// function moveCard(num){
//   lef newLeft = -num * 
// }

    
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