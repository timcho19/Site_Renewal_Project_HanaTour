<?php
  require('inc/functions.php');

  $mainCss = '<link rel="stylesheet" href="css/main.css">';
  $eventCss = '<link rel="stylesheet" href="css/event.css">';
  $eventScript = '<script src="js/event.js"></script>';


  sub_view('event', '하나투어 이벤트.혜택', $mainCss, $eventCss, '', $eventScript, '', '');
?>