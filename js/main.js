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


/* - - - - - - shorts swiper - - - - - */

  var swiper = new Swiper(".swiper.shorts", {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 24,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });







/* - - - - - 날씨 API - - - - - -
let result;

const getWeather = (cityName) => {
  fetch(`https://api.openweathermap.org/data/2.5/forecast?q=${cityName}&appid=b799259d92c437e1d782b0cc2d7e2238&units=metric&lang=kr`)
    .then(res => res.json())
    .then(data => {
      const list = data.list;

      // 오늘 날짜 (현지 시간 기준으로 조정 필요할 수도 있음)
      const today = new Date().toISOString().split('T')[0];

      // 오늘 날짜에 해당하는 데이터만 필터링
      const todayData = list.filter(item => item.dt_txt.startsWith(today));

      // 최고 / 최저 기온 구하기
      const maxTemp = Math.max(...todayData.map(item => item.main.temp_max)).toFixed(1);
      const minTemp = Math.min(...todayData.map(item => item.main.temp_min)).toFixed(1);
      
      // 가장 많이 등장한 날씨 상태 선택 (예: 흐림, 맑음 등)
      const weatherFrequency = {};
      todayData.forEach(item => {
        const desc = item.weather[0].description;
        weatherFrequency[desc] = (weatherFrequency[desc] || 0) + 1;
      });
      const mainWeather = Object.entries(weatherFrequency).sort((a, b) => b[1] - a[1])[0][0];
      
      // 대표 아이콘 (첫 번째 시간대의 아이콘 사용)
      const icon = todayData[0].weather[0].icon;

      result = {
        city: data.city.name,
        date: today,
        maxTemp,
        minTemp,
        mainWeather,
        icon
      };
      console.log(result)

      const $weatherInfo = $(`
        <div class="card">
          <div class="card-body">
            <img src="/image/${result.city}.png" alt="">
            <p class="h5">${result.city}의 날씨를 확인해보세요!</p>
            <div class="weather-info">
                <img src="https://openweathermap.org/img/wn/${result.icon}.png" alt="${result.mainWeather}">
              <p class="weather">
                최고 <span class="hightemp">${result.maxTemp}</span>도 /
                최저 <span class="lowtemp">${result.minTemp}</span>도 기온으로
                오늘의 날씨는 ${result.mainWeather}!
              </p>
            </div>
          </div>
        </div>
      `);
      console.log($weatherInfo);
      
      $('.weather-cards').append($weatherInfo);


    });
};

getWeather('itary');
getWeather('japan');
getWeather('japan');
getWeather('thailand');
getWeather('shanghai');
getWeather('singapore');
getWeather('paris');
getWeather('australia');
getWeather('itary');
getWeather('itary');
*/