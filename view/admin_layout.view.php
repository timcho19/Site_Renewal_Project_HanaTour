<?php
session_start(); // 세션 시작
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
  <title>관리자 게시판</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <div class="container">
    <header class="mb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light  mb-4">
          <div class="container-fluid">
            <a class="navbar-brand" href="admin.php">하나투어 이벤트/혜택 관리페이지</a>
            <div class=" " id="navbarNav">
              <ul class="">
                <?php if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true): ?>
                  <li class="nav-item me-2">
                    <a class="btn btn-outline-primary" href="write.php">
                      <i class="bi bi-pencil-square"></i> 글 등록
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-outline-danger" href="admin_logout.php">
                      <i class="bi bi-box-arrow-right"></i> 로그아웃
                    </a>
                  </li>
                <?php else: ?>
                  <li class="nav-item">
                    <a class="btn btn-outline-secondary" href="admin_login.php">
                      <i class="bi bi-person"></i> 로그인
                    </a>
                  </li>
                <?php endif; ?>
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
                  <h5 class="card-title h2">제목: <?= htmlspecialchars($row['title']) ?></h5>
                  <div class="mb-2 text-secondary small">
                  진행기간:
                    <?= htmlspecialchars($row['period_start']) ?> ~ <?= htmlspecialchars($row['period_end']) ?>
                  </div>
                  <div class="card-text" style="min-height:60px;">
                    <?= nl2br(htmlspecialchars($row['content'])) ?>
                  </div>
                </div>
                <div class="card-footer bg-white border-0 text-end">
                  <small class="text-muted">
                    등록일:
                    <?= htmlspecialchars($row['created_time']) ?>
                  </small>
                  <?php if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true): ?>
                    <div class="mt-2">
                      <a href="modify.php?idx=<?= $row['idx'] ?>" class="btn btn-sm btn-outline-primary me-1">
                        <i class="bi bi-pencil"></i> 수정
                      </a>
                      <a href="delete.php?idx=<?= $row['idx'] ?>"
                        class="btn btn-sm btn-outline-danger"
                        onclick="return confirm('정말 삭제하시겠습니까?');">
                        <i class="bi bi-trash"></i> 삭제
                      </a>
                    </div>
                  <?php endif; ?>
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