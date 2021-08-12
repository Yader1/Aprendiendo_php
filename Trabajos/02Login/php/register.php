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

            //Validar y encriptar Contraseña
            $password = hash('sha512', $password);
            $password2 = hash('sha512', $password2);

            //Validamos que las dos contraseña sean iguales
            if($password != $password2){
                $errores .= '<li>Las contraseñas no son iguales</li>';
            }
        }

        //Subimos los datos en la base de datos si no se encontraron errores
        if($errores == ''){
            $statement = $conexion -> prepare('INSERT INTO usuarios (id, usuario, pass) VALUE (NULL, :usuario, :pass)');
            $statement -> execute(array(':usuario' => $usuario, ':pass' => $password));

            header('Location: ./login.php');
        }
    }
    require('../html/register.html.php');
?>