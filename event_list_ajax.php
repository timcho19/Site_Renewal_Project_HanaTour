<?php
require_once('inc/db.php');
$filter = $_GET['filter'] ?? 'all';
$page = max(1, intval($_GET['page'] ?? 1));
$per_page = 6;
$offset = ($page - 1) * $per_page;
$today = date('Y-m-d');

$where = '';
if ($filter === 'ongoing') {
    $where = "WHERE period_start <= '$today' AND period_end >= '$today'";
} else if ($filter === 'ended') {
    $where = "WHERE period_end < '$today'";
}

// 전체 개수
$count_sql = "SELECT COUNT(*) FROM event_board1 " . ($where ? $where : '');
$count_result = $conn1->query($count_sql);
$total_count = $count_result ? $count_result->fetch_row()[0] : 0;
$total_pages = ceil($total_count / $per_page);

// 리스트
$sql = "SELECT * FROM event_board1 " . ($where ? $where : '') . " ORDER BY idx DESC LIMIT $per_page OFFSET $offset";
$result = $conn1->query($sql);

$list_html = '';
if ($result && $result->num_rows > 0) {
  while($event = $result->fetch_assoc()) {
    $list_html .= '<li class="event_list">';
    $list_html .= '<img src="'.htmlspecialchars($event['img_url']).'" alt="'.htmlspecialchars($event['title']).'">';
    $list_html .= '<div class="event_desc">';
    $list_html .= '<p class="h5 event_title">'.htmlspecialchars($event['title']).'</p>';
    $list_html .= '<p class="event_duration">기간: '.htmlspecialchars($event['period_start']).' ~ '.htmlspecialchars($event['period_end']).'</p>';
    $list_html .= '<p class="event_message">내용: '.mb_strimwidth($event['content'], 0, 40, '...', 'UTF-8').'</p>';
    $list_html .= '</div></li>';
  }
} else {
  $list_html = '해당하는 이벤트가 없습니다.';
}

// 페이지네이션 HTML
$pagination_html = '';
for ($i=1; $i <= $total_pages; $i++) {
  $active = ($i == $page) ? 'active' : '';
  $pagination_html .= '<li class="page-item '.$active.'"><a class="page-link" href="#" data-page="'.$i.'">'.$i.'</a></li>';
}

// JSON으로 반환
header('Content-Type: application/json');
echo json_encode([
  'list_html' => $list_html,
  'pagination_html' => $pagination_html
]);
$conn1->close();
?>