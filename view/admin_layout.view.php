<?php
require_once('inc/db.php');

// 게시글 전체 조회
$sql = "SELECT * FROM event_board ORDER BY idx DESC";
$result = $conn1->query($sql);

$posts = [];
if ($result && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $posts[] = $row;
  }
}
$conn1->close();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이벤트 게시판</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <div class="container">
    <header class="mb-4">
      <h1 class="my-4">이벤트 게시판</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded mb-4">
      <div class="container-fluid">
      <a class="navbar-brand" href="admin.php">홈</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- 네비게이션 메뉴 -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary" href="write.php">
              <i class="bi bi-pencil-square"></i> 글 등록
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-secondary" href="login.php">
              <i class="bi bi-person"></i> 로그인
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    </header>
    <main>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php if (count($posts) > 0): ?>
          <?php foreach($posts as $row): ?>
            <div class="col">
              <div class="card h-100 shadow-sm">
                <?php if (!empty($row['img_url'])): ?>
                  <img src="<?= htmlspecialchars($row['img_url']) ?>" class="card-img-top" alt="이벤트 이미지" style="object-fit:cover; height:220px;">
                <?php endif; ?>
                <div class="card-body">
                  <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>
                  <div class="mb-2 text-secondary small">
                    <i class="bi bi-calendar-event"></i>
                    <?= htmlspecialchars($row['period_start']) ?> ~ <?= htmlspecialchars($row['period_end']) ?>
                  </div>
                  <div class="card-text" style="min-height:60px;">
                    <?= nl2br(htmlspecialchars($row['content'])) ?>
                  </div>
                </div>
                <div class="card-footer bg-white border-0 text-end">
                  <small class="text-muted">
                    <i class="bi bi-clock"></i>
                    <?= htmlspecialchars($row['created_time']) ?>
                  </small>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <div class="col">
            <div class="alert alert-info text-center">등록된 이벤트가 없습니다.</div>
          </div>
        <?php endif; ?>
      </div>
    </main>
    <footer class="mt-5 text-center text-secondary small">
      <hr>
      본 페이지는 관리자용 페이지 입니다.
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>