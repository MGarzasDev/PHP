<?php
    $nombre = $_COOKIE['nombre'];
    //inicializar la sesion y las variables de sesion
    session_name("quiz");
    session_start();
    
    if(isset($_REQUEST['respuesta4'])){
        if($_REQUEST['respuesta4'] == "Ninguna"){
            $_SESSION['contador'] ++;
        }
    }else {
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
    <title>pregunta5</title>
</head>
<body>
<h1>¿Tailwind es un framework de CSS? Verdadero o Falso</h1>
    <img src="img/tailwind.png" width="500px">
    <br>
    <form action="pregunta6.php" method="get">
    <select name="respuesta5">
        <option value="f">Falso</option>
        <option value="v">Verdadero</option>
    </select>
        <br>
        <input type="submit" value="Siguiente">
    </form> 
</body>
</html>