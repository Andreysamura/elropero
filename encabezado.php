<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<!--Estilo de encabezado o navegador por un css -->
<style> 
.bg{
    background: #FFBB58;
    background: linear-gradient(to right, #2674e7  , #FBFFE2);
}

</style>

    <body>
    <header>
        <div><!--Navegador o apartado menu de alta, venta y inventario de productos-->
            <nav class="navbar navbar-expand-lg fixed-top bg mb fst-italic fw-bolder shadow rounded fs-5">
                <div class="container-fluid">  <!-- Inicio del div contenedor principal-->
                    <a class="navbar-brand">
                        <img src="img/roperos.png" alt="" width="40" height="28" class="d-inline-block align-text-top">El Ropero
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- Contenedor para generar efecto menu -->
                        <u1 class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="venta.php">Venta de ropa</a></li>
                            <li class="nav-item"><a class="nav-link" href="registro.php">Alta de ropa</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php">Inventario</a></li>    
                        </u1>
                    </div> <!-- Cierre del div efecto menu -->
                </div> <!-- Cierre del div contenedor principal -->
            </nav>
        </div>
            
            <!-- Slide de imagenes o carrusel para darle mas vista -->
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"><!-- Contenedor principals de las imagenes -->
                        <div class="carousel-inner"> <!-- Contenedor interno -->
                            <div class="carousel-item active bound"> <!-- imagen 1 -->
                                <img src="img/foto1.webp"  class="d-block w-100">
                            </div> 
                            <div class="carousel-item"> <!-- imagen 2 -->
                                <img src="img/foto2.webp" class="d-block w-100">
                            </div>
                            <div class="carousel-item"> <!-- imagen 3 -->
                                <img src="img/foto3.webp" class="d-block w-100">
                            </div>
                            <!--Botones de siguente y antes de las imagenes-->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
        </header>
    </body>
</html>