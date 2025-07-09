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
?>