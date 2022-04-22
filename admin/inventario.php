<?php include('../includes_accounts/sesion_admin.php');
$titulo = "HOME - Pape Home";
$path = "../";
?>
<!doctype html>
<html lang="en">
<head>
    <?php include "../includes_general/header.php" ?>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>

</head>
<body>
<?php include "./_nav.php"?>
<section>
    <div class="container">
        <div class="row py-3">
            <div class="col">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNewProduct" data-bs-id="0" data-bs-action="Agregar" >
                    Nuevo Producto
                </button>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-12 col-md-12">
                <div class="card text-center">
                    <div class="card-header">
                        PRODUCTOS
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped" id="tblProductos" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th scope="col">SKU/BARCODE</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Presentacion</th>
                                    <th scope="col">Costo</th>
                                    <th scope="col">Inventario</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        0 pedidos realizados
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>



<?php
include "../includes_general/js.php";
include "_modal_agregaProducto.php";
include "_modal_fotos_producto.php";
?>

<script src="../service/admin/productos.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
</html>