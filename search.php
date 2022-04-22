<?php
$titulo = "HOME - Pape Home";
$path = "./"
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
<section class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Busqueda</li>
        </ol>
    </nav>
    <div class="container d-md-flex align-items-stretch">
        <nav class=" py-4 pt-5" id="sidebar">
            <div class="row">
                <h5 class="py-3">Marcas</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="marca1">
                    <label class="form-check-label" for="marca1">
                        Marca 1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="marca2">
                    <label class="form-check-label" for="marca2">
                        Marca 2
                    </label>
                </div>
            </div>
            <div class="row">
                <h5 class="py-3">Categories</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cat1">
                    <label class="form-check-label" for="cat1">
                        Categoria 1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cat2">
                    <label class="form-check-label" for="cat2">
                        Categoria 2
                    </label>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>Plumas Bic</h3>
                        <p class="card-text">$30 MXN de descuento</p>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Page Content  -->

        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <h2 class="navbar-brand" href="#">{#} resultados para {data}</h2>
                            <span class="navbar-text">
                                <select class="form-select" aria-label="Default select example">
                                  <option selected>Ordenar por</option>
                                  <option value="1">Mas popular</option>
                                  <option value="2">Ordenar AZ</option>
                                  <option value="3">Ordenar ZA</option>
                                </select>
                            </span>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="m-4 w-100">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-md-2  g-4">
                        <?php for ($i = 0; $i <8; $i++){ ?>
                        <div class="col">
                            <div class="card py-3  p-3">
                                <img src="./assets/img/default-image.jpg" class="card-img-top" alt="...">
                                <div class="small">
                                    <h5 class="card-title text-center">{Producto Name}</h5>
                                    <p class="text-danger"><del class="text-muted fs-6 mx-4">$50.00</del><strong class="fs-4">$45.00</strong></p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-success w-100" role="button"><i class="fas fa-cart-plus"></i> Agregar</button>
                                        </div>
                                        <div class="col-6">
                                            <a href="./product.php" class="btn btn-info w-100" type="submit"><i class="fas fa-list"></i> Ver</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "./includes_general/footer.php" ?>
<?php include "./includes_general/js.php" ?>

</body>
</html>