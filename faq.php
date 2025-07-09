<?php
  require('inc/functions.php');

  $faqCss = '<link rel="stylesheet" href="css/faq.css">';
  $faqScript = '<script src="js/faq.js"></script>';


  sub_view('faq', '하나투어 FAQ', $faqCss, '', '', $faqScript, '', '');
?>