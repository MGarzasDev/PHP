<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de resultados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Usuarios Registrados</h2>
	<table>
		<tr>
			<th>ID</th>
			 <th>Nombre de Usuario</th>
             <th>Contraseña</th>
		</tr>
		<?php
		// Conectar a la base de datos
		$conexion = mysqli_connect("localhost", "root", "", "logindb");

		// Verificar la conexión
		if (!$conexion) {
		    die("La conexión falló: " . mysqli_connect_error());
		}

		// Consulta a la base de datos
		$sql = "SELECT * FROM users";
		$resultado = mysqli_query($conexion, $sql);

		// Mostrar los datos en una tabla HTML
		while ($fila = mysqli_fetch_assoc($resultado)) {
		    echo "<tr><td>" . $fila["id"] . "</td><td>" . $fila["username"] . "</td><td>" . $fila["password"] . "</td></tr>";
		}

		// Cerrar la conexión a la base de datos
		mysqli_close($conexion);
		?>
	</table>
</body>
</html>