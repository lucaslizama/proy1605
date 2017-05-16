<?php
    include "lib/Usuario.php";

    $user = new Usuario(0,$_GET["user"],$_GET["pass"]);

    if($user->VerificaUsuario()) 
        echo "Usuario Existe";
    else
        echo "Usuario no existe";
?>
