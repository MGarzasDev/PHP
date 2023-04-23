<?php
    $nombre = $_COOKIE['nombre'];
    //inicializar la sesion y las variables de sesion
    session_name("quiz");
    session_start();
    echo $_SESSION['contador']; 
    print_r($_REQUEST);
    if(isset($_REQUEST['respuesta2'])){
    if($_REQUEST['respuesta2'] == "respuesta2_1"){
        $_SESSION['contador'] ++;
    } else if($_REQUEST['respuesta2'] == "respuesta2_2") {
        $_SESSION['contador'] --;
    }else if($_REQUEST['respuesta2'] == "respuesta2_3") {
        $_SESSION['contador'] --;
    }else if($_REQUEST['respuesta2'] == "respuesta2_4") {
        $_SESSION['contador'] --;
    }
    }else {
        header("Location: http://localhost/practicaPHP/index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>pregunta3</title>
</head>
<body>
<h1>¿Qué lenguaje de programación es?</h1>
<p>Recuerda escribir el nombre correctamente, empezando por mayúscula seguido de minúsculas, de lo contrario
    la respuesta no será válida
</p>
    <img src="img/ts.png" width="200px">
    <br>
    <form action="pregunta4.php" method="get">
        <input type="textarea" name="respuesta3">
        <br>
        <input type="submit" value="Siguiente">
    </form> 
</body>
</html>