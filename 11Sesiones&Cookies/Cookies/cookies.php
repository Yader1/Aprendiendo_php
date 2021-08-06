<?php
    //Para crear una cookie utilizamos la funcion setcookie

    //setcookie("nombre", "valor", "fecha de expiracion");
    /*
    if(!isset($_COOKIE['apellido'])){
        setcookie('apellido', 'Gonzales', time()+60*5);
    }else{
        echo "Hola señor ".$_COOKIE['apellido'];
    }
    */

    //Otra manera
    //echo $_COOKIE['Gonzales'];

    //Destruir una cookie
    setcookie('apellido', 'Gonzales', time()-1);
?>