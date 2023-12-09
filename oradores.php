<!-- Para mostrar una tabla de una base de datos utilizando Bootstrap en HTML y PHP, primero asegúrate de tener una conexión a la base de datos. Aquí tienes un ejemplo básico:

1. *Conexión a la base de datos (db_connect.php):* -->

<?php

$servername = "localhost";
$username = "id21315121_arielct";
$password = "codeFullPhp#23";
$dbname = "id21315121_integrador_php";

$conn = new mysqli($servername, $username, $password, $dbname);


// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}
// ****************************************************
//************************************ ***

// Obtener datos de la tabla
$sql = "SELECT * FROM oradores";
$result = $conn->query($sql);


?>


<!-- 2. *Consulta y visualización de datos (index.php):*
php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <title>Tabla de Base de Datos</title>

    
</head>
<header>
    <?php
    include 'nav-bar.php';
    ?>
</header>
<body>
<div> * </div>
    <div> * </div>
    <div> * </div>
    <div> * </div>
    <div> * </div>
    <div> * </div>
    <div> * </div>
    <div> * </div>
    <div> * </div>


<div class="container mt-5">
    <h2>Tabla de Oradores</h2>
    <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Tema</th>
            <th>Fecha de Alta</th>
            <th>Acciones</th>


            </tr>
        </thead>
        <tbody>
        <?php
    // Mostrar los registros en la tabla
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id_oradores'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellido'] . "</td>";
            echo "<td>" . $row['mail'] . "</td>";
            echo "<td>" . $row['tema'] . "</td>";
            echo "<td>" . $row['fecha_alta'] . "</td>";
            echo "<td>
                    <a href='editar.php?id_oradores=" . $row['id_oradores'] . "'>Editar</a>
                    <a href='borrar.php?id_oradores=" . $row['id_oradores'] . "'>Borrar</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No hay registros en la tabla</td></tr>";
    }

    // Cerrar la conexión
    $conn->close();
    ?>



        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

<footer>
    <?php
    include 'footer.php';
    ?>
</footer>


</html>


