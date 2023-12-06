// Función para confirmar la eliminación
function confirmarEliminar(btn) {
    var id = btn.getAttribute('data-id');

    // Actualiza el data-id del botón dentro del modal
    document.getElementById('eliminarBtn').setAttribute('data-id', id);

    var modal = new bootstrap.Modal(document.getElementById('confirmarEliminarModal'));

    // Configura el modal según tus necesidades
    modal.show();
}

function eliminarRegistro() {
    // Obtiene el ID del botón de eliminar dentro del modal
    var id = document.getElementById('eliminarBtn').getAttribute('data-id');

    // Redirige a procesador_oradores.php con el ID del registro a eliminar
    window.location.href = "procesador_oradores.php?id=" + id + "&accion=eliminar";
}

// Agrega esta función para mostrar el modal de eliminación exitosa
function mostrarEliminacionExitosa() {
    var eliminacionExitosaModal = new bootstrap.Modal(document.getElementById('eliminacionExitosaModal'));
    eliminacionExitosaModal.show();
}



