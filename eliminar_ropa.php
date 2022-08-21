<?php

//llamada de conexion de BD
      include("conexion.php");

//recibir codigo de calzado
$codigo = $_GET['cod_ropa'] ;

//sql de eliminacion de ropa
$consulta = "DELETE FROM producto WHERE cod_ropa=$codigo";

// creamos una condicional, si se elimina -->
if (mysqli_query($conn, $consulta)) {
  
  // --> nos regresar a la pagina anterior
  header("location: index.php");
} else { // de lo contrario error al eliminarlo
  echo "<br>Error al eliminar la ropa: " . mysqli_error($conn);
}

mysqli_close($conn); //cerramos conexion
?>