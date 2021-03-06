<?php
session_start();
if(!isset($_SESSION['cliente_name']))
{
    header('Location: ../login.php');
}
$titulo = "HOME - Pape Home";
$path = "../";
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "../includes_general/header.php" ?>
    <link rel="stylesheet" href="../assets/css/style-step.css">
    <title>Información de Envio</title>
</head>
<body>
<?php include "./nav.php" ?>
<section class="container py-3">
    <div class="row">
        <div class="col-md-12 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4>Mis Pedidos</h4>
                    </div>
                    <div class="col align-self-center text-end text-muted">Ultimos pedido</div>
                    <div class="row table-responsive">
                        <table class="table table-hover table-borderless">
                            <thead>
                            <tr>
                                <th scope="col">Pedido</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Forma de Pago</th>
                                <th scope="col">Envio</th>
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody id="containerPedidos">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="col-md-4">
            <div class="summary">
                <div>
                    <h5><b>Detalles de la Cuenta</b></h5>
                </div>
                <hr>
                <div class="row py-3">
                    <h6>Direccion por Defecto</h6>
                    <p>
                        Christian Pioquinto
                        Puerto Vallarta 17 Col. Juarez 2da Seccion
                        casa, zaguan cafe
                        54405 Nicolas Romero MEX
                        México
                    </p>
                </div>
                <hr>
                <div class="row py-3">
                    <a href="./direcciones.php" class="btn btn-success w-100" id="button-addon2" type="button">Ver Direcciones</a>
                </div>
            </div>
        </div>
        -->

    </div>
    <div class="row py-3">
        <div class="back-to-shop">
            <a href="./cart.php"><i class="fas fa-arrow-left"></i><span class="text-muted"> Regresar</span></a>
        </div>
    </div>
</section>
<?php include "../includes_general/footer.php" ?>
<?php include "../includes_general/js.php"?>
<script src="../service/account_home.js"></script>
</body>
</html>