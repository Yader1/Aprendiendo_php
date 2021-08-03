<?php 
    require('../Conecxion/connection.php');

    $sql = "SELECT * FROM estudiante WHERE email= $_POST['mail']";

    $resultado = $mysqli -> query($sql);

    if($reg = $resultado -> fetch_array()){
        echo "Nombre:".$reg['nombre']."<br>";
        echo "Curso:";
        switch ($reg['id_curso']) {
            case '1':
                echo "Php";
                break;
            
            case '2':
                echo "JavaScript";
                break;

            case '3':
                echo "Java";
                break;
        }
    }else{
        echo "No existe el correo del estudiante";
    }
 ?>