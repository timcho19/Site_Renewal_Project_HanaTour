<?php
session_start();
require_once('inc/db.php');

// 로그인 체크: 비로그인 시 접근 차단
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}

// 삭제할 게시글 번호 받기
$idx = $_GET['idx'] ?? '';

if ($idx) {
    // 이미지 파일도 함께 삭제하려면 아래 주석 해제
   
    $stmt = $conn1->prepare("SELECT img_url FROM event_board WHERE idx=?");
    $stmt->bind_param("i", $idx);
    $stmt->execute();
    $stmt->bind_result($img_url);
    if ($stmt->fetch() && $img_url && file_exists($img_url)) {
        unlink($img_url);
    }
    $stmt->close();
    

    // DB에서 게시글 삭제
    $stmt = $conn1->prepare("DELETE FROM event_board WHERE idx=?");
    $stmt->bind_param("i", $idx);
    $stmt->execute();
    $stmt->close();
}

$conn1->close();
header('Location: admin.php');
exit;
?>
