<?php
    //Para usar session tenemos que agregar session_start()
    session_start();

    //$_SESSION['nombredelasession'] = "valor de la session";
    $_SESSION['usuario'] = "Yader1";
    $_SESSION['contrasenia'] = "admin123";
    $_SESSION['edad'] = 20;

    //Destruir una session
    session_destroy();
?>