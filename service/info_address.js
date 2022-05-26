$( document ).ready(function() {
    cargaDirecciones();
});

var DIRECCIONES;

function cargaDirecciones() {
    loadDirecciones(0).then(function (result) {
        DIRECCIONES = result.data;
        selectDirHTML(DIRECCIONES);
    });
}

function selectDirHTML(lista) {
    let template = ``;
    if (lista != null) {

        template += `<select class="form-select" aria-label="Default select example" 
                            id="select_dir" onchange="loadDirForm(this)">
                             <option value="none" selected>Registrar una nueva dirección</option>`;
        lista.forEach(
            dir=>{
        
                template += `<option value="${dir.id_dir}">${dir.calle}, ${dir.colonia}, ${dir.municipio}, ${dir.estado}</option>`;
            }
          );
        template += `</select>`;
    } else {
        template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Agreue una direccion </strong> Porfavor agrege la direción de envio
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
    }

      $("#containerSelectDir").html(template);
}


function loadDirForm(obj) {
    let dirSelect = $('#select_dir').val();
    if (dirSelect === "none") {
        $('#frm_registraDir')[0].reset();
        $("#btnConfirm").html(``);
    } else {
        let tmpDir = DIRECCIONES.find(element => element.id_dir == dirSelect);
        $("#idDir").val(tmpDir.id_dir);
        $("#apellidos").val(tmpDir.apellidos);
        $("#calle_numero").val(tmpDir.calle);
        $("#celular").val(tmpDir.celular);
        $("#colonia").val(tmpDir.colonia);
        $("#cp").val(tmpDir.cp);
        $("#empresa").val(tmpDir.empresa);
        $("#estado").val(tmpDir.estado);
        $("#municipio").val(tmpDir.municipio);
        $("#nombre").val(tmpDir.nombre);
        $("#referencias").val(tmpDir.referencias);
        $("#telefono").val(tmpDir.telefono);
        let idDir = $("#select_dir").val();
        $("#btnConfirm").html(`<a href="./payment.php?dir=${idDir}" class="btn btn-primary" type="button">Proceder al pago</a>`);
    }
}


$("#frm_registraDir").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "./webhook/direccion_update_create.php",
        data: $('#frm_registraDir').serialize(),
        dataType: "json",
        success: function (result) {
    
            if(result.response=="1"){
                $('#frm_registraDir')[0].reset();
                notificacion("success",result.mensaje);
                cargaDirecciones();
            }
            else{
                let alerta =  `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <p>${result.mensaje}</p>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                $("#no_vendedor").focus();
                $('#resp').html(alerta).show(200).delay(2500).hide(200);

            }
        },
        error: function(result){
            alert(result);
        }
    })
});
