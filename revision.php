<?php
    include "lib/Usuario.php";

    session_start();

    $user = new Usuario(0,$_GET["user"],$_GET["pass"]);

    if($user->VerificaUsuario()) 
        $_SESSION["user"] = $user;
    else
        echo "Usuario no existe";
    
    header("Location:/");
?>
