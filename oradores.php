<?php
// Establecer la conexión a la base de datos (asegúrate de reemplazar los valores con los tuyos)
// $servername = "tu_servidor";
// $username = "tu_usuario";
// $password = "tu_contraseña";
// $database = "tu_base_de_datos";


// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "id21315121_arielct";
$password = "codeFullPhp#23";
$dbname = "id21315121_integrador_php";


// $conn = new mysqli($servername, $username, $password, $database);
// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión
// if ($conn->connect_error) {
//     die("La conexión a la base de datos falló: " . $conn->connect_error);
// }

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener todos los registros de la tabla (reemplaza 'tu_tabla' con el nombre real de tu tabla)
$sql = "SELECT * FROM oradores";

// $sql = "INSERT INTO oradores (nombre, apellido, mail, tema, fecha_alta) 
//         VALUES ('$nombre', '$apellido', '$mail', '$tema', '$fecha_alta')";




$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de la Tabla</title>
</head>
<body>

<h2>Registros de la Tabla</h2>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Tema</th>
        <th>Fecha de Alta</th>
    </tr>

    <?php
    // Mostrar los registros en la tabla
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellido'] . "</td>";
            echo "<td>" . $row['mail'] . "</td>";
            echo "<td>" . $row['tema'] . "</td>";
            echo "<td>" . $row['fecha_alta'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No hay registros en la tabla</td></tr>";
    }

    // Cerrar la conexión
    $conn->close();
    ?>

</table>

</body>
</html>
