<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "integrador_php";

$servername = "localhost";
$username = "id21315121_arielct";
$password = "codeFullPhp#23";
$dbname = "id21315121_integrador_php";


$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Verificar si se ha enviado un ID válido mediante GET
if (isset($_GET['id_oradores']) && is_numeric($_GET['id_oradores'])) {
    $id = $_GET['id_oradores'];

    // Consulta para obtener los datos del registro antes de borrar
    $sql = "SELECT * FROM oradores WHERE id_oradores = $id";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $mail = $row['mail'];
        $tema = $row['tema'];
       // echo "Registro  encontrado";
        
    } else {
        echo "Registro no encontrado";
        exit;
    }
} else {
    echo "ID no válido";
    exit;
}

// Procesar el formulario de confirmación de eliminación
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Eliminar el registro de la base de datos
    $sql_delete = "DELETE FROM oradores WHERE `id_oradores` = $id";

    
   
    if ($conn->query($sql_delete) === TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
   
     
    <title>Borrar Registro</title>
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

<h2>Borrar Registro</h2>
<p>¿Estás seguro de que deseas eliminar el siguiente registro?</p>
<ul>

<div class="row">   
    <div class="col-75 ">
    <li><strong>ID:</strong> <?php echo $id; ?></li>
    </div>
</div>

<div class="row">   
    <div class="col-75 ">   
       
    <li><strong>Nombre:</strong> <?php echo $nombre; ?></li>
    
    </div>
</div>

<div class="row">   
    <div class="col-75 ">
    
    <li><strong>Apellido:</strong> <?php echo $apellido; ?></li>
    </div>
</div>

<div class="row">   
    <div class="col-75 ">
    
    
    <li><strong>Email:</strong> <?php echo $mail; ?></li>
    </div>
</div>

<div class="row">   
    <div class="col-75 ">

    <li><strong>Tema:</strong> <?php echo $tema; ?></li>
    </div>
</div>


    <!-- Agrega más campos según tu tabla -->
</ul>

<form method="post" action="">
    <input type="submit" value="Confirmar Eliminación" onclick="return confirm('¿Estás seguro de enviar el formulario?')">
   
</form>



</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
</html>
