<?php

class Conexion{
  
  private static $instance = null;

  public static function createInstance(){
    if(!isset(self::$instance)){
      $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      self::$instance = new PDO('mysql:host=localhost;dbname=empleados', 'root', '', $opcionesPDO);
    }
    return self::$instance;
  }

}


?>