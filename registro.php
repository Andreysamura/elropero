<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro_Prenda</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script>
            function solonumeros(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31 &&
                (charCode < 48 || charCode > 57))
                return false;

            return true;
            }
        </script>
    </head>

    <body>
        <?php //parte de encabezado
        include("encabezado.php")
        ?>

<!-- Formulario de registro -->

        <section class="container shadow rounded mt-4 bg"><!-- Contenedor-->
            <div class="row">
                <div class="col-lg-4">
                    <h3 class="text-center text-muted mt-2">Registro de ropa</h3>
                    <form method="POST" action="recibir_ropa.php">
                        <div class="row mb-3">
                            <label class="col-sm-10">Codigo de Ropa</label>
                            <div class="col-sm-10">
                                <input type="number" id='codigo' onkeypress="return solonumeros(event);" name="codigo" required class="form-control" placeholder="Introduce el codigo de ropa" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10 ">Modelo</label>
                            <div class="col-sm-10">
                                <input type="text" name="modelo" required class="form-control" placeholder="Escribe la descripcion de la vestimenta" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Talla</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" onkeypress="return solonumeros(event);" name="talla" required class="form-control" placeholder="Introduce la talla de la ropa" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Tipo</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipo" required class="form-control" placeholder="Introduce el tipo de ropa" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Precio Compra</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" onkeypress="return solonumeros(event);" pattern="[0-9]+" name="precio_compra" required class="form-control" placeholder="Introduce el precio de la prenda" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Precio Venta</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" onkeypress="return solonumeros(event);" pattern="[0-9]+" name="precio" required class="form-control" placeholder="Introduce el precio de la prenda" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Cantidad</label>
                            <div class="col-sm-10">
                                <input type="number" onkeypress="return solonumeros(event);" pattern="[0-9]+" name="cantidad" required class="form-control" placeholder="Introduce la cantidad de prendas recibidas">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Fecha de registro</label>
                            <div class="col-sm-10">
                                <input type="date" name="fecha" required class="form-control">
                            </div>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-info mb-3">Registrar</button>
                        </div>
                    </form>
                </div>
                <!--Tabla de los pruductos-->
                <div class="col-lg-8 table-responsive shadow rounded">
                    <h3 class="text-center text-muted mt-2"> Lista de ropa registrada</h3>
                    <table class="table table-info table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Codigo</th>
                                <th>Modelo</th>
                                <th>Talla</th>
                                <th>Tipo</th>
                                <th>Precio Compra</th>
                                <th>Precio Venta</th>
                                <th>Cantidad</th>
                                <th>Fecha de registro</th>
                            </tr>
                        </thead>
                            
                        <!-- hacemos las consultas correspodniente mediante php -->
                                <?php
                                    include("conexion.php");
                                    $consulta="SELECT * FROM producto";
                                    $resultado=mysqli_query($conn,$consulta);
                                    if(mysqli_num_rows($resultado)>0)
                                    {
                                        while($fila=mysqli_fetch_assoc($resultado))
                                        {
                                        echo "<tr>";
                                        echo "<td>".$fila['id_registro']."</td>";
                                        echo "<td>".$fila['cod_ropa']."</td>";
                                        echo "<td>".$fila['modelo']."</td>";
                                        echo "<td>".$fila['talla']."</td>";
                                        echo "<td>".$fila['tipo']."</td>";
                                        echo "<td>".$fila['precio_compra']."</td>";
                                        echo "<td>".$fila['precio']."</td>";
                                        echo "<td>".$fila['cantidad']."</td>";
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
        </section>
        
    <?php //parte del pie de pagina
      include("pie_de_pagina.php")
    ?>

    </body>
    
</html>