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
            <div class="col-12 col-md-12">
                <div class="card text-center">
                    <div class="card-header">
                        PEDIDOS REALIZADOS
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped ">
                                <thead>
                                <tr>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Pago</th>
                                    <th scope="col">Envio</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($i = 0; $i <5; $i++){?>
                                <tr>
                                    <th scope="row">14 Jun 2022</th>
                                    <td>Cliente Name</td>
                                    <td>Pendiente</td>
                                    <td>Surtiendo</td>
                                    <td>$1400</td>
                                    <td>
                                        <span role="button" class="me-2"><i class="fas fa-eye"></i></span>
                                    </td>
                                </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        0 pedidos realizados
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-12 col-md-12">
                <div class="card text-center">
                    <div class="card-header">
                        INGRESO RAPIDO DE PRODUCTOS
                    </div>
                    <div class="card-body">
                        <div class="row py-3">
                            <form id="frm_ingresa_producto">
                            <div class="col-12">
                                    <span class="input-group-text"><i class="fas fa-truck-loading"></i>   Informacion General</span>
                                    <div class="d-flex">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Proveedor</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <input type="number"aria-label="Last name" class="form-control" min="1" max="10000" placeholder="Costo de Envio" required>
                                    </div>
                            </div>
                            <div class="col-12">
                                        <span class="input-group-text"><i class="fas fa-barcode"></i>  Escanear codigo de barra o SKU</span>
                                        <input type="text" aria-label="First name" class="col-4 form-control" placeholder="Escanee codigo o escriba SKU" required>
                                        <div class="d-flex">
                                            <input type="number"aria-label="Last name" class="form-control" min="1" max="10000" placeholder="Cantidad" required>
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-boxes"></i> $ 50</span>
                                            <input type="number"aria-label="Last name" class="form-control" min="1" max="10000" placeholder="Costo Compra" required>
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-cash-register text-success"></i> $ 50</span>
                                            <input type="number"aria-label="Last name" class="form-control" min="1" max="10000" placeholder="Costo Venta" required>
                                        </div>
                                    <div class="row">
                                        <div class="col py-3">
                                            <input type="reset" class="btn btn-secondary" value="Nuevo">
                                            <input type="submit" class="btn btn-success" value="Registrar">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row py-3">

                        </div>
                        <div class="row">
                            <h6>Ultimos agregados</h6>
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
<?php include "../includes_general/js.php" ?>
<script src="../service/admin/home.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
</html>