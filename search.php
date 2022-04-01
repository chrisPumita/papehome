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
            <div class="carousel-item active" data-bs-interval="2000">
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
            <div class="carousel-item" data-bs-interval="2000">
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
    <div class="container d-md-flex align-items-stretch">
        <nav id="sidebar">
            <div class="row">
                <h5>Categories</h5>
                <ul class="dropdown-menu">
                    <li><h6 class="dropdown-header">Dropdown header</h6></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
            </div>
            <div class="p-4 pt-5">
                <h5>Categories</h5>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Mens Shoes</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu1">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Casual</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Football</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jordan</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Lifestyle</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Running</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Soccer</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sports</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Mens Shoes</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu2">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Casual</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Football</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jordan</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Lifestyle</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Running</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Soccer</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sports</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Accessories</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu3">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Nicklace</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Ring</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Bag</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sacks</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Lipstick</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Clothes</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu4">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jeans</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> T-shirt</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jacket</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Shoes</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sweater</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Sidebar #08</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</section>
<?php include "./includes/footer.php"?>
<?php include "./includes/js.php"?>

</body>
</html>