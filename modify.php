<?php
session_start();
require_once('inc/db.php');
$idx = $_GET['idx'] ?? '';
if (!$idx) { echo "잘못된 접근입니다."; exit; }

$stmt = $conn1->prepare("SELECT * FROM event_board1 WHERE idx=?");
$stmt->bind_param("i", $idx);
$stmt->execute();
$result = $stmt->get_result();
if ($row = $result->fetch_assoc()) {
    $title = $row['title'];
    $img_url = $row['img_url'];
    $period_start = $row['period_start'];
    $period_end = $row['period_end'];
    $content = $row['content'];
} else {
    echo "게시글을 찾을 수 없습니다."; exit;
}
$stmt->close();
$conn1->close();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>이벤트 수정</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
  <h2>이벤트 수정</h2>
  <form action="modify_process.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idx" value="<?= htmlspecialchars($idx) ?>">
    <div class="mb-3">
      <label for="title" class="form-label">제목</label>
      <input type="text" class="form-control" id="title" name="title" required maxlength="200" value="<?= htmlspecialchars($title) ?>">
    </div>
    <div class="mb-3">
      <label for="img_file" class="form-label">대표 이미지 (변경하지 않으면 비워두세요)</label>
      <input type="file" class="form-control" id="img_file" name="img_file" accept="image/*">
      <?php if ($img_url): ?>
        <div class="mt-2"><img src="<?= htmlspecialchars($img_url) ?>" style="max-width:150px;"></div>
      <?php endif; ?>
    </div>
    <div class="mb-3 row">
      <div class="col">
        <label for="period_start" class="form-label">시작일</label>
        <input type="date" class="form-control" id="period_start" name="period_start" required value="<?= htmlspecialchars($period_start) ?>">
      </div>
      <div class="col">
        <label for="period_end" class="form-label">종료일</label>
        <input type="date" class="form-control" id="period_end" name="period_end" required value="<?= htmlspecialchars($period_end) ?>">
      </div>
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">내용</label>
      <textarea class="form-control" id="content" name="content" rows="6" required><?= htmlspecialchars($content) ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">수정</button>
    <a href="admin.php" class="btn btn-secondary">취소</a>
  </form>
</div>
</body>
</html>