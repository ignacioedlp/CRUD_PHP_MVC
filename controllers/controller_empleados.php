<?php

  include_once("Conexion.php");
  include_once("models/Empleado.php");


  class ControllerEmpleados{
    public function inicio(){
      
      $empleados=Empleado::consultar();

      include_once("views/employer/inicio.php");
    }

    public function crear(){

      if($_POST){
        $nombre = $_POST['nombre'];
        $correo = $_POST['email'];

        Empleado::crear($nombre, $correo);
      }

      include_once("views/employer/crear.php");
    }

    public function editar(){

      
        $id = $_GET['id'];

        $empleado=Empleado::buscar($id);
        //header("Location: ?controller=empleados&action=inicio");
     
        if($_POST){
          $nombre = $_POST['nombre'];
          $correo = $_POST['email'];
          $id = $_POST['id'];
          Empleado::editar($id, $nombre, $correo);

          header("Location: ?controller=empleados&action=inicio");
        }

      include_once("views/employer/editar.php");
    }



    public function borrar(){

      if($_GET){
        $id = $_GET['id'];

        echo $id;

        Empleado::borrar($id);
        header("Location: ?controller=empleados&action=inicio");
      }

    }
  }


?>