<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "./header.php" ?>
    <link rel="stylesheet" href="../assets/css/style-step.css">
    <title>Información de Envio</title>
</head>
<body>
<?php include "./nav.php" ?>
<section class="container py-3">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4>Mis Pedidos</h4>
                    </div>
                    <div class="col align-self-center text-end text-muted">Ultimo pedido</div>
                    <div class="row table-responsive">
                        <table class="table table-hover table-borderless">
                            <thead>
                            <tr>
                                <th scope="col">Pedido</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Estado del Pago</th>
                                <th scope="col">Envio</th>
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  for ($i = 0; $i <5; $i++) { ?>
                            <tr>
                                <th scope="row">#156165</th>
                                <td>14 de Marzo de 2022</td>
                                <td>Pagado</td>
                                <td>Esperando Pago</td>
                                <td>$600</td>
                                <td>
                                    <a href="./order.php"type="button" class="btn btn-primary">Ver</a>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
    </div>
    <div class="row py-3">
        <div class="back-to-shop">
            <a href="./cart.php"><i class="fas fa-arrow-left"></i><span class="text-muted"> Regresar</span></a>
        </div>
    </div>
</section>
<?php include "../includes/footer.php"?>
<?php include "./js.php"?>

</body>
</html>