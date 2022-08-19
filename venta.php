<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Venta</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
<?php //parte de encabezado
include("encabezado.php")
?>


            <!-- Buscador -->
            <div class="container shadow rounded mt-3">
                <nav class="navbar">
                    <form class="container-fluid" method="GET" action="#">
                    <div class="input-group">
                        <input type="search" class="form-control" name="busqueda" placeholder="Buscar Calzado" aria-label="Username" aria-describedby="basic-addon1">
                        <button class="btn btn-outline-info" type="submit" name="enviar">Buscar</button>
                    </div>
                    </form>
                </nav>
            </div>
            
        <section><!--Tabla de prendas para vender-->
            <div class="container table-responsive bg-light shadow grounded mt-2">
                <div class="col-lg-12">
                    <h2 class="text-center text-muted mt-2 fw-bolder"> Ropa para Venta</h2>
                    <a class="btn btn-info mb-2" href="registro_venta.php">Registro de ventas</a>
                    <table class="table table-info table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Codigo</th>
                                <th>Modelo</th>
                                <th>Talla</th>
                                <th>Tipo</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                            
                            <?php

                            include("conexion.php");//llamada de la BD
                            //consulta de busqueda de prendas de la tabla producto
                            if(isset($_GET["busqueda"])){
                            $busqueda=$_GET["busqueda"];
                            $consulta="SELECT * FROM producto where modelo like '%$busqueda%' OR tipo like '%$busqueda%' OR talla like '%$busqueda%' OR precio like '%$busqueda%' OR cantidad like '%$busqueda%' OR cod_ropa like '%$busqueda%'OR fecha_registro like '%$busqueda%' AND cantidad>=1";
                            }
                            else{
                            $consulta="SELECT * FROM producto WHERE cantidad>=1";
                            }

                            $resultado=mysqli_query($conn,$consulta);
                            if(mysqli_num_rows($resultado)>0)
                            {
                                while($fila=mysqli_fetch_assoc($resultado))
                                {
                                    echo "<tr>";
                                    echo "<td>".$fila['cod_ropa']."</td>";
                                    echo "<td>".$fila['modelo']."</td>";
                                    echo "<td>".$fila['talla']."</td>";
                                    echo "<td>".$fila['tipo']."</td>";
                                    echo "<td>".$fila['precio']."</td>";
                                    echo "<td>".$fila['cantidad']."</td>";
                                    echo "<td> <a class='btn btn-success' href='venta_ropa.php?cod_ropa=".$fila['cod_ropa']."&modelo=".$fila['modelo']."&talla=".$fila['talla']."&tipo=".$fila['tipo']."&precio=".$fila['precio']."&cantidad=".$fila['cantidad']."'> Vender </a> </td>";
                                    echo "</tr>";
                                   }
                            }else
                            {
                                echo "Sin resultados";
                            }

                            ?>

                    </table>
                </div>
            </div>
        </section>


    <?php //parte del pie de pagina
      include("pie_de_pagina.php")
    ?>
    </body>
</html>