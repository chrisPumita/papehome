<?php
session_start();
echo session_id()
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/bootstrap-5.0.2/css/bootstrap.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <title>Bievenido a la tienda</title>

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: auto;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-wrapper {
            height: auto;
        }


        footer .info {
            background: #212529;
        }

        footer{
            background: #30d017;
        }

        a {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        a:hover, a:focus {
            text-decoration: none;
            color: #30d017;
        }

    </style>

</head>
<body>
<div id="carouselPromos" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active bg-primary" data-bs-interval="5000">
            <p class="text-center text-light">
                Envio Gratis en compras Mayores a $500
            </p>
        </div>
        <div class="carousel-item bg-danger" data-bs-interval="5000">
            <p class="text-center text-light">
                Oferta en Papel</p>
        </div>
        <div class="carousel-item bg-info">
            <p class="text-center text-light">
                Compra en linea y recoge en tienda
            </p>
        </div>
    </div>
</div>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./assets/img/logo.png" alt="" width="100"></a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <button type="button" class="btn position-relative">
                    Carrito
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        4
                        <span class="visually-hidden">unread messages</span>
                      </span>
                </button>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Cuenta
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Mis Pedidos</a></li>
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">Categoria 1</a></li>
                        <li><a class="dropdown-item" href="#">Categoria 1</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Categoria 1</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Ofertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contacto</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
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
        <h5 class="text-center py-5">Articulos de Novedad</h5>
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <p class="text-success"><strong class="fs-4">$45.00</strong></p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <p class="text-success"><strong class="fs-4">$45.00</strong></p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <p class="text-success"><strong class="fs-4">$45.00</strong></p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <p class="text-success"><strong class="fs-4">$45.00</strong></p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <p class="text-success"><strong class="fs-4">$45.00</strong></p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
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
        <h5 class="text-center py-5">PROMOCIONES EXCLUSIVAS</h5>
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <p class="text-danger"><del class="text-muted fs-6">$50.00</del><strong class="fs-4">$45.00</strong></p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <p class="text-danger"><del class="text-muted fs-6">$50.00</del><strong class="fs-4">$45.00</strong></p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <p class="text-danger"><del class="text-muted fs-6">$50.00</del><strong class="fs-4">$45.00</strong></p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <p class="text-danger"><del class="text-muted fs-6">$50.00</del><strong class="fs-4">$45.00</strong></p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <p class="text-danger"><del class="text-muted fs-6">$50.00</del><strong class="fs-4">$45.00</strong></p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <p class="text-danger"><del class="text-muted fs-6">$50.00</del><strong class="fs-4">$45.00</strong></p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
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
        <h5 class="text-center py-5">OFERTAS</h5>
        <div class="row py-3">
            <div class="col-12 col-sm-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./assets/img/preoducto_demo.jpg" class="img-fluid rounded-start" alt="...">
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
                            <img src="./assets/img/preoducto_demo.jpg" class="img-fluid rounded-start" alt="...">
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
</section>

<!-- FOOTER -->
<footer class="w-100 py-4 flex-shrink-0">
    <div class="container-fluid info">
        <div class="container">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <a class="navbar-brand py-3" href="#"><img src="./assets/img/logo.png" alt="" width="150"></a>
                    <p class="small text-muted py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Get started</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Legales</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Get started</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Newsletter</h5>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <form action="#">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="correo electronico" aria-label="correo electronico" aria-describedby="button-addon2">
                            <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i>Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row bg-primary py-3">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-light">
                <p>Copyright PapeAndHome © 2022. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<script src="./assets/bootstrap-5.0.2/js/bootstrap.min.js"></script>
<script src="./assets/jquery-3.6.0.min.js"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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