<?php
$nombre = $_COOKIE['nombre'];
//inicializar la sesion y las variables de sesion
session_name("quiz");
session_start();

if(isset($_REQUEST['respuesta6'])){
if ($_REQUEST['respuesta6'] == "Float1") {
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
    <title>pregunta8</title>
</head>

<body>
    <h1>¿Cuáles son los componentes de un estilo CSS?</h1>
    <img src="img/css.png" width="300px" height="300px">
    <br>
    <form action="pregunta8.php" method="get">
    <p>Entrada, nombre y valor<input type="radio" name="respuesta7" value="valor1"></p>
    <p>Selector1, selector2 y valor<input type="radio" name="respuesta7" value="valor2"></p>
    <p>Selector, valor1 y valor2<input type="radio" name="respuesta7" value="valor3"></p>
    <p>Selector, propiedad y valor<input type="radio" name="respuesta7" value="valor4"></p>
        <br>
        <input type="submit" value="Siguiente">
    </form>
</body>

</html>