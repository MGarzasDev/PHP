<?php
    $nombre = $_COOKIE['nombre'];
    //inicializar la sesion y las variables de sesion
    session_name("quiz");
    session_start();
    echo $_SESSION['contador']; 
    if(isset($_REQUEST['respuesta1'])){
    if ($_REQUEST['respuesta1'] == "respuesta1_1"){
        $_SESSION['contador'] ++;

    } else if($_REQUEST['respuesta1'] == "respuesta1_4") {
        $_SESSION['contador'] ++;
    }
} else {
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
    <title>pregunta2</title>
</head>
<body>
<h1>¿Qué se entiende por "Frontend"?</h1>
    <img src="img/imagen3.png" width="500px">
    <br>
    <form action="pregunta3.php" method="get">
       <p>Es la parte visible de una página de internet a un usuario, que incluye diseño, elementos gráficos, animaciones, etcétera.<input type="checkbox" name="respuesta2" value="respuesta2_1"></p> 
        <br>
        <p>Es la parte oculta de una página de internet que se escribe con lenguajes como html, Java Script y CSS. <input type="checkbox" name="respuesta2" value="respuesta2_2"></p>
        <br>
        <p>Es la parte visible del una página de internet que se escribe con lenguajes como C++, Apache, PhP, NodeJS, entre otros.<input type="checkbox" name="respuesta2" value="respuesta2_3"></p>
        <br>
        <p>Es la parte oculta de una página de internet que se escribe con lenguajes como C++, Apache, PhP, NodeJS, entre otros.<input type="checkbox" name="respuesta2" value="respuesta2_4"></p>
        <br>
        <input type="submit" value="Siguiente">
    </form> 
</body>
</html>