<?php
session_start();
$titulo = "HOME - Pape Home";
$path = "../";
$IdPedido = $_GET["idPedido"];
echo "<script>let ID_PEDIDO = ".$IdPedido.";</script>";
?>


<!doctype html>
<html lang="en">
<head>
    <?php include "../includes_general/header.php" ?>
    <link rel="stylesheet" href="../assets/css/style-step.css">

</head>
<body>
<?php include "./nav.php" ?>
<section class="container py-3">
    <div class="row">
        <div class="col-md-12 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h5>Pedido # <strong id="lblIdPedido"></strong></h5>
                    </div>
                    <div class="col align-self-center text-end text-muted" id="lblFecha"></div>
                    <div class="row table-responsive py-3">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">SKU</th>
                                <th class="text-right" scope="col">Precio U</th>
                                <th class="text-right" scope="col">Descuento</th>
                                <th class="text-right" scope="col">Cantidad</th>
                                <th class="text-right" scope="col">Total</th>
                            </tr>
                            </thead>
                            <tbody id="contanerProductos">

                            </tbody>
                            <tfoot>
                            <tr>
                                <th class="small--hide" scope="row" colspan="4">Subtotal</th>
                                <td class="text-right"><span id="lblSubtotal"></span></td>
                            </tr>
                            <tr>
                                <th class="small--hide" scope="row" colspan="4">IVA</th>
                                <td class="text-right"><span id="lblIva"></span></td>
                            </tr>
                            <tr>
                                <th class="small--hide" scope="row" colspan="4" id="lblTextEnvio"></th>
                                <td class="text-right"><span id="lblEnvio"></span></td>
                            </tr><tr>
                                <th class="small--hide" scope="row" colspan="4"><strong>Total</strong></th>
                                <td class="text-right"><strong id="lblTotal"></strong></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!--
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Estado del Pago</h5>
                                    <p class="card-text">PAGADO</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto atque blanditiis distinctio error est eveniet fuga maiores modi necessitatibus, nostrum perspiciatis placeat quas quasi quibusdam quisquam reprehenderit saepe tenetur!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Estado de Envio</h5>
                                    <p class="card-text">Direccion por Defecto
                                        Christian Pioquinto Puerto Vallarta 17 Col. Juarez 2da Seccion casa, zaguan cafe 54405 Nicolas Romero MEX México</p>
                                    <a href="#" class="btn btn-primary">Reastrear</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->

                </div>
            </div>
        </div>
    </div>
    <div class="row py-3">
        <div class="back-to-shop">
            <a href="./"><i class="fas fa-arrow-left"></i><span class="text-muted"> Regresar</span></a>
        </div>
    </div>
</section>
<?php include "../includes_general/footer.php" ?>
<?php include "../includes_general/js.php"?>
<script src="../service/details_pedido.js"></script>
</body>
</html>