<?php 
	require('../functions/connection.php');
    $errors = array();

    if(isset($_POST['registrar'])){
        $nombre = $mysqli -> real_escape_string($_POST['nombre']);
        $comentario = $mysqli -> real_escape_string ($_POST['comentario']);
        $calificacion = $mysqli -> real_escape_string ($_POST['calificacion']);
    }

    if(!empty($nombre) && !empty($calificacion) && !empty($comentario)){
        //No esta vacio
        $fecha = date('Y-m-d H:i:s');
        $sql = "INSERT INTO comentarios(id, nombre, comentario, fecha,calificacion) VALUES(NULL, '$nombre', '$comentario', '$fecha', '$calificacion')";
	    $resultado = $mysqli -> query($sql);
    }else{
        $errors[] ="Rellena todos los campos";
    }
 ?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/all.min.css">
    <title>Sistemas de comentarios</title>
</head>

<body>
    <div class="contenedor">
        <div class="comentarios">
            <h2>Insertar Comentarios</h2>
            <?php
                    if(isset($resultado)){
                        //checamos si la variable esta definida
                        if($resultado){
                            //despues checamos si la variable nos devuelve true
                                echo "<div class='success'><i class='fas fa-check-circle'></i>Comentario insertado correctamente</div>";
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
			<div class="formulario">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre">
                        <label for="">Calificacion</label>
                        1
                        <input type="radio" name="calificacion" value="1">
                        2
                        <input type="radio" name="calificacion" value="2">
                        3
                        <input type="radio" name="calificacion" value="3">
                        4
                        <input type="radio" name="calificacion" value="4">
                        5
                        <input type="radio" name="calificacion" value="5" checked>
                        <label for="">Comentario</label>
                        <textarea name="comentario" id="" cols="30" rows="10"></textarea>
                        <input type="submit" value="registrar" name="registrar">
                    </form>
            </div>
                <div class="comentario">
                    <div class="acciones">
                        <a href="../index.php"><button class="borrar"><i class="fas fa-chevron-left"></i> Regresar a la pagina de inicio</button></a>
                    </div>
                </div>
        
        </div>
        </div>
</body>
</body>
</html>