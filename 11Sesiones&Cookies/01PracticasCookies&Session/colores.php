<?php 
    $fondo ="#fff";

    if(isset($_POST['enviar'])){
        $color = $_POST['colorfac'];
        
        if($color == "verde"){
            setcookie('color', 'verde', time()+60*60*24*30);
        }else{
            setcookie('color', 'azul', time()+60*60*24*30);
        }
    }
    if(isset($_COOKIE['color'])){
        //Si existe la cookie
        if($_COOKIE['color']=="azul"){
            $fondo = "#17CA12";
        }else if($_COOKIE['color']=="verde"){
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