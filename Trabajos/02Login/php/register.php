<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header('Location: ../index.php');
    }

    //Verificamos si los datos son enviados
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Recuperamos los datos
        $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);   //strtolower = convierte los datos en minusculas
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        $errores = '';

        if(empty($usuario) or empty($password) or empty($password2)){
            $errores .= '<li>Por favor rellena los datos correctamentes</li>';
        }else{
            try{
                $conexion = new PDO('mysql:host=127.0.0.1;dbname=usuarios_db', 'root', '');
            }catch(PDOException $e){
               echo "Error: ".$e -> getMessage(); 
            }

            $statement = $conexion -> prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
            $statement -> execute(array(':usuario' => $usuario));
            $resultado = $statement -> fetch();

            //Si el usuario ya existe
            if($resultado != false){
                $errores .= '<li>El nombre del usuario ya existe</li>';
            }
        }
    }
    require('../html/register.html.php');
?>