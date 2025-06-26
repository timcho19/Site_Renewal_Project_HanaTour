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