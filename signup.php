<?php 
  session_start();
  require('inc/db.php');
  require('inc/functions.php');


  $mainCss = '<link rel="stylesheet" href="css/main.css">';
  $loginCss = '<link rel="stylesheet" href="css/login.css">';
  $loginScript = '<script src="js/login.js"></script>';
  $bootstrap = '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>';
  
  sub_view('signup', '하나투어 회원가입', $mainCss, $loginCss, '', $loginScript, $bootstrap, '');
  

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
