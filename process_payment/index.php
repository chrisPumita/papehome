
<?php
require_once 'vendor/autoload.php';

MercadoPago\SDK::setAccessToken("YOUR_ACCESS_TOKEN");

$payment = new MercadoPago\Payment();
$payment->transaction_amount = (float)$_POST['transactionAmount'];
$payment->token = $_POST['token'];
$payment->description = $_POST['description'];
$payment->installments = (int)$_POST['installments'];
$payment->payment_method_id = $_POST['paymentMethodId'];
$payment->issuer_id = (int)$_POST['issuer'];

$payer = new MercadoPago\Payer();
$payer->email = $_POST['cardholderEmail'];
$payer->identification = array(
    "number" => $_POST['identificationNumber']
);
$payer->first_name = $_POST['cardholderName'];
$payment->payer = $payer;

$payment->save();

$response = array(
    'status' => $payment->status,
    'status_detail' => $payment->status_detail,
    'id' => $payment->id
);
echo json_encode($response);

?>
