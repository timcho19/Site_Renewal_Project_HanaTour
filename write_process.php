<?php
require_once('inc/db.php');

// 입력값 받기
$title = $_POST['title'] ?? '';
$period_start = $_POST['period_start'] ?? '';
$period_end = $_POST['period_end'] ?? '';
$content = $_POST['content'] ?? '';
$img_url = '';

// 이미지 업로드 처리
if (isset($_FILES['img_file']) && $_FILES['img_file']['error'] == UPLOAD_ERR_OK) {
    $upload_dir = 'uploads/';
    if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
    $tmp_name = $_FILES['img_file']['tmp_name'];
    $basename = basename($_FILES['img_file']['name']);
    $ext = strtolower(pathinfo($basename, PATHINFO_EXTENSION));
    $filename = uniqid('img_', true) . '.' . $ext;
    $target = $upload_dir . $filename;
    if (move_uploaded_file($tmp_name, $target)) {
        $img_url = $target;
    }
}

// DB 저장
$stmt = $conn1->prepare("INSERT INTO event_board (title, img_url, period_start, period_end, content, created_time) VALUES (?, ?, ?, ?, ?, NOW())");
$stmt->bind_param("sssss", $title, $img_url, $period_start, $period_end, $content);

if ($stmt->execute()) {
    header("Location: admin.php");
    exit;
} else {
    echo "<script>alert('등록에 실패했습니다.');history.back();</script>";
}

$stmt->close();
$conn1->close();
?>