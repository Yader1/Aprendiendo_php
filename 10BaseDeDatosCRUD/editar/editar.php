<?php
    require('../functions/connection.php');
    $errors = array();

    $flag = 0;

    if(isset($_GET['id'])){
        $id = $mysqli -> real_escape_string($_GET['id']);

        if(!empty($id)){
            $sql = "SELECT * FROM comentarios WHERE id = '$id'";
            $resultado = $mysqli -> query($sql);

            if($resultado -> num_rows > 0){
                $flag = 1;

                $datos = $resultado -> fetch_assoc();
            }else{
                $errors[] = "No hay ningun comentario con ese ID";
            }
        }else{
            $errors[] = "El ID esta vacio";
        }
    }else{
        $errors[] = 'No estas enviando ningun ID'; 
    }
    //var_dump($resultado);
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
            <h2>Editar Comentarios</h2>
                <?php
                    //vamos a contar nuestros errores
                    if (count($errors) > 0){
                        echo "<div class='error'>";
                        foreach ($errors as $error){
                            echo "<i class='fas fa-exclamation-circle'></i>".$error."</br>";
                        }
                            echo "</div>";
                    }

                    if($flag == 1){

                ?>
			<div class="formulario">
                    <form action="modificar.php" method="post">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" value=<?php echo $datos['nombre'];?>>
                        <label for="">Calificacion</label>
                        1
                        <input type="radio" name="calificacion" value="1" <?php if($datos['calificacion']==1){echo"checked";}?>>
                        2
                        <input type="radio" name="calificacion" value="2" <?php if($datos['calificacion']==2){echo"checked";}?>>
                        3
                        <input type="radio" name="calificacion" value="3" <?php if($datos['calificacion']==3){echo"checked";}?>>
                        4
                        <input type="radio" name="calificacion" value="4" <?php if($datos['calificacion']==4){echo"checked";}?>>
                        5
                        <input type="radio" name="calificacion" value="5" <?php if($datos['calificacion']==5){echo"checked";}?>>
                        <label for="">Comentario</label>
                        <textarea name="comentario" id="" cols="30" rows="10"><?php echo $datos['comentario'];?></textarea>
                        
                        <input type="hidden" name="miId" value="<?php echo $datos['id'];?>">
                        <input type="submit" value="Editar" name="enviar">
                    </form>
            </div>
                <?php 
                    }
                ?>
                <div class="comentario">
                    <div class="acciones">
                        <a href="../index.php"><button class="borrar"><i class="fas fa-chevron-left"></i> Regresar a la pagina de inicio</button></a>
                    </div>
                </div>
        
        </div>
        </div>
</body>
</html>