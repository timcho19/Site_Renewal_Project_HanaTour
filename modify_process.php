<?php
session_start();
require_once('inc/db.php');
$idx = $_POST['idx'] ?? '';
$title = $_POST['title'] ?? '';
$period_start = $_POST['period_start'] ?? '';
$period_end = $_POST['period_end'] ?? '';
$content = $_POST['content'] ?? '';
$img_url = '';

// 기존 이미지 유지 또는 새 이미지 업로드
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
} else {
    // 이미지 변경 없으면 기존 이미지 유지
    $stmt = $conn1->prepare("SELECT img_url FROM event_board WHERE idx=?");
    $stmt->bind_param("i", $idx);
    $stmt->execute();
    $stmt->bind_result($img_url);
    $stmt->fetch();
    $stmt->close();
}

$stmt = $conn1->prepare("UPDATE event_board SET title=?, img_url=?, period_start=?, period_end=?, content=? WHERE idx=?");
$stmt->bind_param("sssssi", $title, $img_url, $period_start, $period_end, $content, $idx);
$stmt->execute();
$stmt->close();
$conn1->close();
header('Location: admin.php');
exit;
?>
