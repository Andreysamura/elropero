<?php
// declaramos variables para recibir los datos de lo qeu se vendera
echo "<h2>Recibiendo informacion del formulario de venta</h2>";
$codigo=$_POST['codigo'];
echo "El codigo del producto es: ".$codigo."<br>";
$nomcliente=$_POST['cliente'];
echo "El nombre del cliente es: ".$nomcliente."<br>";
$modelo=$_POST['modelo'];
echo "La descripcion es: ".$modelo."<br>";
$talla=$_POST['talla'];
echo  "La talla es :".$talla."<br>";
$tipo=$_POST['tipo'];
echo  "El tipo es :".$tipo."<br>";
$precio=$_POST['precio'];
echo "El precio es: ".$precio."<br>";
$cantidad=$_POST['cantidad'];
echo "El cantidad es: ".$cantidad."<br>";
$fecha_reg=$_POST['fecha_registro'];
echo "La fecha de registro es: ".$fecha_reg."<br>";

//Precio total por cantidad
$total = $cantidad * $precio ; 


include("conexion.php");
//consulta de ingresar los datos obtenidos 
$sql="INSERT INTO venta VALUES (id_venta, $codigo, '$nomcliente','$modelo', '$tipo', $talla, $precio, $cantidad, $total,'$fecha_reg')";

//evaluar si se registro correctamente la prenda
if(mysqli_query($conn,$sql))
{
    echo "Ropa registrado correctamente";
    //regresar a la pagina anterior
    header("location: venta.php");
}
else{
    echo "Error: ".$sql. "<br>".mysqli_error($conn);
}


?>