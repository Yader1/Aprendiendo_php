<?php
    require('../functions/connection.php');
    $errors = array();

    if(isset($_POST['enviar'])){
        $nombre = $mysqli -> real_escape_string ($_POST['nombre']);
        $calificacion = $mysqli -> real_escape_string ($_POST['calificacion']);
        $comentario = $mysqli -> real_escape_string ($_POST['comentario']);
        $id = $mysqli -> real_escape_string ($_POST['miId']);

        if(!empty($nombre) && !empty($calificacion) && !empty($comentario) && !empty($id)){
            //No esta vacio
            $fecha = date('Y-m-d H:i:s');
            $sql = "UPDATE comentarios SET nombre = '$nombre', comentario = '$comentario', calificacion = '$calificacion' WHERE id = '$id'";
            $resultado = $mysqli -> query($sql);
        }else{
            $errors[] ="Rellena todos los campos";
        }
    }else{
        $errors[] ="No has enviado formulario";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas de Comentarios</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/all.min.css">
</head>
<body>
    <div class="contenedor">
        <div class="comentarios">
            <h2>Sistema de Comentarios</h2>
            <div class="comentario">
                <?php
                    if(isset($resultado)){
                        //checamos si la variable esta definida
                        if($resultado){
                            //despues checamos si la variable nos devuelve true
                            if($mysqli -> affected_rows > 0){
                                echo "<div class='success'><i class='fas fa-check-circle'></i>Campos editado correctamente</div>";
                            }else{
                                $errors[]="Este comentario no existe";
                            }
                        }else{
                            $errors[]="Error en la consulta";
                        }
                    }
                ?>
                <?php
                    //vamos a contar nuestros errores
                    if (count($errors) > 0){
                        echo "<div class='error'>";
                        foreach ($errors as $error){
                            echo "<i class='fas fa-exclamation-circle'></i>".$error."</br>";
                        }
                            echo "</div>";
                    }
                    $mysqli -> close();
            ?>
                <div class="acciones">
                    <a href="../index.php"><button class="borrar"><i class="fas fa-chevron-left"></i> Volver</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>