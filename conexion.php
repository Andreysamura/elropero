<?php

// declaramos variables de nuestra BD para hacer la conexion
$servidor = "localhost";
$bd_usuario = "root";
$bd_password = "";
$base="elropero";

//crear una variable para la conexion con las variables anteriores
$conn = mysqli_connect($servidor, $bd_usuario, $bd_password, $base);

// creamos una condicional, si es correcrecta la conexion
if (!$conn) {
  // sino un error de al  hacer la conexion con la BD
  die("<br>Connection failed: " . mysqli_connect_error());
}

?>