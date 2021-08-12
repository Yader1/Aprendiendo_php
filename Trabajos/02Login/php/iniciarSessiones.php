<?php
    function comprobar_session(){
        session_start();
        if(isset($_SESSION['usuario'])){
            header('Location: ../index.php');
        }
    }
?>