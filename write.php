<?php
require_once('inc/db.php');

session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>이벤트 글쓰기</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
  <h2>이벤트 글쓰기</h2>
  <form action="write_process.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="title" class="form-label">제목</label>
      <input type="text" class="form-control" id="title" name="title" required maxlength="200">
    </div>
    <div class="mb-3">
      <label for="img_file" class="form-label">대표 이미지</label>
      <input type="file" class="form-control" id="img_file" name="img_file" accept="image/*">
    </div>
    <div class="mb-3 row">
      <div class="col">
        <label for="period_start" class="form-label">시작일</label>
        <input type="date" class="form-control" id="period_start" name="period_start" required>
      </div>
      <div class="col">
        <label for="period_end" class="form-label">종료일</label>
        <input type="date" class="form-control" id="period_end" name="period_end" required>
      </div>
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">내용</label>
      <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">등록</button>
    <a href="admin.php" class="btn btn-secondary">취소</a>
  </form>
</div>
</body>
</html>