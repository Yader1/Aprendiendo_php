<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        //Sino existe la session
        header("Location: usuario.php");
    }

    echo "<br>";
    echo "<h2>Ya estas loguedo</h2>";
    echo "<br>";

    echo "<br>";
    echo "¿Quieres cerrar sesion?";
    echo "<br>";
    echo "<a href='logout.php'>Click aqui para cerrar sesion</a>";
    echo "<br>";
?>