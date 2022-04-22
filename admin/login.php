<?php
session_start();
$titulo = "HOME - Pape Home";
$path = "../";
// El siguiente key se crea cuando se inicia sesión
$_SESSION["idSesion"] = session_id();
if(isset($_SESSION['admin_name']))
{
    //Si ya existe una sesion reedirecciona a home
    header('Location: ./index.php');
}
?>
<!-- ----- VERSION DEL DOCUMENTO ---------
    VERSION 1.04.1 BUILD 14/04/2022
    @autor: ReCkrea StuDios
    @website: reckreastudios.com
    @webdevs: ChrisRCGS, Fernando HL, Cesar HPP.
    -->

<!doctype html>
<html lang="en">
<head>
    <?php include "../includes_general/header.php" ?>
    <title>ACCESO ADMINISTRADOR</title>
</head>
<body>
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">
                    <a href="../index.php">
                        <img src="../assets/img/logo.png" alt="logo" width="250">
                    </a>
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4 text-center">Inicio para administradores</h1>
                        <form id="frm_login_admin" class="needs-validation" novalidate="" autocomplete="off">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="correo">Correo</label>
                                <input id="correo" type="email" class="form-control" name="correo"required>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="password">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="false" >
                            </div>
                            <div class="align-items-center d-flex">
                                <button class="btn btn-primary mr-3 mt-3 mb-3" type="submit">
                                    <i class="fas fa-check-circle"></i> Iniciar
                                </button>
                            </div>
                        </form>
                        <div id="resp"></div>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright PapeAndHome © 2022. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "../includes_general/js.php" ?>
<script src="../service/admin/login_admin.js"></script>
</body>
</html>