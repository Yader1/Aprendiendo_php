<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/cuadros.css">
</head>
<body>
    <?php 
    require('../conexion/connection.php');

    $sql = "SELECT * FROM usuarios WHERE usuario = '$_REQUEST[usuario]'";

    $resultado = $mysqli -> query($sql);

    echo '<div class="formulario">';
    echo '<div>';
    echo '<ul class="options">';
    echo '<li class="option">';
    echo '<a href="consultar.html"><img src="../img/hacia-atras.png" width="50" height="50"><br></a>';
    echo '</li>';
    echo '<li><h1 class="titulo">Usuario encontrados</h1></li>';
    echo '</ul>';
    echo '</div>';
    echo '<table class="tablalistado">';
    echo '<tr><th>ID</th><th>Usuario</th><th>Nombre</th><th>Password</th></tr>';

    while($reg = $resultado -> fetch_array()){
        echo '<tr>';
        echo '<td>';
        echo $reg['id'];
        echo '</td>';
        echo '<td>';
        echo $reg['usuario'];
        echo '</td>';
        echo '<td>';
        echo $reg['nombre'];
        echo '</td>';
        echo '<td>';
        echo $reg['password'];
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';
 ?>
</body>
</html>