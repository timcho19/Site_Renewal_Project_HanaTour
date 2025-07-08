/*    취향저격  컨셉따라 여행 슬라이드드     */

const slideshow = function (target) {

  const $wrapper = $(target);
  const $track = $wrapper.find('.slider-container');
  const $content = $wrapper.find('.slider-content');
  const $cards = $track.find('.slider-content .slider-item');
  const visibleCards = 4; 
  const cardgap= 24;
  const cardWH = 312 + cardgap; 

  let currentIndex = 0;
  let isAnimating = false;
   


  
  const $prependClones = $cards.clone().addClass('clone');
  const $appendClones = $cards.clone().addClass('clone');
  
  $content.prepend($prependClones);
  $content.append($appendClones);

  
  const totalCards = $content.find('.slider-item').length;
  //console.log(cardWH,totalCards);
  
  $content.css({
    width: cardWH * totalCards +'px',
    transform: `translateX(-${cardWH * visibleCards}px)`,
  });
  
  // $content.css({
  //   width: cardWH * totalCards +'px',
  //   left: -cardWH * visibleCards + 'px'
  // });
  
  function contentSlide(dir) {
    if (isAnimating) return;
    isAnimating = true;
  
    currentIndex += dir;
    console.log('currentIndex:', currentIndex);
  
    $content.stop(true, true).animate({
      left: -cardWH * currentIndex + 'px'
    }, 300, () => {
      if (currentIndex === visibleCards || currentIndex === -visibleCards) {
        currentIndex = 0;
        $content.css('left', -cardWH * currentIndex + 'px');
      }
      isAnimating = false;
    });
  }

  
  $('.slider-wrapper .contents_prev_btn').click(function(){
    contentSlide(-1);
    resetAutoSlide();
  });
  
  $('.slider-wrapper .contents_next_btn').click(function(){
    contentSlide(1);
    resetAutoSlide();
  });

  //오토슬라이드 기능 추가
  let autoTimer = setInterval(function() {
    contentSlide(1);
  }, 5000);

  function resetAutoSlide() {
    clearInterval(autoTimer);
    autoTimer = setInterval(function() {
      contentSlide(1);
    }, 5000);
  }

  // 슬라이드 터치/드래그 기능
let startX = 0;
let isDragging = false;
const threshold = 50; // 스와이프 인식 최소 거리(px)

// 터치 시작
$track.on('touchstart', function(e) {
  startX = e.originalEvent.touches[0].clientX;
  isDragging = true;
});

// 터치 종료
$track.on('touchend', function(e) {
  if (!isDragging) return;
  isDragging = false;
  let endX = e.originalEvent.changedTouches[0].clientX;
  let diff = endX - startX;
  if (Math.abs(diff) > threshold) {
    if (diff < 0) {
      contentSlide(1); // 왼쪽 스와이프: 다음 슬라이드
    } else {
      contentSlide(-1); // 오른쪽 스와이프: 이전 슬라이드
    }
    resetAutoSlide();
  }
});

// 마우스 드래그도 지원
let mouseDownX = 0;
let mouseDragging = false;

$track.on('mousedown', function(e) {
  mouseDownX = e.clientX;
  mouseDragging = true;
});

$(document).on('mouseup', function(e) {
  if (!mouseDragging) return;
  mouseDragging = false;
  let mouseUpX = e.clientX;
  let diff = mouseUpX - mouseDownX;
  if (Math.abs(diff) > threshold) {
    if (diff < 0) {
      contentSlide(1);
    } else {
      contentSlide(-1);
    }
    resetAutoSlide();
  }
});


  }





  
  
  export default
    slideshow;