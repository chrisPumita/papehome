<div class="col-md-8 cart">
    <div class="title">
        <div class="row">
            <div class="col">
                <h4>Contacto</h4>
            </div>
            <div class="col align-self-center text-end text-muted">Sesión Activa</div>
            <div class="card mb-3 w-100">
                <div class="row g-0">
                    <div class="col-1 m-auto p-2">
                        <i class="fas fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $_SESSION['nombre_completo'] ?></h6>
                            <p class="card-text"><?php echo $_SESSION['email'] ?></p>
                        </div>
                    </div>
                    <div class="col-3 p-3">
                        <p class="card-text"><small class="text-muted">
                            <a href="./account/c_logout.php">No soy yo</a></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!--

<div class="row">
            <div class="col">
                <h4>Forma de Entrega</h4>
            </div>
            <div class="card mb-1 w-100">
                <div class="row g-0">
                    <div class="col-12 m-auto">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radBtnEnvio" id="radBtnEnvio1" checked>
                                <label class="form-check-label" for="radBtnEnvio1">
                                    Envio a domicilio
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
                                <input class="form-check-input" type="radio" name="radBtnEnvio" id="radBtnEnvio2" >
                                <label class="form-check-label" for="radBtnEnvio2">
                                    Retirar en trienda
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         -->
        
        <div class="row">
            <div class="col">
                <h4>Direccion de entrega</h4>
            </div>
            <div class="card mb-1 w-100">
                <div class="row g-0">
                    <div class="col-12 m-auto">
                        <div class="card-body">
                            <div class="row pt-3">
                                <form id="frm_registraDir">
                                    <div class="row">
                                        <div class="py-3" id="containerSelectDir"></div>
                                    </div>
                                    <h6 class="">Dirección</h6>
                                    <div class="row g-2">
                                        <div class="col-md">
                                        <input type="hidden" name="idDir" id="idDir" value="0">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de quien recibe">
                                                <label for="nombre">Nombre Recibe</label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
                                                <label for="apellidos">Apellidos</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2 py-2">
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono de quien recibe">
                                                <label for="telefono">Telefono</label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="celular" name="celular" placeholder="Apellidos">
                                                <label for="celular">Celular</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2 py-2">
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="empresa" name="empresa" placeholder="empresa de quien recibe">
                                                <label for="empresa">Empresa (opcional)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2 py-2">
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="calle_numero" name="calle_numero" placeholder="calle_numero de quien recibe">
                                                <label for="calle_numero">Calle y Número</label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Apellidos">
                                                <label for="colonia">Colonia</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2 py-2">
                                        <div class="col-md-2">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="cp" name="cp" placeholder="cp de quien recibe">
                                                <label for="cp">CP</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-floating">
                                                <div class="form-floating">
                                                    <select class="form-select" id="estado" name="estado" aria-label="Floating label select example">
                                                    <option selected>Seleccione uno...</option>
                                                    <option value="Aguascalientes">Aguascalientes</option>
                                                    <option value="Baja California">Baja California</option>
                                                    <option value="Baja California Sur">Baja California Sur</option>
                                                    <option value="Campeche">Campeche</option>
                                                    <option value="Chiapas">Chiapas</option>
                                                    <option value="Chihuahua">Chihuahua</option>
                                                    <option value="CDMX">Ciudad de México</option>
                                                    <option value="Coahuila">Coahuila</option>
                                                    <option value="Colima">Colima</option>
                                                    <option value="Durango">Durango</option>
                                                    <option value="Estado de México">Estado de México</option>
                                                    <option value="Guanajuato">Guanajuato</option>
                                                    <option value="Guerrero">Guerrero</option>
                                                    <option value="Hidalgo">Hidalgo</option>
                                                    <option value="Jalisco">Jalisco</option>
                                                    <option value="Michoacán">Michoacán</option>
                                                    <option value="Morelos">Morelos</option>
                                                    <option value="Nayarit">Nayarit</option>
                                                    <option value="Nuevo León">Nuevo León</option>
                                                    <option value="Oaxaca">Oaxaca</option>
                                                    <option value="Puebla">Puebla</option>
                                                    <option value="Querétaro">Querétaro</option>
                                                    <option value="Quintana Roo">Quintana Roo</option>
                                                    <option value="San Luis Potosí">San Luis Potosí</option>
                                                    <option value="Sinaloa">Sinaloa</option>
                                                    <option value="Sonora">Sonora</option>
                                                    <option value="Tabasco">Tabasco</option>
                                                    <option value="Tamaulipas">Tamaulipas</option>
                                                    <option value="Tlaxcala">Tlaxcala</option>
                                                    <option value="Veracruz">Veracruz</option>
                                                    <option value="Yucatán">Yucatán</option>
                                                    <option value="Zacatecas">Zacatecas</option>
                                                    </select>
                                                    <label for="estado">Estado</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-floating">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Apellidos">
                                                <label for="municipio">Municipio</label>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2 py-2">
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="referencias" name="referencias" placeholder="referencias de quien recibe">
                                                <label for="referencias">Otras referencias <small>(color de casa, entre calle y calle)</small></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2 py-2">
                                        <div class="col-12 col-md-6">
                                            <cite>
                                            <p class="small mb-0">Escriba su dirección y de clic en guardar</p>
                                            <p class="small  mb-0">Seleccione su dirección y de clic en guardar para actulizarla</p>
                                            </cite>
                                            
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="align-items-md-center d-flex">
                                            <button type="reset" class="btn btn-outline-primary ms-auto">
                                                    Nuevo
                                                </button>
                                                <button type="submit" class="btn btn-primary ms-auto">
                                                    Guardar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
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
        <?php
        for ($i = 0; $i <3; $i++){
            ?>
            <div class="row py-1">
                <div class="col">3 Productos</div>
                <div class="col text-right">&dollar; 132.00</div>
            </div>
        <?php } ?>
        <hr>
        <div class="row py-2">
            <div class="col"><strong>Subtotal</strong></div>
            <div class="col text-right text-danger"><strong>$ 00.00</strong></div>
        </div>
        <hr>
        <div class="row py-2">
            <div class="col"><strong>Total</strong></div>
            <div class="col text-right text-danger"><strong>$ 00.00</strong></div>
        </div>
        <div class="row py-3">
            <a href="./payment.php" class="btn btn-success w-100" id="button-addon2" type="button">Proceder al pago</a>
        </div>
    </div>
</div>