<?php

//llamada de conexion de BD
      include("conexion.php");

//recibir codigo de calzado
$codigo = $_GET['cod_ropa'] ;

//sql de eliminacion de ropa
$consulta = "DELETE FROM producto WHERE cod_ropa=$codigo";

if (mysqli_query($conn, $consulta)) {
  //echo "<br>Ropa eliminado correctamente";
  //regresar a la pagina anterior
  header("location: index.php");
} else {
  echo "<br>Error al eliminar la ropa: " . mysqli_error($conn);
}

mysqli_close($conn);
?>