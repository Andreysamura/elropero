<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lista</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

  <body>
     
      <?php //llamos el encabezado con un include mediante php
      include("encabezado.php")
      ?>

        <!--Creacion del buscador de la tabla porducto-->
        <div class="container shadow rounded mt-2 bg">
          <nav class="navbar">
            <form class="container-fluid" method="GET" action="#">
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Buscar Producto</span>
                <input type="search" class="form-control" name="busqueda" placeholder="Buscar prenda" aria-label="Username" aria-describedby="basic-addon1">
                <button class="btn btn-outline-info" type="submit" name="enviar">Buscar</button>
              </div>
            </form>
          </nav>
        </div>

      <section><!--Tabla que muestra los productos en existencia-->        
        <div class="container table-responsive shadow rounded mt-3 mb-3 bg">
          <div class="col-lg-12">
            <h1 class="text-center text-muted mt-2"> Inventario de ropa</h1>
            <table class="table table-warning table-bordered text-center">
              <thead class="table-dark">
                <a class='btn btn-dark mb-2' href='registro.php'> Agregar </a>
                <!-- fila del encabezado de la tabla -->
                  <tr>
                    <th>Código</th>
                    <th>Modelo</th>
                    <th>Talla</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Opciones</th>
                  </tr>
              </thead>

              <?php

                  include("conexion.php"); //LLamada de la conexionde BD 
                  //Resultado de la busqueda de la tabla producto mediante columnas

                  if(isset($_GET["busqueda"])){ //consulta de la busqeuda mediante sus caracteristixas
                  $busqueda=$_GET["busqueda"];
                  $consulta="SELECT * FROM producto where modelo like '%$busqueda%' OR tipo like '%$busqueda%' OR talla like '%$busqueda%' OR precio like '%$busqueda%' OR cantidad like '%$busqueda%' OR cod_ropa like '%$busqueda%'OR fecha_registro like '%$busqueda%'";
                  }
                  else{
                      $consulta="SELECT * FROM producto"; // consulta a la BD
                  }

                  // resultado cde la BD y se imprima en las tablas
                  $resultado=mysqli_query($conn,$consulta);
                  // creamos un if y una condicional
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
                        echo "<td> <a class='btn btn-danger' href='eliminar_ropa.php?cod_ropa=".$fila['cod_ropa']."'> Eliminar </a> <a class='btn btn-primary' href='actualizar_ropa.php?cod_ropa=".$fila['cod_ropa']."&modelo=".$fila['modelo']."&talla=".$fila['talla']."&tipo=".$fila['tipo']."&precio=".$fila['precio']."&cantidad=".$fila['cantidad']."'> Modificar </a> </td>";
                        echo "</tr>";
                        }
                    } else {
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