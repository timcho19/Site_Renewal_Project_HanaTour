<?php
session_start();

// 이미 로그인된 경우 바로 admin.php로 이동
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: admin.php');
    exit;
}

// 로그인 처리
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin_id = 'admin'; // 고정 아이디
    $admin_pw = '1234'; // 고정 비밀번호(실제 운영시에는 암호화 및 환경변수 사용 권장)

    $input_id = $_POST['admin_id'] ?? '';
    $input_pw = $_POST['admin_pw'] ?? '';

    if ($input_id === $admin_id && $input_pw === $admin_pw) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin.php');
        exit;
    } else {
        $error = '아이디 또는 비밀번호가 올바르지 않습니다.';
    }
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>관리자 로그인</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
  <div class="card p-4 shadow" style="max-width:400px;width:100%;">
    <h3 class="mb-3 text-center">관리자 로그인</h3>
    <?php if ($error): ?>
      <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <form method="post">
      <div class="mb-3">
        <label for="admin_id" class="form-label">아이디</label>
        <input type="text" class="form-control" id="admin_id" name="admin_id" required>
      </div>
      <div class="mb-3">
        <label for="admin_pw" class="form-label">비밀번호</label>
        <input type="password" class="form-control" id="admin_pw" name="admin_pw" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">로그인</button>
    </form>
  </div>
</div>
</body>
</html>