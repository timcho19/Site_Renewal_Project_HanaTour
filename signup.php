<?php 
  session_start();
  require('inc/db.php');
  require('inc/functions.php');


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /*
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    die();
    */

    $userid = $_POST['email'] ?? '';
    $username = $_POST['name'] ?? '';
    $passwd = $_POST['passwd'] ?? '';
    $phone = $_POST['phone'] ?? '';


    if ($userid && $username && $passwd && $phone) {
        $result = registerMember($userid, $username, $passwd, $phone);
        if ($result) {
            echo "<script>alert('회원가입 성공!'); location.href='index.php';</script>";
        } else {
            echo "<script>alert('회원가입 실패'); history.back();</script>";
        }
    } else {
        echo "<script>alert('모든 항목을 입력해주세요.'); history.back();</script>";
    }

    $stmt->close();
    $conn->close();
  }

?>