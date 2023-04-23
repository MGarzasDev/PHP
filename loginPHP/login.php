<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "logindb");

// Verificación de la conexión
if (!$conexion) {
    die("La conexión falló: " . mysqli_connect_error());
}

// Verificar si se recibieron los datos del formulario
if (isset($_POST["username"]) && isset($_POST["password"])) {
// Recibir los datos del formulario
$username = $_POST["username"];
$password = $_POST["password"];

// Consulta a la base de datos
$sql = "SELECT * FROM users WHERE username = '$username'";
$resultado = mysqli_query($conexion, $sql);

// Verificar si el usuario existe en la base de datos
if (mysqli_num_rows($resultado) == 1) {
    // Obtener los datos del usuario
    $fila = mysqli_fetch_assoc($resultado);
    $password_encrypted = $fila["password"];

    // Verificación de la contraseña
    if (password_verify($password, $password_encrypted)) {
        // Iniciar sesión
        session_start();
        $_SESSION["username"] = $username;

        // Redirigir al usuario a la página de mostrar los datos
        header("Location: mostrar.php");
    } else {
        echo "Contraseña incorrecta";
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
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Login de Usuario</h2>
	<form action="login.php" method="post">
		<label for="username">Nombre de Usuario:</label><br>
		<input type="text" id="username" name="username" required><br>
		<label for="password">Contraseña:</label><br>
		<input type="password" id="password" name="password" required><br><br>
		<input type="submit" value="Iniciar Sesión">
	</form>
</body>
</html>