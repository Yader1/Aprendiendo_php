<?php 
    session_start();

    if(isset($_SESSION['usuario'])){
        //Sila session existe, lo mandamos a la pagina loguedo
        header("Location:loguedo.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Inicio de sesion rapido</h2>
    <form action="iniciar.php" method="POST">
        Escribe tu nombre de usuario:
        <input type="text" name="user" id="">
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>