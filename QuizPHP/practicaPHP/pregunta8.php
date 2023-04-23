<?php
$nombre = $_COOKIE['nombre'];
//inicializar la sesion y las variables de sesion
session_name("quiz");
session_start();

if(isset($_REQUEST['respuesta7'])){
if ($_REQUEST['respuesta7'] == "valor4") {
    $_SESSION['contador']++;
}
} else {
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
    <title>pregunta7</title>
</head>

<body>
    <h1>¿Cuál sería el resultado de 3+2+''7'' en Javascript?</h1>
    <img src="img/js.png" width="300px" height="300px">
    <br>
    <form action="pregunta9.php" method="get">
    <p>327<input type="radio" name="respuesta8" value="327"></p>
    <p>57<input type="radio" name="respuesta8" value="57"></p>
    <p>Da error<input type="radio" name="respuesta8" value="error"></p>
        <br>
        <input type="submit" value="Siguiente">
    </form>
</body>

</html>