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
   
  $(window).on('resize', function() {
    if (window.innerWidth <= 960) {
      
    }
  
    
  });


  
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
    //console.log('prev');
  });
  
  $('.slider-wrapper .contents_next_btn').click(function(){
    contentSlide(1);
  });
  }




  
  
  export default
    slideshow
 ;