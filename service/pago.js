$( document ).ready(function() {
    cargaDir();
});

function cargaDir() {
    loadDirecciones(ID_DIR).then(function (result) {
        let dir = result.data[0];
        console.log(dir);

        var templateContacto = `<h6 class="card-title">${dir.nombre+" "+dir.apellidos}</h6>
                            <p class="card-text">correo@gmail.com</p>`;
        var templateDir = `<p class="card-text">Calle ${dir.calle}, Col. ${dir.colonia}, CP. ${dir.cp}, ${dir.municipio}, ${dir.estado} </p>`;
        $("#cardContacto").html(templateContacto);
        $("#cardDir").html(templateDir);
    });
}

function radioSelect() {
    let valor = $('input:radio[name=radBtnEnvio]:checked').val();
    let template = "";
    console.log(valor);
    switch (valor) {
        case 'sucursal':
            template = `<div class="card">
                                <div class="card-header">
                                    Información de la Sucursal.
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Relizar su pago en nuestra Sucursal</h5>
                                    <p class="card-text">A Teoloyucan Km 2.5, San Sebastian Xhala, 54714 Cuautitlán Izcalli, Méx.</p>
                                    <a href="https://goo.gl/maps/bupT7gamcEPkjwyu8" target="_blank" class="btn btn-primary"> <i class="fas fa-map-marker-alt"></i> Ver Ubicación</a>
                                    <div class="row">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6317.602663545103!2d-99.18879067601395!3d19.692646187839376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21fe02541babb%3A0x13d9c1b986e25ecc!2sFacultad%20de%20Estudios%20Superiores%20Cuautitl%C3%A1n!5e0!3m2!1ses-419!2smx!4v1653274071206!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>`;
            break;
        case 'paypal':
            location.reload();
            break;
        case 'deposito':
            template = `<div class="card">
                                <div class="card-header">
                                    Información de la Cuenta.
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Relizar pago en Bancomer</h5>
                                    <p class="card-text">Numero de Cuenta: <strong>1451561516156561</strong></p>
                                    <div class="col">
                                        <img class="img-thumbnail" src="./assets/img/bbva.png" alt="">
                                    </div>
                                </div>
                            </div>`;
            break;
    }
    $("#pagoSelectContainer").html(template);
}

function confirmaVenta() {
    if( $('#chkTerms').prop('checked') ) {
        let idDir = ID_DIR;
        let formaPago = $('input:radio[name=radBtnEnvio]:checked').val();
        guardaVenta(idDir,formaPago).then(function(rest){
            console.log(rest);
            if(rest.response == 1){
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Pedido confirmado',
                    showConfirmButton: false,
                    timer: 1500
                })
                setTimeout( function() {
                    window.location.href = "./success.php?idPedido="+rest.idPedido;
                    }, 1500 );
            }
        })
    }
    else{
        Swal.fire(
            'Acepte los Terminos y Condiciones',
            'Necesita aceptar los terminos y condiciones para procesar la venta',
            'warning'
        )
    }
}