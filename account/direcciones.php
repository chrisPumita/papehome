<?php
session_start();
if(!isset($_SESSION['cliente_name']))
{
    header('Location: ../login.php');
}
$titulo = "HOME - Direciones";
$path = "../";
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "../includes_general/header.php" ?>
    <link rel="stylesheet" href="../assets/css/style-step.css">
    <title>Direcciones</title>
</head>
<body>
<?php include "./nav.php" ?>
<section class="container py-3">
    <div class="row">
        <div class="col-md-12 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h5>Mis direcciones</h5>
                    </div>
                    <div class="col align-self-center text-end text-muted">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_new_address">Agregar</a>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php for ($i = 0; $i <5; $i++){ ?>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <span class="badge bg-secondary position-absolute end-0 mx-3">PRINCIPAL</span></h1>
                                    <h6 class="card-title">CASA</h6>
                                    <p class="card-text">
                                        Christian Pioquinto
                                        Puerto Vallarta 17 Col. Juarez 2da Seccion
                                        casa, zaguan cafe
                                        54405 Nicolas Romero MEX
                                        México
                                    </p>
                                    <button type="button" class="btn btn-primary">Editar</button>
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-3">
        <div class="back-to-shop">
            <a href="./"><i class="fas fa-arrow-left"></i><span class="text-muted"> Mis Pedidos</span></a>
        </div>
    </div>
</section>
<?php
    include "../includes_general/footer.php";
    include "../includes_general/js.php";
    include "./modal_address.php";
?>

</body>
</html>