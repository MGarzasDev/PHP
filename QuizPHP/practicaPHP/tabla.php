<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quizdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}

//FUNCIONALIDADES

// Buscar las apariciones que tengan un nombre
if (isset($_POST['buscar'])) { // Si se presiona el botón de buscar
  $nombre = $_POST['nombre']; // Obtener el nombre del formulario
  $sql = "SELECT * FROM quiz_results WHERE name = '$nombre'"; // Consulta SQL con el nombre
  $result = mysqli_query($conn, $sql); // Ejecutar la consulta
  if (mysqli_num_rows($result) > 0) { // Si hay resultados
    echo "<table>"; // Crear una tabla
    echo "<tr><th>ID</th><th>Nombre</th><th>Puntuación</th><th>Fecha</th></tr>"; // Cabecera de la tabla
    while($row = mysqli_fetch_assoc($result)) { // Recorrer los resultados
      echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["score"] . "</td><td>" . $row["date"] . "</td></tr>"; // Mostrar cada fila
    }
    echo "</table>"; // Cerrar la tabla
  } else {
    echo "No se encontraron resultados con ese nombre"; // Mensaje de error
  }
}

// Mostrar el mayor y el menor resultado
if (isset($_POST['mostrar'])) { // Si se presiona el botón de mostrar
  $sql = "SELECT MAX(score) AS maximo, MIN(score) AS minimo FROM quiz_results"; // Consulta SQL con las funciones MAX y MIN
  $result = mysqli_query($conn, $sql); // Ejecutar la consulta
  if (mysqli_num_rows($result) > 0) { // Si hay resultados
    $row = mysqli_fetch_assoc($result); // Obtener la fila con los valores
    echo "El mayor resultado es: " . $row['maximo']; // Mostrar el mayor resultado
    echo "El menor resultado es: " . $row['minimo']; // Mostrar el menor resultado
  } else {
    echo "No se pudieron obtener los resultados"; // Mensaje de error
  }
}

$sql = "SELECT * FROM quiz_results";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de Resultados </title>
  <h3>Para registrarte en la tabla tu puntuación debe de ser mayor a 5</h1>
  <style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
  </style>
</head>
<body>
  <h1>Tabla de Resultados</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Puntuación</th>
      <th>Fecha</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["score"] . "</td><td>" . $row["date"] . "</td></tr>";
      }
    } else {
      echo "<tr><td colspan='3'>No hay resultados</td></tr>";
    }
    ?>
  </table>

  <form method="post" action="tabla.php">
  <input type="text" name="nombre" placeholder="Ingrese el nombre a buscar">
  <input type="submit" name="buscar" value="Buscar">
  <input type="submit" name="mostrar" value="Mostrar mayor y menor resultado">
</form>

</body>
</html>

<?php mysqli_close($conn); ?>
