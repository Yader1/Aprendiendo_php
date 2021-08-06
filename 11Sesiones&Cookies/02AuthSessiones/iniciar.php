<?php 
    session_start();

    if(!isset($_SESSION['usuario'])){
        //Si no existe la sesion usuarios
        if(isset($_POST['enviar'])){
            //Verificar si se envio el formulario
            $usuario = $_POST['user']; //guardamos en una variable el usuario enviado

            $_SESSION['usuario']=$usuario;
            echo 'Iniciastes sesion como: '.$_SESSION['usuario']."<br>";
        }else{
            echo "<p>No se envio el usuario</p>";
        }
    }else{
        //Sil a sesion existe
        echo "<p>Estas logiado como ".$_SESSION['usuario']."</p>";
        echo "<br>";
        echo "¿Quieres cerrar sesion?";
        echo "<br>";
        echo "<a href='logout.php'>Click aqui para cerrar sesion</a>";
        echo "<br>";
    }
    //Nos envia al formulario inicial
    echo "<a href='usuario.php'>Regresar al formulario</a>";
?>