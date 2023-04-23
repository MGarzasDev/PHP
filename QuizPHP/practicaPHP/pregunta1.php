<?php
$nombre = $_REQUEST['nombre'];
setcookie("nombre", $nombre);
//inicializar la sesion y las variables de sesion
session_name("quiz");
session_start();
$_SESSION['contador'] = 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>pregunta1</title>
</head>

<body>
    <h1>¿Cual es tu entorno de desarrollo favorito?</h1>
    <img src="img/lenguaje.jpg" width="500px">
    <br>
    <form action="pregunta2.php" method="get">
        <button type="submit" name="respuesta1" value="respuesta1_1">Me gusta diseñar webs con html,css y javascript</button>
        <br>
        <button type="submit" name="respuesta1" value="respuesta1_2">Trabajo con tecnologías como Java o PHP</button>
        <br>
        <button type="submit" name="respuesta1" value="respuesta1_3">Me encanta trabajar con bases de datos</button>
        <br>
        <button type="submit" name="respuesta1" value="respuesta1_4">Bootstrap es mi mejor amigo :)</button>
    </form> 
</body>

</html>