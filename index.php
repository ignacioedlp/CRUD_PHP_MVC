<?php

  $controller = "Paginas";
  $action = "inicio";
  

  if(isset($_GET['controller']) && isset($_GET['action'])){
    if($_GET['controller'] != "" && $_GET['action'] != ""){
      $controller = $_GET['controller'];
      $action = $_GET['action'];
    }
  }

  require ('./views/template.php')

?>