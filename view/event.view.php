<?php
  require_once('inc/db.php');
  $filter = $_GET['filter'] ?? 'all';
  $today = date('Y-m-d');
  $where = '';
  if ($filter === 'ongoing') {
      $where = "WHERE period_start <= '$today' AND period_end >= '$today'";
  } else if ($filter === 'ended') {
      $where = "WHERE period_end < '$today'";
  }
  $sql = "SELECT * FROM event_board1 " . ($where ? $where : '') . " ORDER BY idx DESC";
  $result = $conn1->query($sql);

  $events = [];
  if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $events[] = $row;
    }
  }
  $conn1->close();
?>


<section class="event_mainbanner">
  <picture>
    <source srcset="image/event_mainbanner_mob.png" media="(max-width: 568px)">
    <img src="image/event_mainbanner.png" alt="">
  </picture>
  
</section>



<section class="event event-container">
  <h1 class="h1 contents-title">하나투어 이벤트/혜택</h1>
  <div class="tab">
    <button type="button" class="tab_btns btn active" data-filter="all">전체보기</button>
    <button type="button" class="tab_btns btn" data-filter="ongoing">진행중</button>
    <button type="button" class="tab_btns btn" data-filter="ended">종료</button>
  </div>
  <ul class="event_lists">
    <!-- 여기에 AJAX로 리스트가 들어갑니다 -->
  </ul>
  <nav aria-label="이벤트 페이지네이션" class="mt-4 d-flex justify-content-center">
    <ul class="pagination"></ul>
  </nav>
</section>
 

</section>