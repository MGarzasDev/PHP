<?php
$nombre = $_COOKIE['nombre'];
//inicializar la sesion y las variables de sesion
session_name("quiz");
session_start();

if(isset($_REQUEST['respuesta9'])){
if ($_REQUEST['respuesta9'] == "txt3") {
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
    <title>pregunta9</title>
</head>

<body>
    <h1>Última pregunta: ¿Que te ha parecido este quiz?</h1>
    <img src="img/gato.jpg" width="500px" height="500px">
    <br>
    <form action="resultado.php" method="get">
        <button class="si" type="submit" name="respuesta10" value="respuesta10_1">El mejor quiz que he hecho en mi vida </button>
        <br>
    </form>
    <button class="no">Ha sido una mierda</button>

</body>

</html>

