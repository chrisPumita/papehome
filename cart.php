<?php
$titulo = "HOME - Pape Home";
$path = "./"
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "./includes_general/header.php" ?>
    <link rel="stylesheet" href="assets/css/style-step.css">
    <title>Carrito</title>
</head>
<body>
<?php include "./includes_general/nav.php" ?>
<section>
    <div id="carouselBannerPromos" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="card mb-3">
                    <div class="container-fluid g-0" style="background: url(https://image.shutterstock.com/image-photo/set-school-preschool-childrens-accessories-260nw-1098481166.jpg) top center no-repeat;">
                        <div class="gradiente">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-body text-light">
                                            <h5 class="card-title">Nombre del Producto</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Recibe un <strong>10% OFF</strong></small></p>
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
                    <div class="container-fluid g-0" style="background: url(https://image.shutterstock.com/shutterstock/photos/1408869659/display_1500/stock-vector-promo-merdeka-banner-design-vector-1408869659.jpg) top center no-repeat;">
                        <div class="gradiente">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-body text-light">
                                            <h5 class="card-title">Nombre del Producto</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Recibe un <strong>10% OFF</strong></small></p>
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
            <li class="breadcrumb-item active" aria-current="page">Carrito</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Productos agregados</b></h4>
                    </div>
                    <div class="col align-self-center text-end text-muted">3 Productos</div>
                </div>
            </div>
            <div class="row" id="container">
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="summary">
                <div>
                    <h5><b>Total</b></h5>
                </div>
                <hr>
                <div class="row py-3" id="subtotalBox">
                    <div class="col">3 Productos</div>
                    <div class="col text-right">&dollar; 132.00</div>
                </div>
                <div class="row" id="totalBox" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL</div>
                    <div class="col text-right">&euro; 137.00</div>
                </div>
                <a href="./informacion.php" class="btn btn-success w-100" id="button-addon2" type="button">Confirmar Productos</a>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="back-to-shop">
            <a href="./search.php"><i class="fas fa-arrow-left"></i><span class="text-muted"> Seguir Comprando</span></a>
        </div>
    </div>
</section>
<?php include "./includes_general/footer.php" ?>
<?php include "./includes_general/js.php" ?>

<script src="./service/cart.js"></script>
<script>
    $( document ).ready(function() {
        cargaCarritoPageHTML();
    });
</script>
</body>
</html>