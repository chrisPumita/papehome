<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "./includes/header.php" ?>
    <link rel="stylesheet" href="assets/css/style-step.css">
    <title>Información de Envio</title>
</head>
<body>
<?php include "./includes/nav.php" ?>
<section class="container py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Inicio</a></li>
            <li class="breadcrumb-item"><a href="./cart.php">Carrito</a></li>
            <li class="breadcrumb-item active" aria-current="page">Información</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4>Contacto</h4>
                    </div>
                    <div class="col align-self-center text-end text-muted">Sesión Activa</div>
                    <div class="card mb-3 w-100">
                        <div class="row g-0">
                            <div class="col-1 m-auto p-2">
                                <i class="fas fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h6 class="card-title">Pioquinto Hernandez Christian René</h6>
                                    <p class="card-text">correo@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-3 p-3">
                                <p class="card-text"><small class="text-muted"><a href="">No soy yo</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <h4>Forma de Entrega</h4>
                    </div>
                    <div class="card mb-1 w-100">
                        <div class="row g-0">
                            <div class="col-12 m-auto">
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radBtnEnvio" id="radBtnEnvio1" checked>
                                        <label class="form-check-label" for="radBtnEnvio1">
                                            Envio a domicilio
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
                                        <input class="form-check-input" type="radio" name="radBtnEnvio" id="radBtnEnvio2" >
                                        <label class="form-check-label" for="radBtnEnvio2">
                                            Retirar en trienda
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Direccion de entrega</h4>
                    </div>
                    <div class="card mb-1 w-100">
                        <div class="row g-0">
                            <div class="col-12 m-auto">
                                <div class="card-body py-5">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Registrar una nueva dirección</option>
                                        <option value="1">Direccion 1</option>
                                        <option value="2">Direccion 2</option>
                                        <option value="3">Direccion 3</option>
                                    </select>
                                    <h6 class="">Dirección</h6>
                                    <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                        <div class="row g-2">
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="Nombre de quien recibe">
                                                    <label for="floatingInputGrid">Nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="Apellidos">
                                                    <label for="floatingInputGrid">Apellidos</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2 py-2">
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="Nombre de quien recibe">
                                                    <label for="floatingInputGrid">Telefono</label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="Apellidos">
                                                    <label for="floatingInputGrid">Celular</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2 py-2">
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="Nombre de quien recibe">
                                                    <label for="floatingInputGrid">Empresa (opcional)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2 py-2">
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="Nombre de quien recibe">
                                                    <label for="floatingInputGrid">Calle y Número</label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="Apellidos">
                                                    <label for="floatingInputGrid">Colonia</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2 py-2">
                                            <div class="col-md-2">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="Nombre de quien recibe">
                                                    <label for="floatingInputGrid">CP</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-floating">
                                                    <div class="form-floating">
                                                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                                            <option selected>Seleccione su estado</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Estado</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-floating">
                                                    <div class="form-floating">
                                                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                                            <option selected>Seleccione su municipio</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Municipio</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2 py-2">
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="Nombre de quien recibe">
                                                    <label for="floatingInputGrid">Otras referencias <small>(color de casa, entre calle y calle)</small></label>
                                                </div>
                                            </div>
                                        </div>
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
                                                    <button type="submit" class="btn btn-primary ms-auto">
                                                        Guardar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
                <div class="row py-3">
                    <a href="./payment.php" class="btn btn-success w-100" id="button-addon2" type="button">Proceder al pago</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-3">
        <div class="back-to-shop">
            <a href="./cart.php"><i class="fas fa-arrow-left"></i><span class="text-muted"> Regresar</span></a>
        </div>
    </div>
</section>
<?php include "./includes/footer.php"?>
<?php include "./includes/js.php"?>

</body>
</html>