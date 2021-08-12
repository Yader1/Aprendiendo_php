<?php
    function comprobar_session(){
        session_start();
        if(isset($_SESSION['usuario'])){
            header('Location: ../index.php');
        }
    }

    function conexion(){
        try{
            $conexion = new PDO('mysql:host=127.0.0.1;dbname=usuarios_db', 'root', '');
        }catch(PDOException $e){
            echo "Error: " .$e -> getMessage();;
        }
    }
?>