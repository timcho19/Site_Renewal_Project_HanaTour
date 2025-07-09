<?php
  require('inc/functions.php');

  $loginCss = '<link rel="stylesheet" href="css/login.css">';
  $loginScript = '<script src="js/login.js"></script>';


  sub_view('login', '하나투어 로그인', $loginCss, '', '', $loginScript, '', '');
?>