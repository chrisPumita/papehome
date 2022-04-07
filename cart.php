<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "./includes/header.php" ?>
    <title>Bievenido a la tienda</title>
    <style>
        .title {
            margin-bottom: 5vh
        }


        .cart {
            background-color: #fff;
            padding: 4vh 5vh;
            border-bottom-left-radius: 1rem;
            border-top-left-radius: 1rem
        }

        @media(max-width:767px) {
            .cart {
                padding: 4vh;
                border-bottom-left-radius: unset;
                border-top-right-radius: 1rem
            }
        }

        .summary {
            background-color: #ddd;
            border-top-right-radius: 1rem;
            border-bottom-right-radius: 1rem;
            padding: 4vh;
            color: rgb(65, 65, 65)
        }

        @media(max-width:767px) {
            .summary {
                border-top-right-radius: unset;
                border-bottom-left-radius: 1rem
            }
        }

        .summary .col-2 {
            padding: 0
        }

        .summary .col-10 {
            padding: 0
        }

        .title b {
            font-size: 1.5rem
        }


        .back-to-shop {
            margin-top: 4.5rem
        }

    </style>
</head>
<body>
<?php include "./includes/nav.php" ?>
<section>
    <div id="carouselBannerPromos" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="card mb-3">
                    <div class="container-fluid g-0" style="background: url(https://favacard.com.ar/wp-content/uploads/2013/10/PROMO-Cabal-Banner-web-960x300px-01.jpg) top center no-repeat;">
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
            <?php for($i = 0; $i <10; $i++) { ?>
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2">
                        <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col">
                        <div class="row text-muted">Papel</div>
                        <div class="row">Facia 500 Hojas</div>
                    </div>
                    <div class="col-2">
                        <select class="form-select form-select-sm w-50" aria-label=".form-select-sm example">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <div class="row text-muted">&dollar; 44.00</div>
                        <div class="row">x 1 &dollar; 44.00 </div>
                    </div>
                    <div class="col-1"><i class="fas fa-times" role="button"></i></div>
                </div>
            </div>
            <?php } ?>
            <div class="back-to-shop">
                <a href="./search.php"><i class="fas fa-arrow-left"></i><span class="text-muted"> Seguir Comprando</span></a>
            </div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Total</b></h5>
            </div>
            <hr>
            <div class="row py-3">
                <div class="col">3 Productos</div>
                <div class="col text-right">&dollar; 132.00</div>
            </div>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL</div>
                <div class="col text-right">&euro; 137.00</div>
            </div>
            <button class="btn btn-success w-100" id="button-addon2" type="button">Confirmar Productos</button>
        </div>
    </div>
</section>
<?php include "./includes/footer.php"?>
<?php include "./includes/js.php"?>

</body>
</html>