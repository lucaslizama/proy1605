<?php
    include "lib/Usuario.php";
    session_start();
    if(isset($_SESSION["user"])){
        
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php if(isset($_SESSION["user"])){ ?>
                Bienvenido: <?=$_SESSION["user"]->nombre?>
            <?php } ?>
        </header>
        <a href="revision.php">Revision</a>
        <br>
        <a href="logout.php">Salir</a>
        <?php if(!isset($_SESSION["user"])){ ?>
        <form action="revision.php" method="GET">
            <div>
                Username: <input type="text" name="user">
            </div>
            <div>
                Password <input type="password" name="pass" value="">
            </div>
            <button type="submit">Login</button>
        </form>
        <?php } ?>
    </body>
</html>