$('.sidebar_menu').on('click', function() {
   $('.side_bar').stop().toggleClass('hide-menu');
});

$('.top_btn').on('click', function() {
  $('html, body').animate({ scrollTop: 0 }, 200);

});



//헤더 드롭다운
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

// 바깥 클릭시 닫기 (선택)
$(document).on('click', function(e) {
  if ($('.all_menu_dropdown').hasClass('active')) {
    if (!$(e.target).closest('.all_menu_dropdown, .all_menu_btn').length) {
      $('.all_menu_dropdown').removeClass('active');
    }
  }
});