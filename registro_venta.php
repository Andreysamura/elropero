<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro_Venta</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
<?php //parte de encabezado
include("encabezado.php")
?>

    <!--Creacion del buscador de la tabla ventas que se han realizado-->
        <div class="container shadow rounded mt-3 bg">
          <nav class="navbar">
            <form class="container-fluid" method="GET" action="#">
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Buscar Producto</span>
                <input type="search" class="form-control" name="busqueda" placeholder="Buscar Calzado" aria-label="Username" aria-describedby="basic-addon1">
                <button class="btn btn-outline-info" type="submit" name="enviar">Buscar</button>
              </div>
            </form>
          </nav>
        </div>
        <section><!--seccion de la tabla de las ventas realizadas-->        
            <div class="container table-responsive bg-light shadow rounded mt-2">
                <div class="col-lg-12">
                    <h1 class="text-center text-muted">Lista de ventas registradas</h1>
                    <a class="btn btn-info mb-2" href='venta.php'>Regresar</a>
                    <table class="table table-info table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <!-- fila de encabezado -->
                                <th>ID</th>
                                <th>Codigo De Ropa</th>
                                <th>Cliente</th>
                                <th>Modelo</th>
                                <th>Tipo</th>
                                <th>Talla</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                                <th>Fecha Registro</th>
                            </tr>
                        </thead>
                        <?php

                            include("conexion.php");//llamada de la BD
                            //Buasqueda de las ventas realizadas en la tabla venta
                            if(isset($_GET["busqueda"])){
                            $busqueda=$_GET["busqueda"];
                            $consulta="SELECT * FROM venta where modelo like '%$busqueda%' OR tipo like '%$busqueda%' OR talla like '%$busqueda%' OR precio like '%$busqueda%' OR cantidad like '%$busqueda%' OR fecha_registro like '%$busqueda%' OR cod_ropa like '%$busqueda%' OR id_venta like '%$busqueda%' OR nombre_cliente like '%$busqueda' OR fecha_registro like '%$busqueda'";
                            }
                            else{
                            $consulta="SELECT * FROM venta";
                            }

                            $resultado=mysqli_query($conn,$consulta);
                            // si la consulta es correta, un if con un while
                            if(mysqli_num_rows($resultado)>0)
                            {
                                while($fila=mysqli_fetch_assoc($resultado))
                                {
                                    echo "<tr>";
                                    echo "<td>".$fila['id_venta']."</td>";
                                    echo "<td>".$fila['cod_ropa']."</td>";
                                    echo "<td>".$fila['nombre_cliente']."</td>";
                                    echo "<td>".$fila['modelo']."</td>";
                                    echo "<td>".$fila['tipo']."</td>";
                                    echo "<td>".$fila['talla']."</td>";
                                    echo "<td>".$fila['precio']."</td>";
                                    echo "<td>".$fila['cantidad']."</td>";
                                    echo "<td>".$fila['total_pr']."</td>";
                                    echo "<td>".$fila['fecha_registro']."</td>";
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
        </section> <!-- fin de la seccion -->
        


    <?php //parte del pie de pagina
      include("pie_de_pagina.php")
    ?>
    </body>
</html>