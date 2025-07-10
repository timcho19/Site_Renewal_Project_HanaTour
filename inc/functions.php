<?php
  function view($name,$model, $css1 = null, $css2= null, $css3= null, $script1= null, $script2= null, $script3= null){

    require("view/layout.view.php");
  }

  function sub_view($name,$model, $css1 = null, $css2= null, $css3= null, $script1= null, $script2= null, $script3= null){

    require("view/sublayout.view.php");
  }

  function view2($name,$model){

    require("view/admin_layout.view.php");
  }


  function registerMember($userid, $username, $passwd, $phone) {
    global $conn1;

    $sql = "INSERT INTO members (userid, username, passwd, phone, regdate)
            VALUES (?, ?, ?, ?, NOW())";

    $stmt = $conn1->prepare($sql);
    if (!$stmt) {
        // prepare 실패 시 에러 출력
        die('Prepare failed: ' . $conn1->error);
    }
    $hashed = password_hash($passwd, PASSWORD_DEFAULT);
    $stmt->bind_param("ssss", $userid, $username, $hashed, $phone);

    return $stmt->execute();
}



?>