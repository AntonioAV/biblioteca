<?php

class ControladorFormularios
{
 // Ingreso
 public function ctrIngreso()
 {
  if (isset($_POST["ingresoEmail"])) {
   $tabla = "registros";
  }

  $item  = "email";
  $valor = $_POST["ingresoEmail"];

  $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

  if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]) {
   echo 'Ingreso exitoso';
  }

 }
}
