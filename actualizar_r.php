<?php

//recibir las variables del formulario y actualizar

//declaramos nuestras variables para acuralizar
$codigo=$_POST["codigo"];
$modelo=$_POST["modelo"];
$talla=$_POST["talla"];
$tipo=$_POST["tipo"];
$precio=$_POST["precio"];
$cantidad=$_POST["cantidad"];


//llamar al archivo conexión por include
include("conexion.php");
//Consulta para actualizar los datos de la vestimenta
$sql = "UPDATE producto SET modelo='$modelo', talla=$talla, tipo='$tipo',precio=$precio, cantidad=$cantidad WHERE cod_ropa=$codigo";

// si la consulta se leera en un echo
echo "consulta: ".$sql;

// creamos una condicinal if, si se cumple nuestra consulta, nos redireccionara al index
if (mysqli_query($conn,$sql)) {
  
  // para redireccionarnos al index
  header("Location: index.php");
} else { // de lo contrario un mensaje que da un error
  echo "Error al modificar un campo: " . mysqli_error($conn);
}

mysqli_close($conn); // cerramos conexion 



?>