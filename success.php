<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "./includes_general/header.php" ?>
    <link rel="stylesheet" href="assets/css/style-step.css">
    <title>Compra Realizada con exito</title>

</head>
<body>
<?php include "./includes_general/nav.php" ?>
<section class="container py-3">
    <div class="row">
        <div class="cart">
            <div class="col-md-6 mx-auto mt-5">
                <div class="payment">
                    <div class="payment_header">
                        <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                    </div>
                    <div class="content p-3">
                        <h1>Pago realizado</h1>
                        <div class="card mb-1 text-start">
                            <div class="row px-3">
                                <div class="col-2 m-auto px-2">
                                    <strong>PEDIDO</strong>
                                </div>
                                <div class="col-10">
                                    <div class="card-body">
                                        <p class="card-text">15615615</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1 w-100">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="card-body">
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Ab animi neque voluptatem voluptates. Autem laudantium qui sed ullam voluptate!
                                            At blanditiis dicta, impedit iusto nemo quos repellendus tenetur voluptatem
                                            voluptatibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary my-3">Ver mis Pedidos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "./includes_general/footer.php" ?>
<?php include "./includes_general/js.php" ?>

</body>
</html>