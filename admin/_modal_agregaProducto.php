<!-- Modal -->
<div class="modal  fade" id="modalNewProduct" tabindex="-1" aria-labelledby="modalNewProductLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ACTIONS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frm_producto">
                    <input type="hidden" class="form-control" id="recipient-name" name="recipient-name">
                    <div class="row">
                        <div class="col-12 col-md-6 pt-2">
                            <div class="form-floating">
                                <select class="form-select" id="listCategorias" name="listCategorias" aria-label="Floating label select example">
                                </select>
                                <label for="listCategorias">Seleccione una categoria</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pt-2">
                            <div class="form-floating">
                                <select class="form-select" id="listMarcas" name="listMarcas" aria-label="Floating label select example">
                                </select>
                                <label for="listMarcas">Seleccione una marca</label>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="sku" name="sku" placeholder="SKU" required>
                                <label for="sku">SKU</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="BarCode" name="BarCode" placeholder="Codigo de Barra">
                                <label for="BarCode">Codigo de Barra</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="col-12 pt-2">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="nombre" name="nombre" required></textarea>
                                    <label for="nombre">Nombre del Producto</label>
                                </div>
                            </div>
                            <div class="col-12 pt-2">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="descripcion" name="descripcion"  required style="height: 100px"></textarea>
                                    <label for="descripcion">Descripcion del Producto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row pt-2">
                                <div class="col-4">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="almacenMinimo" name="almacenMinimo" value="1" min="0" max="1000" step="0.01" >
                                        <label for="BarCode">Minimo</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="stock" name="stock" value="1" min="0" max="1000">
                                        <label for="stock">Almacen</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="listPresentacion" name="listPresentacion" aria-label="Floating label select example">
                                            <option value="PIEZA">PIEZA</option>
                                            <option value="CAJA">CAJA</option>
                                            <option value="PAQUETE">PAQUETE</option>
                                        </select>
                                        <label for="listCategorias">Presentacion</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="costo" name="costo" value="0" min="0" max="100000" step="0.01" >
                                        <label for="costo">Costo</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="descuento" name="descuento" placeholder="descuento" value="0" min="0" max="100000" step="0.01" >
                                        <label for="descuento">Descuento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3">
                                <hr>
                                <div class="col d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
