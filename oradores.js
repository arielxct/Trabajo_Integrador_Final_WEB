// // Función para confirmar la eliminación
// function confirmarEliminar(btn) {
//     var id = btn.getAttribute('data-id');
//     if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
//         // Redirige a procesador_oradores.php con el ID del registro a eliminar
//         window.location.href = "procesador_oradores.php?id=" + id + "&accion=eliminar";
//     }
// }

// oradores.js
// Función para confirmar la eliminación
function confirmarEliminar(btn) {
    var id = btn.getAttribute('data-id');
    var modal = new bootstrap.Modal(document.getElementById('confirmarEliminarModal'));

    // Configura el modal según tus necesidades
    modal.show();
}

function eliminarRegistro() {
    // Obtiene el ID del botón de eliminar
    var id = document.getElementById('eliminarBtn').getAttribute('data-id');

    // Redirige a procesador_oradores.php con el ID del registro a eliminar
    window.location.href = "procesador_oradores.php?id=" + id + "&accion=eliminar";
}



