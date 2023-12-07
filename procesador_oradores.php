<?php

include 'db_config.php';

// Manejar la eliminación de registros
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['accion']) && $_POST['accion'] == 'eliminar') {
    // Verificar si se proporcionó un ID válido
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $idEliminar = $_POST['id'];

        // Preparar la consulta SQL para eliminar el registro
        $sqlEliminar = "DELETE FROM oradores WHERE id = $idEliminar";

        if ($conn->query($sqlEliminar) === TRUE) {
            exit();
        } else {
            echo "Error al eliminar el registro: " . $conn->error;
        }
    } else {
        echo "ID no válido para eliminar.";
    }
} elseif ($_POST['accion'] == 'editar') {
    // Verificar si se proporcionó un ID válido
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $idEditar = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $mail = $_POST['mail'];
        $tema = $_POST['tema'];

        // Preparar la consulta SQL para actualizar el registro
        $sqlEditar = "UPDATE oradores SET nombre='$nombre', apellido='$apellido', mail='$mail', tema='$tema' WHERE id=$idEditar";

        if ($conn->query($sqlEditar) === TRUE) {
            exit();
        } else {
            echo "Error al editar el registro: " . $conn->error;
        }
    } else {
        echo "ID no válido para editar.";
    }
} else {
    // Manejar la inserción de nuevos registros
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $tema = $_POST['tema'];

    // Preparar la consulta SQL para la inserción
    $sqlInsertar = "INSERT INTO oradores (nombre, apellido, mail, tema, fecha_alta) 
                    VALUES ('$nombre', '$apellido', '$mail', '$tema', NOW())";

    // Ejecutar la consulta de inserción
    if ($conn->query($sqlInsertar) === TRUE) {
        // Redirigir a la página oradores.php después de la inserción
        header("Location: oradores.php");
        exit();
    } else {
        echo "Error al insertar el registro: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
