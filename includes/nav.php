<div id="carouselPromos" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active bg-primary" data-bs-interval="5000">
            <p class="text-center text-light my-1">
                Envio Gratis en compras Mayores a $500
            </p>
        </div>
        <div class="carousel-item bg-danger" data-bs-interval="5000">
            <p class="text-center text-light my-1">
                Oferta en Papel</p>
        </div>
        <div class="carousel-item bg-info">
            <p class="text-center text-light my-1">
                Compra en linea y recoge en tienda
            </p>
        </div>
    </div>
</div>
<div class="container  bg-light">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./"><img src="./assets/img/logo.png" alt="" width="150"></a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <button type="button" class="btn position-relative">
                        <i class="fas fa-shopping-cart"></i> Carrito
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        4
                        <span class="visually-hidden">unread messages</span>
                      </span>
                    </button>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> Cuenta
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
            <a class="navbar-brand" href="#"><i class="fas fa-home"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black-50 fs-6" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" >
                            Categorias
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="./search.php">Categoria 1</a></li>
                            <li><a class="dropdown-item" href="./search.php">Categoria 1</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="./search.php">Categoria 1</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" aria-current="page" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="#">Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fs-6" href="#" tabindex="-1" aria-disabled="true">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </nav>
</div>