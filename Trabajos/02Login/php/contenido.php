<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        require('../html/contenido.html.php');
    }else{
        header('Location: ./login.php');
    }
?>