function confirmarEliminar(btn) {
    var id = btn.getAttribute('data-id');

    // Actualiza el data-id del botón dentro del modal
    document.getElementById('eliminarBtn').setAttribute('data-id', id);

    var modal = new bootstrap.Modal(document.getElementById('confirmarEliminarModal'));

    modal.show();
}

async function eliminarRegistro() {
    // OBTENGO ID del botón de eliminar dentro del modal
    var id = document.getElementById('eliminarBtn').getAttribute('data-id');

    try {
        const response = await fetch('procesador_oradores.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `id=${id}&accion=eliminar`,
        });

        if (response.ok) {
            var confirmaModal = new bootstrap.Modal(document.getElementById('confirmarEliminarModal'));
            confirmaModal.hide();
            mostrarEliminacionExitosa();

        } else {
            console.error('Error al eliminar el registro:', response.statusText);
        }
    } catch (error) {
        console.error('Error al eliminar el registro:', error);
    }
}

function mostrarEliminacionExitosa() {
    var eliminacionExitosaModal = new bootstrap.Modal(document.getElementById('eliminacionExitosaModal'));
    eliminacionExitosaModal.show();
}

function cerrarModal() {
    var confirmaModal = new bootstrap.Modal(document.getElementById('confirmarEliminarModal'));
    confirmaModal.hide();

    var eliminacionExitosaModal = new bootstrap.Modal(document.getElementById('eliminacionExitosaModal'));

    eliminacionExitosaModal.hide();

    setTimeout(function () {
        window.location.reload();
    }, 15);
}
