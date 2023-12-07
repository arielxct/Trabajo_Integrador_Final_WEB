function confirmarEliminar(btn) {
    // Recupero el valor del atributo 'data-id' del botón clickeado
    var id = btn.getAttribute('data-id');

    // Actualiza el data-id del botón dentro del modal
    document.getElementById('eliminarBtn').setAttribute('data-id', id);

    // Muestro modal usando boostrap
    var modal = new bootstrap.Modal(document.getElementById('confirmarEliminarModal'));

    modal.show();
}

async function eliminarRegistro() {
    // OBTENGO ID del botón de eliminar dentro del modal
    var id = document.getElementById('eliminarBtn').getAttribute('data-id');

    try {
        // Realiza una petición asincrónica para eliminar el registro utilizando fetch
        const response = await fetch('procesador_oradores.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `id=${id}&accion=eliminar`,
        });

        if (response.ok) {
            // Si la respuesta es correcta (se elimino el registro) se oculta el modal de confirmación de eliminación
            var confirmaModal = new bootstrap.Modal(document.getElementById('confirmarEliminarModal'));
            confirmaModal.hide();

            // Muestro el modal de eliminación exitosa luego de eliminar el registro
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

    // se recarga la pagina luego de 15 milisegundos porque si se ejecutaba inmediatamente no se mostraba el modal de eliminación exitosa
    setTimeout(function () {
        window.location.reload();
    }, 15);
}

// Un Event listener para los botones "Editar"
document.querySelectorAll('.btn-editar').forEach(function (btn) {
    btn.addEventListener('click', function () {
        // Oculta el botón "Editar" y muestra el botón "Guardar"
        btn.style.display = 'none';
        var id = btn.getAttribute('data-id');
        var btnGuardar = document.querySelector('.btn-guardar[data-id="' + id + '"]');
        btnGuardar.style.display = 'inline-block';

        // Convierte las celdas de texto de la tabla en inputs que se pueden editar
        var fila = btn.closest('tr');
        fila.querySelectorAll('td:not(:last-child)').forEach(function (td, index) {
            if (index !== 4) {  // No convertir el campo fecha_alta (índice 4)
                var valorOriginal = td.innerText;
                // Aquí agregamos una verificación para no convertir el botón de "Guardar" en un input
                if (index !== 5) {
                    td.innerHTML = '<input type="text" value="' + valorOriginal + '">';
                }
            }
        });
    });
});

// Agrega un event listener para los botones "Guardar"
document.querySelectorAll('.btn-guardar').forEach(function (btnGuardar) {
    btnGuardar.addEventListener('click', function () {
        // Oculta el botón "Guardar" y muestra el botón "Editar"
        btnGuardar.style.display = 'none';
        var id = btnGuardar.getAttribute('data-id');
        var btnEditar = document.querySelector('.btn-editar[data-id="' + id + '"]');
        btnEditar.style.display = 'inline-block';

        // Restaura los campos de texto a su estado original
        var fila = btnGuardar.closest('tr');
        fila.querySelectorAll('td:not(:last-child)').forEach(function (td, index) {
            if (index !== 4) {  // con esta verificacion evitamos que el campo fecha_alta tambien se convierta en input ya que no debe poder modificarse
                var valorInput = td.querySelector('input').value;
                td.innerHTML = valorInput;
            }
        });
    });
});

