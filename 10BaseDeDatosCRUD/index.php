<?php
    require('./functions/connection.php');

    $errors = array();

    $sql = "SELECT * FROM comentarios";
    $resultado = $mysqli -> query($sql);

    //var_dump($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Sistema de Comentarios </title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <div class="contenedor">
        <div class="comentarios">
            <h2>Sistema de Comentarios</h2>
            <?php
                if($resultado){
                    if($resultado -> num_rows > 0){
                        while($fila = $resultado -> fetch_assoc()){ 
            ?>
            <div class="comentario">
                  <p><span>Autor: </span> <?php echo htmlspecialchars($fila['nombre']);?> </p>
                  <p><span>Calificacion: </span><?php echo htmlspecialchars($fila['calificacion']);?></p>
                  <p><span>Fecha: </span><?php echo htmlspecialchars($fila['fecha']);?></p>
                  <p><span>Comentario: </span><?php echo htmlspecialchars($fila['comentario']);?></p>
                    <div class="acciones">
                        <a href="./eliminar/borrar.php?id=<?php echo $fila['id'] ?>"><button class="borrar"><i class="fas fa-trash"></i> Borrar</button></a>
                        <a href="./editar/editar.php?id=<?php echo $fila['id'] ?>"><button class="editar"><i class="fas fa-edit"></i> Editar   </button></a>
                        <!--Establece clases a los botones al primero borrar y al segundo editar-->
                    </div>
            </div>
            <?php
                        }
                    }else{
                        $errors[] = "No hay ningun comentario";
                    }
                } else{
                    $errors[] = "Hubo un error en la consulta";
                } 
                
                if(count($errors) > 0){
                    echo "<div class='error'>";

                    foreach($errors as $error){
                        echo "<i class='fas fa-exclamation-circle'></i>".$error."<br>";
                    }
                    echo "</div>";
                }
            ?>
        </div>
    </div>
    <div class="btn-add">
        <a href="./insertar/insertar.php"><i class="fas fa-plus-circle"></i></a>
    </div>
</body>
</html>