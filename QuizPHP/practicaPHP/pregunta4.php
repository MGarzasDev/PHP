<?php
    $nombre = $_COOKIE['nombre'];
    //inicializar la sesion y las variables de sesion
    session_name("quiz");
    session_start();
    
    print_r($_REQUEST);
    if(isset($_REQUEST['respuesta3'])){
        if($_REQUEST['respuesta3'] == "Typescript"){
            $_SESSION['contador'] ++;
        }
    }
    else {
        header("Location: http://localhost/practicaPHP/index.php");
    }
    echo $_SESSION['contador']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>pregunta4</title>
</head>
<body>
<h1>¿Cuál es la sintaxis que indica que estamos usando html 5?</h1>
    <img src="img/html5.jpg" width="500px">
    <br>
    <form action="pregunta5.php" method="get">
    <p><¡DOCTYPE html><input type="radio" name="respuesta4" value="1"></p>
    <p>DOCTYPE html<input type="radio" name="respuesta4" value="2"></p>
    <p>html5<input type="radio" name="respuesta4" value="html5"></p>
    <p>!DOCTYPE html><input type="radio" name="respuesta4" value="3"></p>
    <p>Ninguna es correcta<input type="radio" name="respuesta4" value="Ninguna"></p>
        <br>
        <input type="submit" value="Siguiente">
    </form> 
</body>
</html>