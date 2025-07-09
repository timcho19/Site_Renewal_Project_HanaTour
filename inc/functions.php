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

  
  //회원가입
  function registerMember($userid, $username, $phone, $passwd) {
    global $conn1;

    $sql = "INSERT INTO members (userid, username, phone, passwd, regdate)
            VALUES (?, ?, ?, ?, ?, NOW())";

    $stmt = $conn1->prepare($sql);
    $hashed = password_hash($passwd, PASSWORD_DEFAULT);
    $stmt->bind_param("sssss", $userid, $username, $phone, $hashed);

    return $stmt->execute();
}
?>