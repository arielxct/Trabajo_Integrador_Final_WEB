<!--  INSERTO CONEXION PHP A SERVIDOR WEBHOST -->
<?php


// Configuración de la conexión a la base de datos de WEBHOST
$servername = "localhost";
$username = "id21315121_arielct";
$password = "codeFullPhp#23";
$dbname = "id21315121_integrador_php";



// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

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
 <script src="tickets.js" ></script> 
<title>Integrador, FullStack PHP! Tickets</title>

</head>
<header class="header">
    <div class="container text-center">
        <div class="row">
            <div class="col-2 columna1">
                
                    <img src="image/codoacodo.png" alt="Codo a Codo" class="logo">

            </div>
            <div class="col-1 columna3">
                    <a>Conf Bs As</a>
            </div>
            <div class="col-9 columna2 ">
                
                <!-- comienzo barra de navegacion -->
                <ul class="nav justify-content-center ">
                    <li class="nav-item ">
                      <a class="nav-link active" aria-current="page" href="index.php">La conferencia</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php#oradores">Los oredores</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php#lugar_fecha">El lugar y la fecha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#conviertete_orador">Conviertete en orador</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link tickets" href="#comprar_tickets">Comprar tickets</a>
                      </li>

                   
                  </ul>
                
               
                <!-- fin de barra de navegacion -->
      
            </div>
        </div>

    </div>


</header>
<body>
    <div class="container text-center">

    
    <main>

        
<!-- MMMMMMMM   INSERTO CODIGO HTML PARA VER LA TABLA   MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM -->

<h2>Registros de la Tabla</h2>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Tema</th>
        <th>Fecha de Alta</th>
    </tr>

    <?php
    // Mostrar los registros en la tabla
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellido'] . "</td>";
            echo "<td>" . $row['mail'] . "</td>";
            echo "<td>" . $row['tema'] . "</td>";
            echo "<td>" . $row['fecha_alta'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No hay registros en la tabla</td></tr>";
    }

    // Cerrar la conexión
    $conn->close();
    ?>

</table>


</main>
</div> 
</body>
<footer >
    <div class="container text-center">
    
    <div class="row footer">
        <div class="col-1 izquierdoFooter">

        </div>
        <div class="col-10 botones_footer">
        
        <button type="button" class="btn btn-light">Preguntas frecuentes</button>
        <button type="button" class="btn btn-light">Contáctanos</button>
        <button type="button" class="btn btn-light">Prensa</button>
        <button type="button" class="btn btn-light">Conferencias</button>
        <button type="button" class="btn btn-light">Terminos y condiciones</button>
        <button type="button" class="btn btn-light">Privacidad</button>
        <button type="button" class="btn btn-light">Estudiantes</button>
        </div>

        <div class="col-1 derechoFooter">
                        
        </div>

    </div>
    </div>

</footer>
</html>