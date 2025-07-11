<?php
  session_start();
  require('inc/db.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userid = trim($_POST['login_id']);
    $password = $_POST['login_pw'];

    $stmt = $conn1->prepare("SELECT * FROM members WHERE userid = ?");
    $stmt->bind_param("s", $userid);
    $stmt->execute();
    $result = $stmt->get_result();

    
    if($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['passwd'])) {
            $_SESSION['user_id'] = $user['userid'];
            $userName = $user['username'];
            echo "<script>alert('{$userName}님! 반갑습니다 ^o^!'); location.href='index.php';</script>";
        } else {
            echo "<script>alert('비밀번호가 일치하지 않습니다.'); history.back();</script>";
        }
    }else{
        echo "<script>alert('등록되지 않은 이메일입니다. 아이디를 확인해주세요.'); history.back();</script>";
    }

    $stmt->close();
    $conn1->close();
}

?>