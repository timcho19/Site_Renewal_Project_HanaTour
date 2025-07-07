const bannerslideshow = function(target) {
    let currentSlide = 0;
    const $container = $(target); 
    const $slider = $container.find('.bannerslider-wrapper');
    const $slides = $slider.find('.travel-banner');
    const totalSlides = $slides.length;
  
    const $indicator = $container.find('#slideIndicator');
    // const $dotsContainer = $container.find('#dotsIndicator');
    let autoplay;
  

    // $dotsContainer.empty();
    // for (let i = 0; i < totalSlides; i++) {
    //   const $dot = $('<span class="dot"></span>');
    //   if (i === 0) $dot.addClass('active');
    //   $dotsContainer.append($dot);
    // }
  
    // const $dots = $dotsContainer.find('.dot'); 
  
    function updateSlider() {
      const translateX = -currentSlide * 100;
      $slider.css('transform', `translateX(${translateX}%)`);
      $indicator.text(`${currentSlide + 1}/${totalSlides}`);
      // $dots.removeClass('active').eq(currentSlide).addClass('active');
    }
  
    function nextSlide() {
      currentSlide = (currentSlide + 1) % totalSlides;
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
  
    $container
      .on('mouseenter', stopAutoplay)
      .on('mouseleave', startAutoplay);
  
    $dots.each(function(index) {
      $(this).on('click', function() {
        goToSlide(index);
      });
    });
  };
  
  export default bannerslideshow;
  