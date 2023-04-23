
<?php
$nombre = $_COOKIE['nombre'];

// Inicializar la sesión y las variables de sesión
session_name("quiz");
session_start();

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quizdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Comprobar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if ($_SESSION['contador'] >=5) {
    $puntuacion = $_SESSION['contador'];
    $sql = "INSERT INTO quiz_results (name, score) VALUES ('$nombre', '{$_SESSION['contador']}')";


    if (mysqli_query($conn, $sql)) {
        echo "Los datos se han insertado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    echo "Eres un crack, tu puntuación ha sido de " . $_SESSION['contador']  ;
    echo "<img src='img/tabien.jpg' alt='gato' width='1000px'>";
} else {
    echo "Espabila";
    echo "<img src='img/tabien.jpg' alt='gato' width='1000px'>";
}



// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form action="tabla.php" method="get">
<input type="submit" value="Enviar">
</body>
</html>