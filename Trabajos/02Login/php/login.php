<?php
    require('./iniciarSessiones.php');
    comprobar_session();

    $errores = '';

    //Verificamos si el formulario se ha enviado por el metodo POST
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $password = hash('sha512', $password);

        try{
            $conexion = new PDO('mysql:host=127.0.0.1;dbname=usuarios_db', 'root', '');
        }catch(PDOException $e){
            echo "Error: " .$e -> getMessage();
        }

        $statement = $conexion -> prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password');
        $statement -> execute(array(':usuario' => $usuario, ':password' => $password));

        $resultado = $statement -> fetch();

        if($resultado != false){
            $_SESSION['usuario'] = $usuario;
            header('Location: ../index.php');
        }else{
             $errores .= '<li>Datos incorrectos</li>'; 
        }
    }

    require('../html/login.html.php');
?>