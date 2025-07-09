<?php
  require('inc/functions.php');

  $mainCss = '<link rel="stylesheet" href="css/main.css">';
  $faqCss = '<link rel="stylesheet" href="css/faq.css">';
  $faqScript = '<script src="js/faq.js"></script>';
  $bootstrap = '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>';

  sub_view('faq', '하나투어 FAQ', $mainCss ,$faqCss, '', $faqScript, $bootstrap, '');
?>