$('.all_menu_btn').on('click', function(e) {
  e.preventDefault();
  $('.all_menu_dropdown').toggleClass('active');
  
});



  document.querySelectorAll('.accordion-button').forEach(button => {
    button.addEventListener('click', function (e) {
      const target = document.querySelector(this.dataset.bsTarget);
      if (target.classList.contains('show')) {
        // 이미 열려 있으면 강제로 닫기
        const collapse = bootstrap.Collapse.getInstance(target);
        collapse.hide();
        e.preventDefault(); // 기본 Bootstrap 열기 방지
      }
    });
  });
