/*    취향저격  컨셉따라 여행 슬라이드드     */

const slideshow = function (target,gap=24) {

    const $wrapper = $(target);
    const $track = $wrapper.find('.slider-container');
    const $content = $wrapper.find('.slider-content');
    const $cards = $track.find('.slider-content .slider-item');
    const visibleCards = 4; 
    const cardgap= gap;
    const cardWH = $cards.eq(0).outerWidth() + cardgap; 
    const totalOriginal = $cards.length;
    let currentIndex = 0;
    let isAnimating = false;
     
    
    const $prependClones = $cards.clone().addClass('clone');
    const $appendClones = $cards.clone().addClass('clone');
    
    $content.prepend($prependClones);
    $content.append($appendClones);

    
    const totalCards = $content.find('.slider-item').length;
    
    
    $content.css({
      width: cardWH * totalCards +'px',
      transform: `translateX(-${cardWH * visibleCards}px)`,
    });
    
    
    function contentSlide(dir) {
      if (isAnimating) return;
      isAnimating = true;
      currentIndex += dir;
        console.log('currentIndex:', currentIndex);
      $content.animate({
        left: -cardWH * currentIndex + 'px'
      }, 300);
 
    
      setTimeout(() => {
        if (currentIndex === visibleCards || currentIndex === -visibleCards) {
          currentIndex = 0;
          $content.css({
            left: -cardWH * currentIndex + 'px'
          });
        }
        
        isAnimating = false;
      }, 300);
    }
    
    
    $('.slider-wrapper .contents_prev_btn').click(function(){
      contentSlide(-1);
      console.log('prev');
    });
    
    $('.slider-wrapper .contents_next_btn').click(function(){
      contentSlide(1);
    });
    }
    export default slideshow;