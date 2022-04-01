<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "./includes/header.php" ?>
    <title>Bievenido a la tienda</title>
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
    <div class="row">
        <div class="col-12 col-sm-5 col-xl-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/img/default-image.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/img/default-image.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/img/default-image.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-12 col-sm-7 p-5 col-xl-6">
            <h3>Nombre del producto</h3>
            <h6>SKU: 555555</h6>
            <p class="text-danger"><del class="text-muted fs-6">$50.00</del><strong class="fs-2 mx-4">$45.00</strong></p>
            <div class="line">
                <div class="read-more">
                    <h5 class="text-center  mx-4 mt-2">Detalles</h5>
                </div>
            </div>
            <div class="row">
                <h5 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis labore placeat quia. Aut distinctio
                    eum ex inventore obcaecati provident, quidem rem sapiente sed ut veniam veritatis! Cupiditate deserunt porro veritatis.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi beatae, consequuntur corporis cupiditate,
                    doloribus ea eligendi excepturi expedita facere facilis necessitatibus non odio odit possimus repudiandae saepe vel velit.
                </p>
            </div>
            <div class="row">
                <div class="col-6">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="col-6">
                    <button class="btn btn-success w-100" role="button"><i class="fas fa-cart-plus" aria-hidden="true"></i> Agregar</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "./includes/ofertas_div.php"?>
<?php include "./includes/footer.php"?>
<?php include "./includes/js.php"?>



<!-- Swiper JS -->
<script src="./assets/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    let propiedades = {
        slidesPerView: 5,
        spaceBetween: 5,
        slidesPerGroup: 5,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    }
    var swiper2 = new Swiper(".mySwiper2", propiedades);
</script>
</body>
</html>