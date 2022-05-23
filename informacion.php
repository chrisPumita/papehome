<?php
session_start();
$titulo = "HOME - Informacion de envio";
$path = "./"
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "./includes_general/header.php" ?>
    <link rel="stylesheet" href="assets/css/style-step.css">
    <title>Información de Envio</title>
</head>
<body>
<?php include "./includes_general/nav.php" ?>
<section class="container py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Inicio</a></li>
            <li class="breadcrumb-item"><a href="./cart.php">Carrito</a></li>
            <li class="breadcrumb-item active" aria-current="page">Información</li>
        </ol>
    </nav>
    <div class="row">
        <!-- DINAMIC SESSION -->
        <?php 
            if (!isset($_SESSION['cliente_name'])) {
                include_once ("./information_login.php");
            } else {
                include_once ("./information_sesion_start.php");
            }
        ?>
        <!-- END DINAMIC SESSION -->
    </div>
    <div class="row py-3">
        <div class="back-to-shop">
            <a href="./cart.php"><i class="fas fa-arrow-left"></i><span class="text-muted"> Regresar</span></a>
        </div>
    </div>
</section>

<?php include "./includes_general/footer.php" ?>
<?php include "./includes_general/js.php" ?>
        <!-- DINAMIC SESSION -->
        <?php 
            if (!isset($_SESSION['cliente_name'])) {
                echo '<script src="./service/login.js"></script>';
            } else {
                echo '<script src="./service/info_address.js"></script>
                        <script src="./service/resume_cart.js"></script>';
            }
        ?>
        <!-- END DINAMIC SESSION -->
</body>
</html>