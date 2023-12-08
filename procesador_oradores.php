<?php

include 'db_config.php';

// Verificar si se envió un formulario por el método POST y si "accion" está definido
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['accion'])) {
    if ($_POST['accion'] == 'eliminar') {
        // Verificar si se proporcionó un ID válido
        if (isset($_POST['id']) && is_numeric($_POST['id'])) {
            $idEliminar = $_POST['id'];

            // Preparar la consulta SQL para eliminar el registro
            $sqlEliminar = "DELETE FROM oradores WHERE id = $idEliminar";

            // Utilizar mysqli_query para ejecutar la consulta
            if (mysqli_query($conn, $sqlEliminar)) {
                exit();
            } else {
                echo "Error al eliminar el registro: " . mysqli_error($conn);
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

            // mysqli_query para ejecutar la consulta
            if (mysqli_query($conn, $sqlEditar)) {
                exit();
            } else {
                echo "Error al editar el registro: " . mysqli_error($conn);
            }
        } else {
            echo "ID no válido para editar.";
        }
    } else {
        // Resto del código para insertar
        // Obtener datos del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $mail = $_POST['mail'];
        $tema = $_POST['tema'];

        // Preparar la consulta SQL para la inserción
        $sqlInsertar = "INSERT INTO oradores (nombre, apellido, mail, tema, fecha_alta) 
                        VALUES ('$nombre', '$apellido', '$mail', '$tema', NOW())";

        // mysqli_query para ejecutar la consulta
        if (mysqli_query($conn, $sqlInsertar)) {
            // Redirige a la página oradores.php después de la inserción
            header("Location: oradores.php");
            exit();
        } else {
            echo "Error al insertar el registro: " . mysqli_error($conn);
        }
    }
}

// Cerrar la conexión
$conn->close();
