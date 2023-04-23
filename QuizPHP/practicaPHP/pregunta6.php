<?php
$nombre = $_COOKIE['nombre'];
//inicializar la sesion y las variables de sesion
session_name("quiz");
session_start();

if (isset($_REQUEST['respuesta5'])) {
    if ($_REQUEST['respuesta5'] == "v") {
        $_SESSION['contador']++;
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
    <title>pregunta6</title>
</head>

<body>  
    <h1>¿Para que sirve la propiedad de CSS "Float"?</h1>
    <img src="img/float.jpg" width="500px">
    <br>
    <form action="pregunta7.php" method="get">
    <p>Float se usa cuando necesitamos hacer que un elemento de nuestra página web sea empujado hacia la derecha o hacia la izquierda y hacer que otros elementos se alineen a su alrededor.<input type="radio" name="respuesta6" value="Float1"></p>
    <p>Float no es una propiedad de CSS<input type="radio" name="respuesta6" value=Float2></p>
    <p>Float se utiliza para alinear vertical y horizontalmente un elemento de nuestra página web<input type="radio" name="respuesta6" value="Float3"></p>
    <p>Esta propiedad es usada para hacer que el elemento "flote", de tal modo que los demás pasen por debajo<input type="radio" name="respuesta6" value="Float4"></p>
        <br>
        <input type="submit" value="Siguiente">
    </form>
</body>

</html>