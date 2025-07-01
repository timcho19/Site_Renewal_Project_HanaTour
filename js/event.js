$('.all_menu_btn').on('click', function(e) {
  e.preventDefault();
  $('.all_menu_dropdown').toggleClass('active');
  
});



// 페이지네이션

var $lists = $('.event_list');
var $pagination = $('.pagination');
var itemsPerPage = 6;
var totalItems = $lists.length;
var totalPages = Math.ceil(totalItems / itemsPerPage);

function showPage(page) {
  // 리스트 표시/숨김
  $lists.hide();
  $lists.slice((page-1)*itemsPerPage, page*itemsPerPage).show();

  // 페이지네이션 활성화
  $pagination.find('.page-item').removeClass('active');
  $pagination.find('.page-item.page-num').eq(page-1).addClass('active');

  // 이전/다음 버튼 활성화/비활성화
  $pagination.find('.prev').toggleClass('disabled', page === 1);
  $pagination.find('.next').toggleClass('disabled', page === totalPages);
}

function createPagination() {
  var html = '';
  html += '<li class="page-item prev disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>';
  for(var i=1; i<=totalPages; i++) {
    html += '<li class="page-item page-num'+(i===1?' active':'')+'"><a class="page-link" href="#">'+i+'</a></li>';
  }
  html += '<li class="page-item next'+(totalPages===1?' disabled':'')+'"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>';
  $pagination.html(html);
}

// 페이지네이션 클릭 이벤트
$pagination.on('click', '.page-item:not(.disabled)', function(e){
  e.preventDefault();
  var $li = $(this);
  var current = $pagination.find('.page-item.active').index();
  var idx = $li.index();
  if($li.hasClass('prev')) {
    if(current > 1) showPage(current);
  } else if($li.hasClass('next')) {
    if(current < totalPages) showPage(current+2);
  } else {
    showPage(idx);
  }
});

// 초기화
createPagination();
showPage(1);