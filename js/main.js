let slideWrapper = $('.story_wrapper'),
    slides = slideWrapper.find('.stories'),
    slide = slides.find('.story'),
    currentIdx = 0,
    slideCount = slide.length,
    slideWidth = 800,
    slideMargin = 100,
    moveAmt = slideWidth + slideMargin,
    halfAmt = slideWidth / 1.5;
    prevBtn = slideWrapper.siblings('.controls').find('.prev_btn'),
    nextBtn = slideWrapper.siblings('.controls').find('.next_btn');



  slides.prepend(slide.clone());
  slide.clone().appendTo(slides);

  let allSlide = slides.find('.story');
  let totalCount = allSlide.length;

  allSlide.each(function (idx) {
      $(this).css({ left: idx * moveAmt + halfAmt + 'px' });
    //console.log(allSlide);
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

//베너 슬라이드

$(document).ready(function () {
  let currentSlide = 0;
  const $slider = $('.bannerslider-wrapper');
  const $slides = $slider.find('.travel-banner');
  const totalSlides = $slides.length;
  const $bannerSlider = $('.bannerSlider');
  const $indicator = $('#slideIndicator');
  const $dots = $('.dot');
  let autoplay;

  function updateSlider() {
    const translateX = -currentSlide * 100;
    $slider.css('transform', `translateX(${translateX}%)`);
    $indicator.text(`${currentSlide + 1}/${totalSlides}`);
    $dots.removeClass('active').eq(currentSlide).addClass('active');
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateSlider();
  }

  function previousSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateSlider();
  }

  function goToSlide(slideIndex) {
    currentSlide = slideIndex;
    updateSlider();
  }

  function startAutoplay() {
    autoplay = setInterval(nextSlide, 5000);
  }

  function stopAutoplay() {
    clearInterval(autoplay);
  }

  startAutoplay();

  $bannerSlider
    .on('mouseenter', function () {
      stopAutoplay();
    })
    .on('mouseleave', function () {
      startAutoplay();
    });

  $dots.each(function (index) {
    $(this).on('click', function () {
      goToSlide(index);
    });
  });


  $('.nav-next').on('click', nextSlide);
  $('.nav-prev').on('click', previousSlide);
});



//메인섹션 슬ㄹ이드
const mslides = $('.mslides-container .mslide');
let current = 0;
const mslideCount = mslides.length;
const interval = 5000; // 5초

// 페이지네이션  생성
const $pagination = $('.main_paginations ul');
for (let i = 0; i < mslideCount; i++) {
  $pagination.append('<li></li>');
}
const $dots = $pagination.find('li');
$dots.eq(0).addClass('active');

function showSlide(idx) {
  mslides.removeClass('active').eq(idx).addClass('active');
  $dots.removeClass('active').eq(idx).addClass('active');
}

function nextSlide() {
  current = (current + 1) % mslideCount;
  showSlide(current);
}

let timer = setInterval(nextSlide, interval);

// 페이지네이션 클릭 시 해당 슬라이드로 이동
$dots.on('click', function() {
  current = $(this).index();
  showSlide(current);
  clearInterval(timer);
  timer = setInterval(nextSlide, interval);
});



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
    travelCards = $('.special-travel .concept-cards');
    
    
    tabBtns.click(function(){
    tabBtns.removeClass('active');
    $(this).addClass('active');

    let dataFilter = $(this).attr('data-filter');
    console.log(dataFilter)

    travelCards.hide();

    $('.special-travel .concept-cards' + dataFilter).show();
  });


/* 날씨/무한슬라이드 변수 */

  let $weatherSlider = $('.weather-cards');
  let $weatherCards;
  let weatherCardCount;

/* 날씨/무한슬라이드 */

const cities = ['japan', 'japan', 'japan', 'thailand', 'shanghai', 'singapore', 'paris', 'australia', 'australia', 'japan'];
let loadedCount = 0;

const getWeather = (cityName) => {
  return fetch(`https://api.openweathermap.org/data/2.5/forecast?q=${cityName}&appid=b799259d92c437e1d782b0cc2d7e2238&units=metric&lang=kr`)
    .then(res => res.json())
    .then(data => {
      const list = data.list;
      const today = new Date().toISOString().split('T')[0];
      const todayData = list.filter(item => item.dt_txt.startsWith(today));
      const maxTemp = Math.max(...todayData.map(item => item.main.temp_max)).toFixed(1);
      const minTemp = Math.min(...todayData.map(item => item.main.temp_min)).toFixed(1);

      const weatherFrequency = {};
      todayData.forEach(item => {
        const desc = item.weather[0].description;
        weatherFrequency[desc] = (weatherFrequency[desc] || 0) + 1;
      });
      const mainWeather = Object.entries(weatherFrequency).sort((a, b) => b[1] - a[1])[0][0];
      const icon = todayData[0].weather[0].icon;

      const result = {
        city: data.city.name,
        date: today,
        maxTemp,
        minTemp,
        mainWeather,
        icon
      };

      const $weatherInfo = $(`
        <div class="card">
          <div class="card-body">
            <img src="/image/${result.city}.png" alt="">
            <p class="weather-title">${result.city}의 날씨를 확인해보세요!</p>
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
    
      $('.weather-cards').append($weatherInfo);
      loadedCount++;

      // 모든 도시의 데이터가 로드되었을 때만 애니메이션 시작
      if (loadedCount === cities.length) {    

        //console.log('애니메이션 시작');
        initWeatherSlider(); // 슬라이더 설정 + 애니메이션 시작
      }
    });
};

// 날씨 데이터 로드
cities.forEach(city => getWeather(city));


// 슬라이더 및 애니메이션 초기

  //console.log(weatherCardCount);
  var weatherCardWidth = 312;
  var weatherGap = 16;
  var weatherStep = weatherCardWidth + weatherGap;
  var weatherAnimationId;
  var weatherPos = 0;
  var weatherSpeed = 1.5;
  var weatherIsPlaying = true;

function initWeatherSlider() {

  $weatherCards = $weatherSlider.find('.card');
  weatherCardCount = $weatherCards.length;

  $weatherCards.clone().appendTo($weatherSlider);

  var weatherTotalCards = $weatherSlider.find('.card').length;
  var weatherTotalWidth = weatherTotalCards * weatherStep;
  $weatherSlider.css('width', weatherTotalWidth + 'px');


}

  function weatherAnimate() {
    if (!weatherIsPlaying) return;
    weatherPos -= weatherSpeed;
    //console.log(weatherPos);

    if (Math.abs(weatherPos) >= weatherCardCount * weatherStep) {
      weatherPos = 0;
    }
    $weatherSlider.css('transform', 'translateX(' + weatherPos + 'px)');
    weatherAnimationId = requestAnimationFrame(weatherAnimate);
  }

  weatherAnimate();

/* - - - - 날씨 - - - - 

let result;

const getWeather = (cityName) => {
  fetch(`https://api.openweathermap.org/data/2.5/forecast?q=${cityName}&appid=b799259d92c437e1d782b0cc2d7e2238&units=metric&lang=kr`)
    .then(res => res.json())
    .then(data => {
      const list = data.list;

      const today = new Date().toISOString().split('T')[0];
      const todayData = list.filter(item => item.dt_txt.startsWith(today));

      const maxTemp = Math.max(...todayData.map(item => item.main.temp_max)).toFixed(1);
      const minTemp = Math.min(...todayData.map(item => item.main.temp_min)).toFixed(1);

      const weatherFrequency = {};
      todayData.forEach(item => {
        const desc = item.weather[0].description;
        weatherFrequency[desc] = (weatherFrequency[desc] || 0) + 1;
      });

      const mainWeather = Object.entries(weatherFrequency).sort((a, b) => b[1] - a[1])[0][0];
      const icon = todayData[0].weather[0].icon;

      result = {
        city: data.city.name,
        date: today,
        maxTemp,
        minTemp,
        mainWeather,
        icon
      };

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

      $('.weather-cards').append($weatherInfo);
    });
};

getWeather('japan');
getWeather('japan');
getWeather('japan');
getWeather('thailand');
getWeather('shanghai');
getWeather('singapore');
getWeather('paris');
getWeather('australia');
getWeather('australia');
getWeather('japan');
*/




/* slide
    
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
 */



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
  spaceBetween: 24,
  grabCursor: true,
  simulateTouch: true,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  breakpoints: {
    0: {
      slidesPerView: 1.5,
      spaceBetween: 12,
    },
    576: {
      slidesPerView: 1.5,
      spaceBetween: 16,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    960: {
      slidesPerView: 3,
      spaceBetween: 24,
    },
    1140: {
      slidesPerView: 4,
      spaceBetween: 24,
    }
  }
});



/* - - - - - - - tab filter json - - - - - - - */

const productList = $('.concept-cards');


fetch('json/data.json')
.then(res => res.json()) //json형태를 객체 변환!
.then(data => {
  //console.log(data);
  renderList(data);
});

function renderList(item){


  let itemHTML = '';
  item.forEach(i=>{
    let description = '';
    i.description.forEach(d=>(
      description += `<li>${d}</li>`
    ));

    let hashtag = '';
    i.hashtag.forEach(h=>(
      hashtag += `<a href="">${h}</a>`
    ));


    itemHTML += `
            <div class="travel-card slider-item">
              <div class="product_img">
              <img src="${i.img}" alt="보홀" />
              <button class="likes">
                <svg class="line-heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/>
                </svg>
                <svg class="fill-heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                </svg>
              </button>
              </div>
            <div class="card-content">
              <a href="">
                <p class="h5">${i.title}</p>
                <ul>
                  ${description}
                </ul>
                <div class="card-tags">
                  ${hashtag}
                </div>
              </a>
            </div>
          </div>
    `;
  });
    productList.html(itemHTML);
  };

fetch('json/data.json')
  .then(res => res.json())
  .then(data => {
    renderList(data);           // 카드 생성 먼저
    slideshow('.slider-wrapper'); // 그 후 슬라이드 초기화
  });


$('.tab').click(function(){
  const filterval = $(this).data('filter');

  //data에서 category의 값과 클릭한 그 요소(this)의 값이 같으면 rederList(data);를 실행한다.

});
