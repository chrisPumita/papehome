<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            height: 100%;
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
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
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
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
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
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>            <div class="swiper-slide">
                <div class="card px-3">
                    <img src="./assets/img/preoducto_demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-body small">
                            <h5 class="card-title">Tijeras Economicas</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
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
    });
</script>
</body>
</html>