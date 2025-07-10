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

function loadEvents(filter, page) {
  $.ajax({
    url: 'event_list_ajax.php',
    type: 'GET',
    data: {filter: filter, page: page},
    success: function(res){
      $('.event_lists').html(res.list_html);   // 리스트
      $('.pagination').html(res.pagination_html); // 페이지네이션
    }
  });
}

// 필터 버튼 클릭
$('.tab_btns').on('click', function(){
  $('.tab_btns').removeClass('active');
  $(this).addClass('active');
  var filter = $(this).data('filter');
  loadEvents(filter, 1); // 1페이지부터
});

// 페이지네이션 클릭 (동적 생성이므로 이벤트 위임)
$('.pagination').on('click', 'a', function(e){
  e.preventDefault();
  var page = $(this).data('page');
  var filter = $('.tab_btns.active').data('filter');
  loadEvents(filter, page);
});

// 첫 로딩
loadEvents('all', 1);

