<?php
  require('inc/functions.php');

  $loginCss = '<link rel="stylesheet" href="css/login.css">';
  $guestCss = '<link rel="stylesheet" href="css/guest.css">';
  $loginScript = '<script src="js/login.js"></script>';
  $guestScript = '<script src="js/guest.js"></script>';


  sub_view('guest', '하나투어 비회원 조회', $loginCss, $guestCss, '', $loginScript, $guestScript, '');
?>