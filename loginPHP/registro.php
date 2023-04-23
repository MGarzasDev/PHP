<?php
session_name("login");
session_start();
// Conexión a la base de datos
$conexion = mysqli_connect("localhost",  "root", "", "logindb");

// Verificación de la conexión
if (!$conexion) {
    die("La conexión falló: " . mysqli_connect_error());
}

// Verificar si se recibieron los datos del formulario
if (isset($_POST["username"]) && isset($_POST["password"])) {
    // Recibir los datos del formulario (campos: usuario y contraseña)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Encriptar la contraseña
    $password_encrypted = password_hash($password, PASSWORD_DEFAULT);

    // Verificar si el usuario ya existe en la base de datos
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $resultado = mysqli_query($conexion, $sql);

    if (!$resultado) {
        echo "Error al realizar la consulta: " . mysqli_error($conexion);
    } elseif (mysqli_num_rows($resultado) > 0) {
        echo "El usuario ya existe";
    } else {
        // El usuario no existe, insertar los datos en la tabla "users" de la base de datos
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password_encrypted')";
        $resultado = mysqli_query($conexion, $sql);

        if (!$resultado) {
            // Error al insertar los datos
            echo "Error al insertar los datos: " . mysqli_error($conexion);
        } else {
            // Redirigir al usuario a la página de login
            header("Location: login.php");
        }
    }
} 

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Registro de Usuario</h2>
	<form action="registro.php" method="post">
		<label for="username">Nombre de Usuario:</label><br>
		<input type="text" id="username" name="username" required><br>
		<label for="password">Contraseña:</label><br>
		<input type="password" id="password" name="password" required><br><br>
		<input type="submit" value="Registrarse">
	</form>
</body>
</html>