<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "./header.php" ?>
    <link rel="stylesheet" href="../assets/css/style-step.css">
    <title>Orden</title>
</head>
<body>
<?php include "./nav.php" ?>
<section class="container py-3">
    <div class="row">
        <div class="col-md-12 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h5>Pedido #28259</h5>
                    </div>
                    <div class="col align-self-center text-end text-muted">3 marxo 2022, 21:02</div>
                    <div class="row table-responsive py-3">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">SKU</th>
                                <th class="text-right" scope="col">Precio</th>
                                <th class="text-right" scope="col">Cantidad</th>
                                <th class="text-right" scope="col">Total</th>
                            </tr>
                            </thead>
                            <tbody><tr id="10155637112910">
                                <th class="order-table__product" scope="row" data-label="Producto">
                                    <div>
                                        <a href="" title="">Producto NAME</a>
                                    </div>
                                    <div>Detalles y notas
                                        <div>
                                            <a href="https://www.estafeta.com/"> Rastrear envío </a>
                                            <div>
                                                Other
                                                #3791069894
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <td data-label="SKU">1561</td>
                                <td class="text-right" data-label="Precio">$ 1,499.00

                                </td>
                                <td class="text-right" data-label="Cantidad">1</td>
                                <td class="text-right" data-label="Total">$ 1,499.00
                                </td>
                            </tr></tbody>
                            <tfoot>
                            <tr>
                                <th class="small--hide" scope="row" colspan="4">Subtotal</th>
                                <td class="text-right" data-label="Subtotal">$ 1,499.00</td>
                            </tr><tr>
                                <th class="small--hide" scope="row" colspan="4">Envíos (Envio Gratis Por Promoción)</th>
                                <td class="text-right" data-label="Envíos (Envio Gratis Por Promoción)">$ 0.00</td>
                            </tr><tr>
                                <th class="small--hide" scope="row" colspan="4"><strong>Total</strong></th>
                                <td class="text-right" data-label="Total"><strong>$ 1,499.00 MXN</strong></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
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