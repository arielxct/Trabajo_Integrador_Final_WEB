<?php
// Establecer la conexión a la base de datos (asegúrate de reemplazar los valores con los tuyos)
// $servername = "tu_servidor";
// $username = "tu_usuario";
// $password = "tu_contraseña";
// $database = "tu_base_de_datos";


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

    // Obtener datos del registro a editar
    $sql = "SELECT * FROM oradores WHERE id_oradores = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $mail = $row['mail'];
        $tema = $row['tema'];
        // Puedes agregar más campos según tu tabla
    } else {
        echo "Registro no encontrado";
        exit;
    }
} else {
    echo "ID no válido";
    exit;
}

// Procesar el formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los nuevos valores del formulario
    $nombre_nuevo = $_POST['nombre'];
    $apellido_nuevo = $_POST['apellido'];
    $mail_nuevo = $_POST['mail'];
    $tema_nuevo = $_POST['tema'];

    // Actualizar el registro en la base de datos
    $sql_update = "UPDATE oradores SET nombre='$nombre_nuevo', apellido='$apellido_nuevo', mail='$mail_nuevo', tema='$tema_nuevo' WHERE `id_oradores` = $id";

    if ($conn->query($sql_update) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
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
   
    <title>Editar Registro</title>
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
    

<h2>Editar Registro</h2>
<form method="post" action="">




<div class="row">   
    <div class="col-75 form-nombre">

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $nombre; ?>" required><br>
    
    </div>
</div>
<div class="row">   
    <div class="col-75 ">



    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" value="<?php echo $apellido; ?>" required><br>

    </div>
</div>
<div class="row">   
    <div class="col-75 ">


    <label for="mail">Email:</label>
    <input type="email" name="mail" value="<?php echo $mail; ?>" required><br>

    </div>
</div>

<div class="row">
    <div class="col-75 ">


    <label for="tema">Tema:</label>
    <input type="text" name="tema" value="<?php echo $tema; ?>" required><br>

    </div>
</div>

    <!-- Agrega más campos según tu tabla -->

    <input type="submit" value="Guardar cambios">

</form>

</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
</html>