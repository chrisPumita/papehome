// A $( document ).ready() block.
$( document ).ready(function() {
    console.log( "ready!" );
});

/*SUBMINT de Add Alumno*/
$("#frm_login_admin").submit(function (event) {
    event.preventDefault();
    let user =$("#no_vendedor").val();
    let pw =$("#password").val();
    if (pw==""){
        Swal.fire({
            icon: 'error',
            title: 'Cuenta incorrecta',
            text: 'El numero de trabajador o contraseña no coincide',
        })
    }
    else{
        $.ajax({
            type: "POST",
            url: "../webhook/login_admin.php",
            data: $('#frm_login_admin').serialize(),
            dataType: "json",
            success: function (result) {
                console.log(result);
                if(result.response=="1"){
                    $('#frm_login_admin')[0].reset();
                    location.reload();
                }
                else{
                    let alerta =  `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Error al iniciar</strong><p>La cuenta no existe, vuelva a intentarlo</p>
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
    }
});