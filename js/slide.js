/*    취향저격  컨셉따라 여행 슬라이드     */

const slideshow = function (target) {
  const $wrapper = $(target);
  const $track = $wrapper.find('.slider-container');
  const $content = $wrapper.find('.slider-content');

  const cardgap = 24;
  const cardWH = 312 + cardgap;
  let isAnimating = false;

  function updateSliderWidth() {
    const $cards = $content.find('.slider-item:visible');
    $content.css({
      width: cardWH * $cards.length + 'px',
      left: '0px'
    });
  }

  function contentSlide(dir) {
    if (isAnimating) return;
    isAnimating = true;

    const $cards = $content.find('.slider-item:visible');

    if (dir === 1) {
      $content.animate({ left: -cardWH + 'px' }, 300, function () {
        $content.append($cards.first());
        $content.css({ left: '0px' });
        isAnimating = false;
      });
    } else if (dir === -1) {
      $content.prepend($cards.last());
      $content.css({ left: -cardWH + 'px' });
      $content.animate({ left: '0px' }, 300, function () {
        isAnimating = false;
      });
    }
  }

  $wrapper.find('.contents_prev_btn').on('click', function () {
    contentSlide(-1);
    resetAutoSlide();
  });

  $wrapper.find('.contents_next_btn').on('click', function () {
    contentSlide(1);
    resetAutoSlide();
  });

  let autoTimer = setInterval(() => contentSlide(1), 5000);

  function resetAutoSlide() {
    clearInterval(autoTimer);
    autoTimer = setInterval(() => contentSlide(1), 5000);
  }

  // 슬라이드 터치/드래그 기능
  let startX = 0;
  let isDragging = false;
  const threshold = 50;

  $track.on('touchstart', function (e) {
    startX = e.originalEvent.touches[0].clientX;
    isDragging = true;
  });

  $track.on('touchend', function (e) {
    if (!isDragging) return;
    isDragging = false;
    const endX = e.originalEvent.changedTouches[0].clientX;
    const diff = endX - startX;

    if (Math.abs(diff) > threshold) {
      contentSlide(diff < 0 ? 1 : -1);
      resetAutoSlide();
    }
  });

  let mouseDownX = 0;
  let mouseDragging = false;

  $track.on('mousedown', function (e) {
    mouseDownX = e.clientX;
    mouseDragging = true;
  });

  $(document).on('mouseup', function (e) {
    if (!mouseDragging) return;
    mouseDragging = false;
    const mouseUpX = e.clientX;
    const diff = mouseUpX - mouseDownX;

    if (Math.abs(diff) > threshold) {
      contentSlide(diff < 0 ? 1 : -1);
      resetAutoSlide();
    }
  });

  // 초기 슬라이드 폭 계산
  updateSliderWidth();

  // 외부에서 resetSlider 호출 가능
  return {
    resetSlider: updateSliderWidth
  };
};

export default slideshow;
