<?php
$nombre = $_COOKIE['nombre'];
//inicializar la sesion y las variables de sesion
session_name("quiz");
session_start();

if(isset($_REQUEST['respuesta8'])){
if ($_REQUEST['respuesta8'] == "57") {
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
    <h1>Valor final del siguiente texto si x=9 y y=2; txt = x + y + "=" + x + "+" + y + y + "-" + "xy";</h1>
    <img src="img/interrogacion1.jpg" width="300px" height="300px">
    <br>
    <form action="pregunta10.php" method="get">
    <p>11 = x + y + xy - 9<input type="radio" name="respuesta9" value="txt1"></p>
    <p>9 + 2 = + 9 + + + 2<input type="radio" name="respuesta9" value="txt2"></p>
    <p>11 = 9 + 4 - xy<input type="radio" name="respuesta9" value="txt3"></p>
    <p>Da error<input type="radio" name="respuesta9" value="txt4"></p>
        <br>
        <input type="submit" value="Siguiente">
    </form>
</body>

</html>