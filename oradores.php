<!--  INSERTO CONEXION PHP A SERVIDOR WEBHOST -->
<?php
include 'db_config.php';
?>

<?php
// Consulta para obtener todos los registros de la tabla 
$sql = "SELECT * FROM oradores";
$result = $conn->query($sql);
?>

<!--  FIN DE PHP CONEXION A SERVIDOR WEBHOST -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTEGRADOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Integrador, FullStack PHP! Tickets</title>
</head>

<header class="header">
    <?php
    include 'nav-bar.html';
    ?>
</header>

<body>
    <div class="container text-center speakers">
        <main>
            <h2>Nuestros oradores registrados</h2>
            <table class="table table-bordered border-primary-subtle">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Tema</th>
                        <th>Fecha de Alta</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['nombre'] . "</td>";
                            echo "<td>" . $row['apellido'] . "</td>";
                            echo "<td>" . $row['mail'] . "</td>";
                            echo "<td>" . $row['tema'] . "</td>";
                            echo "<td>" . $row['fecha_alta'] . "</td>";

                            echo "<td><button type='button' class='btn btn-warning'>Editar</button></td>";
                            echo "<td><button type='button' class='btn btn-danger' data-id='" . $row['id'] . "' onclick='confirmarEliminar(this)'>Eliminar</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No hay registros en la tabla</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </div>

    <!-- Modal de Confirmación de Eliminación -->
    <div class="modal" id="confirmarEliminarModal" tabindex="-1" aria-labelledby="confirmarEliminarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmarEliminarModalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que deseas eliminar este registro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <!-- Cambiado el ID y agregado el atributo data-id -->
                    <button type="button" class="btn btn-danger" id="eliminarBtn" data-id="" onclick="eliminarRegistro()">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="eliminacionExitosaModal" tabindex="-1" aria-labelledby="eliminacionExitosaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-warning text-success">
                <div class="modal-header">
                    <h5 class="modal-title" id="eliminacionExitosaModalLabel">Eliminación Exitosa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <strong>Registro eliminado con éxito.</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onClick="cerrarModal()">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="oradores.js"></script>
</body>

<footer>
    <?php
    include 'footer.html';
    ?>
</footer>

</html>