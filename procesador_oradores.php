<?php

include 'db_config.php';
?>

<?php

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$tema = $_POST['tema'];
 // $fecha_alta = $_POST['fecha_alta']; anulado para incluir NOW() en SQL(****)
// $fecha_alta = date('d-m-Y');

// Preparar la consulta SQL anule esta para probar now() (***)
//$sql = "INSERT INTO oradores (nombre, apellido, mail, tema, fecha_alta) 
  //      VALUES ('$nombre', '$apellido', '$mail', '$tema', '$fecha_alta')";
        
        $sql = "INSERT INTO oradores (nombre, apellido, mail, tema, fecha_alta) 
        VALUES ('$nombre', '$apellido', '$mail', '$tema', NOW())";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro ingresado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
