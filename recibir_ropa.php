<?php
// declaramos variavles para recibir y rellenar la BD
echo "<h2>Recibiendo informacion del formulario de registro</h2>";
$codigo=$_POST['codigo'];
echo "El codigo del producto es: ".$codigo."<br>";
$modelo=$_POST['modelo'];
echo "La descripcion es: ".$modelo."<br>";
$talla=$_POST['talla'];
echo  "La talla es :".$talla."<br>";
$tipo=$_POST['tipo'];
echo  "El tipo de calzado es :".$tipo."<br>";
$precio_compra=$_POST['precio_compra'];
echo "El precio es: ".$precio_compra."<br>";
$precio=$_POST['precio'];
echo "El precio es: ".$precio."<br>";
$cantidad=$_POST['cantidad'];
echo "El cantidad es: ".$cantidad."<br>";
$fecha_registro=$_POST['fecha'];
echo "se registro el: ".$fecha_registro."<br>";

include("conexion.php");
//consulta oara insertar datos en la tabla producto
$sql="INSERT INTO producto VALUES (id_registro, $codigo,'$modelo',$talla,'$tipo', $precio_compra, $precio, $cantidad, '$fecha_registro')";

//evaluar si se registro correctamente de la ropa
if(mysqli_query($conn,$sql))
{
    //regresar a la pagina anterior
    header("location: registro.php");
} // de lo contrario erro
else{
    echo "Error: ".$sql. "<br>".mysqli_error($conn);
}


?>