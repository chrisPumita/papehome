<?php
session_start();
$titulo = "HOME - Registro";
$path = "./"
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "./includes_general/header.php" ?>
    <title>Registrate Gratis</title>
</head>
<body>
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">
                    <a href="./index.php">
                        <img src="./assets/img/logo.png" alt="logo" width="250">
                    </a>
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4 text-center">Crear Cuenta</h1>
                        <form id="frm-new-account" class="needs-validation" novalidate="" autocomplete="off">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="nombre">Nombre</label>
                                <input id="nombre" type="text" class="form-control" name="nombre" value="" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="app">Primer Apellido</label>
                                <input id="app" type="text" class="form-control" name="app" value="" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="apm">Segundo Apellido</label>
                                <input id="apm" type="text" class="form-control" name="apm" value="" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="" required>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="password">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="off">
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="r_password">Repetir Contraseña</label>
                                <input id="r_password" type="password" class="form-control" name="r_password" required autocomplete="off">
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>
                            <p class="form-text text-muted mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="chkTerms">
                                <label class="form-check-label" for="chkTerms">
                                    He leido los terminos y condiciones
                                </label>
                            </p>

                            <div class="align-items-center d-flex">
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Registrar
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            ¿Ya tienes una cuenta? <a href="./login.php" class="text-dark">Iniciar Sesión</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright PapeAndHome © 2022. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "./includes_general/js.php" ?>
<script src="./service/registro.js"></script>
</body>
</html>