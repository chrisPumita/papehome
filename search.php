<?php
session_start();
$titulo = "HOME - Busqueda";
$path = "./";
$cat = !isset($_GET['cat'])? "none": $_GET['cat'];
$keword = !isset($_GET['keword'])? "none": $_GET['keword'];
$off = !isset($_GET['off'])? "none": $_GET['off'];
echo "<script> let CAT = '".$cat."';  let KEYWORD = '".$keword."'; let OFF = '".$off."'; </script>";
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
<section class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Busqueda</li>
        </ol>
    </nav>
    <div class="container d-md-flex align-items-stretch">
        <div id="content" class="p-1 pt-5">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <h2 class="navbar-brand" href="#"><span id="foundProductos"></span> resultados encontrados</h2>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="w-100">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 row-cols-md-3 g-4" id="contanerProductos">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "./includes_general/footer.php" ?>
<?php include "./includes_general/js.php" ?>
<script src="./service/search.js"></script>
</body>
</html>