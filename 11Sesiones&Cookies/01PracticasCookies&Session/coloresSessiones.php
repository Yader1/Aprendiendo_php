<?php 
    session_start();
    $fondo ="#fff";

    if(isset($_POST['enviar'])){
        $color = $_POST['colorfac'];
        
        if($color == "verde"){
            $_SESSION['color']="verde";
        }else{
            $_SESSION['color']="azul";
        }
    }
    if(isset( $_SESSION['color'])){
        //Si existe la cookie
        if( $_SESSION['color']=="verde"){
            $fondo = "#17CA12";
        }else if( $_SESSION['color']=="azul"){
            $fondo = "#1CB4C9";
        }
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

<?php
    echo "<body style='background:".$fondo.";'>"?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <p>Elige un color favorito para el fondo:</p>
        Verde:
        <input type="radio" name="colorfac" value="verde">
        Azul:
        <input type="radio" name="colorfac" value="azul">
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>