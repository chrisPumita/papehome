$( document ).ready(function() {
    console.log("LOGIN JS OK")
});


$("#frm_login").submit(function (event) {
    event.preventDefault();
    let user =$("#email").val();
    let pw =$("#password").val();
    if (pw==""|| user == ""){
        Swal.fire({
            icon: 'error',
            title: 'Cuenta incorrecta',
            text: 'Porfavor escriba los campos que se solicitan',
        })
    }
    else{
        $.ajax({
            type: "POST",
            url: "./webhook/login.php",
            data: $('#frm_login').serialize(),
            dataType: "json",
            success: function (result) {
                console.log(result);
                if(result.response=="1"){
                    $('#frm_login')[0].reset();
                    location.reload();
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
    }
});
