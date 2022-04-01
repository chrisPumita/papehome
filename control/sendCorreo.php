<?php
if (isset($_POST['correo'])) {
    $correo = $_POST['correo'];
    #Incluyo
    include_once "funciones.php";
    if(enviaCorreo($correo))
        echo "correo enviado";
    else
        echo "error";
}
else
{
    echo "Escribe un correo valido";
}

