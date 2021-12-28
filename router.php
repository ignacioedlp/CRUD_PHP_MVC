<?php

  include_once("./controllers/controller_".$controller.".php");

  $objController="Controller".ucfirst($controller);
  $controlador = new $objController();
  $controlador->$action();


?>