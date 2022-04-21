<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "./includes_general/header.php" ?>
    <link rel="stylesheet" href="assets/css/style-step.css">
    <title>Pagar pedido</title>
</head>
<body>
<?php include "./includes_general/nav.php" ?>
<section class="container py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Inicio</a></li>
            <li class="breadcrumb-item"><a href="./cart.php">Carrito</a></li>
            <li class="breadcrumb-item"><a href="./cart.php">Información</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pago</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4>Resumen del Pedido</h4>
                    </div>
                    <div class="card mb-1 w-100">
                        <div class="row g-0">
                            <div class="col-2 m-auto pxx-2">
                                <i class="fas fa-user" aria-hidden="true"></i> Contacto
                            </div>
                            <div class="col-10">
                                <div class="card-body">
                                    <h6 class="card-title">Pioquinto Hernandez Christian René</h6>
                                    <p class="card-text">correo@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-1 w-100">
                        <div class="row g-0">
                            <div class="col-2 m-auto px-2">
                                <i class="fas fa-truck"></i> Enviar a:
                            </div>
                            <div class="col-10">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Ab animi neque voluptatem voluptates. Autem laudantium qui sed ullam voluptate!
                                        At blanditiis dicta, impedit iusto nemo quos repellendus tenetur voluptatem
                                        voluptatibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <h4>Pago</h4>
                    </div>
                    <div class="card mb-1 w-100">
                        <div class="row g-0">
                            <div class="col-12 m-auto">
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radBtnEnvio" id="radBtnEnvio1" checked>
                                        <label class="form-check-label" for="radBtnEnvio1">
                                            Pagar en Sucursal
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-1 w-100" >
                        <div class="row g-0">
                            <div class="col-12 m-auto">
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radBtnEnvio" id="radBtnEnvio2" >
                                        <label class="form-check-label" for="radBtnEnvio2">
                                            Pagar con  <i class="fab fa-paypal"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 w-100" >
                        <div class="row g-0">
                            <div class="col-12 m-auto">
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radBtnEnvio" id="radBtnEnvio3" >
                                        <label class="form-check-label" for="radBtnEnvio3">
                                            Depósito / Transferencia Bancaria
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-1 w-100">
                        <div class="row g-0">
                            <div class="card">
                                <div class="card-header">
                                    Información de la Sucursal.
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary"> <i class="fas fa-map-marker-alt"></i> Ver Ubicación</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row g-2 py-2">
                        <div class="col-6">
                            <p class="form-text text-muted mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="chkTerms">
                                <label class="form-check-label" for="chkTerms">
                                    He leido los terminos y condiciones
                                </label>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="align-items-center d-flex">
                                <a href="./success.php" class="btn btn-success w-100" id="button-addon2" type="button">Confirmar Compra</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="summary">
                <div>
                    <h5><b>Resumen del Pedido</b></h5>
                </div>
                <hr>
                <div class="row py-3">
                    <div class="col"><strong>Producto</strong></div>
                    <div class="col text-right"><strong>Costo</strong></div>
                </div>
                <?php
                for ($i = 0; $i <3; $i++){
                    ?>
                    <div class="row py-1">
                        <div class="col">3 Productos</div>
                        <div class="col text-right">&dollar; 132.00</div>
                    </div>
                <?php } ?>
                <hr>
                <div class="row py-2">
                    <div class="col"><strong>Subtotal</strong></div>
                    <div class="col text-right text-danger"><strong>$ 00.00</strong></div>
                </div>
                <hr>
                <div class="row py-2">
                    <div class="col"><strong>Total</strong></div>
                    <div class="col text-right text-danger"><strong>$ 00.00</strong></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-3">
        <div class="back-to-shop">
            <a href="./informacion.php"><i class="fas fa-arrow-left"></i><span class="text-muted"> Regresar</span></a>
        </div>
    </div>
</section>
<?php include "./includes_general/footer.php" ?>
<?php include "./includes_general/js.php" ?>

</body>
</html>