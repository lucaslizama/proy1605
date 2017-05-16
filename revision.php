<?php
    include "lib/Usuario.php";

    $user = new Usuario(0,"flopez","1234");

    if($user->VerificaUsuario()) 
        echo "Usuario Existe";
    else
        echo "Usuario no existe";
?>
