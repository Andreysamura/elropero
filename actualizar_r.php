<?php

//recibir las variables del formulario y actualizar

//echo "Aca voy a actualizar los datos";
$codigo=$_POST["codigo"];
$modelo=$_POST["modelo"];
$talla=$_POST["talla"];
$tipo=$_POST["tipo"];
$precio=$_POST["precio"];
$cantidad=$_POST["cantidad"];
//echo "valor del codigo".$codigo;

//llamar al archivo conexión
include("conexion.php");
//Consulta para actualizar los datos de la vestimenta
$sql = "UPDATE producto SET modelo='$modelo', talla=$talla, tipo='$tipo',precio=$precio, cantidad=$cantidad WHERE cod_ropa=$codigo";

echo "consulta: ".$sql;
if (mysqli_query($conn,$sql)) {
  //echo "Record updated successfully";
  header("Location: index.php");
} else {
  echo "Error al modificar un campo: " . mysqli_error($conn);
}

mysqli_close($conn);



?>