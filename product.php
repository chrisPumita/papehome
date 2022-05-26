<?php
session_start();
$titulo = "HOME - Busqueda";
$path = "./";
$idProducto = $_GET["idProducto"];
echo "<script>let ID_PRODUCTO = ".$idProducto.";</script>";
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "./includes_general/header.php" ?>
    <title>Bievenido a la tienda</title>
</head>
<body>
<?php include "./includes_general/nav.php" ?>
<section>
    <div id="carouselBannerPromos" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="card mb-3">
                    <div class="container-fluid g-0" style="background: url(./assets/img/banne1.jpg) center no-repeat;">
                        <div class="gradiente">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-body text-light">
                                            <h2 class="card-title">Boligrafos en oferta</h2>
                                            <p class="card-text">Todos los boligrafos en oferta exclusiva solo por internet.</p>
                                            <p class="card-text"><small class="text-muted">Hasta un <strong>10% OFF</strong></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <div class="card mb-3">
                    <div class="container-fluid g-0" style="background: url(./assets/img/banner.jpg) top center no-repeat;">
                        <div class="gradiente">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-body text-light">
                                            <h2 class="card-title">Deswcuento del HOT SALE</h2>
                                            <p class="card-text">Ofertas Exclusivas en linea</p>
                                            <p class="card-text"><small class="text-muted">Recibe un <strong>30% OFF</strong></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Inicio</a></li>
            <li class="breadcrumb-item"><a href="./search.php">Busqueda</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span id="nameProductoBread"></span></li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12 col-md-5 col-xl-4">
            <div id="myFotosGalery">
            </div>
        </div>
        <div class="col-12 col-md-7 p-5 col-xl-7">
            <h3 id="lblNombre"></h3>
            <h6>SKU: <span id="lblSKU"></span></h6>
            <div id="lblCoste"></div>
            <div class="line">
                <div class="read-more">
                    <h5 class="text-center  mx-4 mt-2">Detalles</h5>
                </div>
            </div>
            <div class="row">
                <p id="lblDesc"></p>
            </div>
            <div class="row">
                <div id="botonStock"></div>
                <div class="col-6" id="btnAdd"></div>
            </div>
        </div>
    </div>
</section>
<?php include "./includes_general/footer.php" ?>
<?php include "./includes_general/js.php" ?>
<script src="./service/producto_details.js"></script>

</body>
</html>