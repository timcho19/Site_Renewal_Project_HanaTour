<?php
  require('inc/functions.php');

  $mainCss = '<link rel="stylesheet" href="css/main.css">';
  $mainScript = '<script src="js/main.js"></script>';
  $slideScript = '<script type="module">
    import slideshow from "./js/slide.js"; 
    import bannerslideshow from "./js/banner.js"; 
    slideshow(".slideshow3");
    bannerslideshow(".banner_slideshow1");
    bannerslideshow(".banner_slideshow2");
  </script>';


  view('index', '하나투어', $mainCss, '', '', $mainScript, $slideScript, '');
?>
