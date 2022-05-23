<?php
session_start();
if(!isset($_SESSION['cliente_name']))
{
    header('Location: ./login.php');
}
$titulo = "HOME - Pago";
$path = "./";
$dir = $_GET['dir'];
echo "<script> var ID_DIR = ".$dir."</script>";
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
            <li class="breadcrumb-item"><a href="./informacion.php">Información</a></li>
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
                                <div class="card-body" id="cardContacto">
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
                                <div class="card-body" id="cardDir">
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
                    <div class="card mb-1 w-100" >
                        <div class="row g-0">
                            <div class="col-12 m-auto">
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" checked name="radBtnEnvio" id="radBtnEnvio2"
                                               value="paypal"  onclick="radioSelect();">
                                        <label class="form-check-label" for="radBtnEnvio2">
                                            Pagar con  <i class="fab fa-paypal"></i>

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-1 w-100">
                        <div class="row g-0">
                            <div class="col-12 m-auto">
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radBtnEnvio" id="radBtnEnvio1"
                                               value="sucursal"  onclick="radioSelect();">
                                        <label class="form-check-label" for="radBtnEnvio1">
                                            Pagar en Sucursal
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
                                        <input class="form-check-input" type="radio" name="radBtnEnvio" id="radBtnEnvio3"
                                               value="deposito"  onclick="radioSelect();">
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
                        <div class="row g-0" id="pagoSelectContainer">
                            <div class="card">
                                <div class="card-header">
                                    Pagar con PayPal
                                </div>
                                <div class="card-body">
                                    <div id="smart-button-container">
                                        <div style="text-align: center;">
                                            <div id="paypal-button-container"></div>
                                        </div>
                                    </div>

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
                <div class="row py-3" id="container"></div>
                <hr>
                <div class="row py-3" id="subtotalBox">
                </div>
                <div class="row py-3" id="totalEnvio">
                </div>
                <hr>
                <div class="row py-3" id="totalBox">
                </div>
                <div class="row py-3" id="btnConfirm" >

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
<script src="./service/resume_cart.js"></script>
<script src="./service/pago.js"></script>

<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=MXN" data-sdk-integration-source="button-factory"></script>
<script>
    function initPayPalButton() {
        paypal.Buttons({
            style: {
                shape: 'rect',
                color: 'blue',
                layout: 'horizontal',
                label: 'paypal',

            },

            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{"amount":{"currency_code":"MXN","value":1}}]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {

                    // Full available details
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                    // Show a success message within this page, e.g.
                    const element = document.getElementById('paypal-button-container');
                    element.innerHTML = '';
                    element.innerHTML = '<h3>Thank you for your payment!</h3>';

                    // Or go to another URL:  actions.redirect('thank_you.html');

                });
            },

            onError: function(err) {
                console.log(err);
            }
        }).render('#paypal-button-container');
    }
    initPayPalButton();
</script>
</body>
</html>