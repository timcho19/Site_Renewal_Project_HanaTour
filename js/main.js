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