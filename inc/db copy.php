<?php

 // 데이터베이스 접속 정보
 $host = 'localhost';      // DB 서버 주소
 $user = 'dkfkd';        // DB 사용자명
 $pass = 'Ar93134895!!';    // DB 비밀번호
 $dbname = 'dkfkd'; // 사용할 데이터베이스명

 // MySQLi 객체 생성 및 연결
 $conn1 = new mysqli($host, $user, $pass, $dbname);

 // 연결 오류 체크
 if ($conn1->connect_error) {
     die("DB 연결 실패: " . $conn->connect_error);
 }

 // 한글 깨짐 방지 (UTF-8 설정)
 $conn1->set_charset("utf8mb4");

?>