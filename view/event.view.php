<?php
require_once('inc/db.php');
$order = ($_GET['sort'] ?? 'desc') === 'asc' ? 'ASC' : 'DESC';
$sql = "SELECT * FROM event_board ORDER BY idx $order";
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
  <img src="image/event_mainbanner.png" alt="">
</section>

<section class="event event-container">
  
  <h1 class="h1 contents-title">
    하나투어 이벤트/혜택 </h1>
  <div class="tab">
    <button class="tab_btns btn " data-sort="desc">최신순</button>
    <button class="tab_btns btn " data-sort="asc">오래된순</button>
  </div>
  <ul class="event_lists">
  <?php if (count($events) > 0): ?>
    <?php foreach($events as $event): ?>
      <li class="event_list">
        <img src="<?= htmlspecialchars($event['img_url']) ?>" alt="<?= htmlspecialchars($event['title']) ?>">
        <div class="event_desc">
          <p class="h5 event_title"><?= htmlspecialchars($event['title']) ?></p>
          <p class="event_duration">
            <?= htmlspecialchars($event['period_start']) ?> ~ <?= htmlspecialchars($event['period_end']) ?>
          </p>
        </div>
      </li>
    <?php endforeach; ?>
  <?php else: ?>
    <li class="event_list text-center py-4 w-100">진행 중인 이벤트가 없습니다.</li>
  <?php endif; ?>
  </ul>
  <!-- 부트스트랩 페이지네이션 -->
  <nav aria-label="이벤트 페이지네이션" class="mt-4 d-flex justify-content-center">
    <ul class="pagination">
      
    </ul>
  </nav>

</section>