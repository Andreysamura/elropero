<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario_Venta</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script>
            //script para permitir solo escribir numero
            //Para decimal agregar step="any" en el input

            function solonumeros(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31 &&
                (charCode < 48 || charCode > 57))
                return false;

            return true;
            }
        </script>
        </script>
    </head>

    <body>
        <?php //parte de encabezado
        include("encabezado.php")
        ?>

<!-- Formulario de registro -->

        <section class="container mt-3 shadow bg">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-center text-muted mt-2">Venta de calzado</h3>
                    <form method="POST" action="venta_r.php">
                        <!--Recibrir las variables para vender-->
                        <?php

                            $codigo=$_GET["cod_ropa"];
                            $modelo=$_GET["modelo"];
                            $talla=$_GET["talla"];
                            $tipo=$_GET["tipo"];
                            $precio=$_GET["precio"];
                            $cantidad=$_GET["cantidad"];


                        ?>

                        <div class="row mb-3">
                            <label class="col-sm-10">Codigo de ropa</label>
                            <div class="col-sm-10">
                                <input type="text" name="codigo" class="form-control" readonly value="<?php echo $codigo ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Nombre de cliente</label>
                            <div class="col-sm-10">
                                <input type="text" name="cliente" required class="form-control" placeholder="Nombre del cliente">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Modelo</label>
                            <div class="col-sm-10">
                                <input type="text" name="modelo" class="form-control" readonly value="<?php echo $modelo ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Talla</label>
                            <div class="col-sm-10">
                                <input type="text" name="talla" class="form-control" readonly value="<?php echo $talla ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Tipo</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipo" class="form-control" readonly value="<?php echo $tipo ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Precio</label>
                            <div class="col-sm-10">
                                <input type="text" name="precio" class="form-control" readonly value="<?php echo $precio ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Cantidad</label>
                            <div class="col-sm-10">
                                <input type="number" name="cantidad" id="cantidad" onkeypress="return solonumeros(event);" pattern="[0-9]+" required class="form-control" placeholder="Cantidad de prendar compradas">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Fecha de registro</label>
                            <div class="col-sm-10">
                                <input type="date" name="fecha_registro" required class="form-control">
                            </div>
                        </div>
                        
                        <!-- boton para ejercer la venta -->
                        <div class="d-grid gap-2 col-6 mx-auto"> 
                            <button class="btn btn-success mb-3">Vender</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 d-none d-lg-block col-md-4 col-lg-5 col-lg-6 mt-5"> 
                    <img src="img/roperos.png" width="500px" height="500px">
                </div>
            </div>
        </section>
        
    <?php //parte del pie de pagina
      include("pie_de_pagina.php")
    ?>

    </body>
    
</html>
