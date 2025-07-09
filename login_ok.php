<?php
  require('inc/db.php');
    
    // 이메일 중복 확인
    $check_stmt = $conn->prepare("SELECT * FROM members WHERE email = ?");
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    
    if ($check_result->num_rows > 0) {
        // 이메일 중복
        $check_stmt->close();
        $conn->close();
        return false;
    }
    $check_stmt->close();
    
    // 비밀번호 해시화
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // 회원 정보 삽입
    $stmt = $conn->prepare("INSERT INTO users (email, username, passwd, phone) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $name, $hashed_password, $phone);
    
    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        error_log("Register error: " . $stmt->error);
        $stmt->close();
        $conn->close();
        return false;
    }

// POST 요청 처리
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userid = $_POST['email'] ?? '';      // name 속성에 맞게 수정
    $username = $_POST['name'] ?? '';     // name 속성에 맞게 수정
    $passwd = $_POST['passwd'] ?? '';     // name 속성에 맞게 수정
    $phone = $_POST['phone'] ?? '';       // name 속성에 맞게 수정

    if ($userid && $username && $passwd && $phone) {
        $result = registerMember($userid, $username, $passwd, $phone);
        if ($result) {
            echo "<script>alert('회원가입 성공!'); location.href='/login.view.php';</script>";
        } else {
            echo "<script>alert('회원가입 실패 (이메일 중복 또는 오류)'); history.back();</script>";
        }
    } else {
        echo "<script>alert('모든 항목을 입력해주세요.'); history.back();</script>";
    }
}
?>