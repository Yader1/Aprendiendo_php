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
                                echo "<div class='success'><i class='fas fa-check-circle'></i>Comentario borrado correctamente</div>";
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
    <div class="btn-add">
        <a href=""><i class="fas fa-plus-circle"></i></a>
    </div>
</body>
</html>