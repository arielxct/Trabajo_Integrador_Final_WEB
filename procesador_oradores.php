<?php

include 'db_config.php';

// Función para mostrar el modal de eliminación exitosa
function mostrarEliminacionExitosa() {
    echo <<<HTML
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var eliminacionExitosaModal = new bootstrap.Modal(document.getElementById('eliminacionExitosaModal'));
                eliminacionExitosaModal.show();
            });
        </script>
    HTML;
}

// Manejar la eliminación de registros
if (isset($_GET['accion']) && $_GET['accion'] == 'eliminar') {
    // Verificar si se proporcionó un ID válido
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $idEliminar = $_GET['id'];

        // Preparar la consulta SQL para eliminar el registro
        $sqlEliminar = "DELETE FROM oradores WHERE id = $idEliminar";

        if ($conn->query($sqlEliminar) === TRUE) {
            // Imprime un script para llamar a la función mostrarEliminacionExitosa
            mostrarEliminacionExitosa();

            // Redirige a la página oradores.php después de la eliminación
            header("Location: oradores.php?eliminacion_exitosa=true");
            exit();
        } else {
            echo "Error al eliminar el registro: " . $conn->error;
        }
    } else {
        echo "ID no válido para eliminar.";
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
