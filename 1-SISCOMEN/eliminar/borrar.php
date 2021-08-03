<?php
    require('../functions/connection.php');

    $errors = array();

    if(isset($_GET['id'])){
        $idcomentario = $_GET['id'];
            if(empty($idcomentario)){
                $errors[] = "El id esta vacio";
            }else{
                $sql = "DELETE FROM comentarios WHERE id =$idcomentario";
                $resultado = $mysqli -> query($sql);
            }
    }else{
        $errors[]="No puedes estar en esta pagina";
    }
?>