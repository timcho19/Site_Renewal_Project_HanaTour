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


/* - - - - - - best 여행지 무한 슬라이드 - - - - - */
let monthlyTravel = $('.monthly-travel'),
    monthlySlides = monthlyTravel.find('.weather-cards'),
    monthlyCards = monthlySlides.find('.card')

    
