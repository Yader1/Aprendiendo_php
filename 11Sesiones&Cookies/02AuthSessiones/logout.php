<?php
    session_start();
    session_destroy();

    echo 'Cerraste Sesion';

    echo "<br>";
    echo "<a href='usuario.php'>Volver al inicio</a>";
    echo "<br>";
?>