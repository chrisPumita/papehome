$( document ).ready(function() {
    console.log("REGISTRO OK")
});
/*SUBMINT de Add Alumno*/
$("#frm-new-account").submit(function (event) {
    event.preventDefault();
    let c_pw =$("#r_password").val();
    let pw =$("#password").val();
    if (pw!=c_pw){
        Swal.fire({
            icon: 'error',
            title: 'Las contraseñas no coincide',
            text: 'Las contraseñas no coinciden, escriba la contraseña y confirmela nuevamente',
        })
    }
    else{
        $.ajax({
            type: "POST",
            url: "./webhook/crear_cuenta.php",
            data: $('#frm-new-account').serialize(),
            dataType: "json",
            success: function (result) {
                if(result.response=="1"){
                    $('#frm-new-account')[0].reset();
                    Swal.fire({
                        icon: 'success',
                        title: 'CUENTA CREADA',
                        text: 'Tu cuenta ha sido creada con exito, ahora puedes iniciar sesión',
                        footer: '<a href="./login.php">Iniciar Sesión</a>'
                    });
                }
                else{
                    let alerta =  `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <p>El correo ya existe, intente con otro</p>
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