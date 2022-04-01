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
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cazaofertas.com.mx/wp-content/uploads/2020/07/Chedraui-regreso-310720-01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://cazaofertas.com.mx/wp-content/uploads/2020/07/Chedraui-regreso-310720-05.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://ofertadescuentos.com/wp-content/uploads/2017/07/Promociones-y-ofertas-de-fin-de-semana-chedraui-14-al-17-de-julio-OFFDE-2017.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="line">
            <div class="read-more">
                <h5 class="text-center  mx-4 mt-2">Articulos de Novedad</h5>
            </div>
        </div>
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card px-1">
                    <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                    <div class="card-body small">
                        <h5 class="card-title">Tijeras Economicas</h5>
                        <p class="text-success"><strong class="fs-4">$45.00</strong></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-success" type="submit">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card px-1">
                    <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                    <div class="card-body small">
                        <h5 class="card-title">Tijeras Economicas</h5>
                        <p class="text-success"><strong class="fs-4">$45.00</strong></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-success" type="submit">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card px-1">
                    <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                    <div class="card-body small">
                        <h5 class="card-title">Tijeras Economicas</h5>
                        <p class="text-success"><strong class="fs-4">$45.00</strong></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-success" type="submit">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card px-1">
                    <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                    <div class="card-body small">
                        <h5 class="card-title">Tijeras Economicas</h5>
                        <p class="text-success"><strong class="fs-4">$45.00</strong></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-success" type="submit">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card px-1">
                    <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                    <div class="card-body small">
                        <h5 class="card-title">Tijeras Economicas</h5>
                        <p class="text-success"><strong class="fs-4">$45.00</strong></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-success" type="submit">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="line">
            <div class="read-more">
                <h5 class="text-center text-uppercase mx-4 mt-2">Promociones Excluisivas</h5>
            </div>
        </div>
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card py-3">
                    <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                    <div class="small">
                        <h5 class="card-title">Tijeras Economicas</h5>
                        <p class="text-danger"><del class="text-muted fs-6 mx-4">$50.00</del><strong class="fs-4">$45.00</strong></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-success" type="submit">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card py-3">
                    <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                    <div class="small">
                        <h5 class="card-title">Tijeras Economicas</h5>
                        <p class="text-danger"><del class="text-muted fs-6 mx-4">$50.00</del><strong class="fs-4">$45.00</strong></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-success" type="submit">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card py-3">
                    <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                    <div class="small">
                        <h5 class="card-title">Tijeras Economicas</h5>
                        <p class="text-danger"><del class="text-muted fs-6 mx-4">$50.00</del><strong class="fs-4">$45.00</strong></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-success" type="submit">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card py-3">
                    <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                    <div class="small">
                        <h5 class="card-title">Tijeras Economicas</h5>
                        <p class="text-danger"><del class="text-muted fs-6 mx-4">$50.00</del><strong class="fs-4">$45.00</strong></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-success" type="submit">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card py-3">
                    <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                    <div class="small">
                        <h5 class="card-title">Tijeras Economicas</h5>
                        <p class="text-danger"><del class="text-muted fs-6 mx-4">$50.00</del><strong class="fs-4">$45.00</strong></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-success" type="submit">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card py-3">
                    <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                    <div class="small">
                        <h5 class="card-title">Tijeras Economicas</h5>
                        <p class="text-danger"><del class="text-muted fs-6 mx-4">$50.00</del><strong class="fs-4">$45.00</strong></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-success" type="submit">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="line">
            <div class="read-more">
                <h5 class="text-center text-uppercase mx-4 mt-2">OFERTAS</h5>
            </div>
        </div>
        <div class="container">
            <div class="row py-3">
                <div class="col-12 col-sm-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="./assets/img/default-image.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nombre del Producto</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Llevate 3 y paga 2</small></p>
                                    <button class="btn btn-danger" type="submit">Comprar ahora</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="./assets/img/default-image.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nombre del Producto</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Recibe un <strong>10% OFF</strong></small></p>
                                    <button class="btn btn-danger" type="submit">Comprar ahora</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
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
    var swiper = new Swiper(".mySwiper", propiedades);
    var swiper2 = new Swiper(".mySwiper2", propiedades);
</script>
</body>
</html>