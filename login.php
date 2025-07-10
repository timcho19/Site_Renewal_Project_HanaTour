<?php
  require('inc/db.php');
  require('inc/functions.php');

  $mainCss = '<link rel="stylesheet" href="css/main.css">';
  $loginCss = '<link rel="stylesheet" href="css/login.css">';
  $loginScript = '<script src="js/login.js"></script>';
  $bootstrap = '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>';
  
  sub_view('login', '하나투어 로그인', $mainCss, $loginCss, '', $loginScript, $bootstrap, '');
  

?>