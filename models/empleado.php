<?php

  class Empleado{


    public $id;
    public $nombre;
    public $correo;
    public function __construct($id, $nombre, $correo){
      $this->id = $id;
      $this->nombre = $nombre;
      $this->correo = $correo;
    }

    public static function consultar(){
      $listaEmpleados=[];
      $db = Conexion::createInstance();
      $sql = $db->query("SELECT * FROM empleados");
      foreach($sql->fetchAll() as $empleado){
        $listaEmpleados[] = new Empleado($empleado['id'], $empleado['nombre'], $empleado['correo']);
      }

      return $listaEmpleados;
    }


    public static function crear($nombre, $correo){
       $conexion = Conexion::createInstance();

      $sql = $conexion->prepare("INSERT INTO empleados (nombre, correo, create_time, update_time) VALUES (?, ?, now(), now())");
      $sql->execute(array($nombre,$correo));

    }

    public static function editar($id, $nombre, $correo){
      $conexion = Conexion::createInstance();


      $sql = $conexion->prepare("UPDATE empleados SET nombre = ?, correo = ?, update_time = now() WHERE id = ?");
      $sql->execute(array($nombre,$correo,$id));

    }


    public static function buscar($id){
      $conexion = Conexion::createInstance();

      $sql = $conexion->prepare("SELECT * FROM empleados WHERE id = ?");
      $sql->execute(array($id));
      $empleado = $sql->fetch();

      return new Empleado($empleado['id'], $empleado['nombre'], $empleado['correo']);
    }







    public static function borrar($id){
      $conexion = Conexion::createInstance();

      $sql = $conexion->prepare("DELETE FROM empleados WHERE id = ?");
      $sql->execute(array($id));

    }



  }

?>