<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTEGRADOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Integrador, FullStack PHP!</title>
</head>

<header class="header">
    <!-- <div class="menu_grande">
        <div class="text-center">
            <div class="row"> -->
    <!-- <div class="col-2 columna1">
                    <img src="image/codoacodo.png" alt="Codo a Codo" class="logo">
                </div>
                <div class="col-1 columna3 conf_bs_as">
                    <a>Conf Bs As</a>
                </div> -->

    <!-- Incluimos el nav-bar -->
    <!-- <div class="col-9 columna2"> -->
    <?php
    include 'nav-bar.html';
    ?>
    <!-- </div> -->
    <!-- </div> -->

    <!-- </div> -->
    <!-- </div> -->
</header>
<!-- ================================================================ -->

<body>
    <div class="text-center">
        <main>
            <!-- SECCION XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
            <section class="imagen_grande">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./image/ba11290x780barro.png" class="d-block w-100" alt="...">
                            <div class="contenido_fijo">
                                <!-- Contenido de texto plano y botones aquí -->
                                <div class="col-6 fila2a"></div>
                                <div class="col-5 fila2b">
                                    <div class="titulo_tarjeta">
                                        <a>Conf Bs As</a>
                                    </div>
                                    <p class="parrafo_tarjeta">
                                        Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!
                                    </p>
                                    <div class="botones_tarjeta">
                                        <a href="#conviertete_orador">
                                            <button type="button" class="btn btn-outline-secondary"> Quiero ser orador</button>
                                        </a>
                                        <a href="tickets.html">
                                            <button type="button" class="btn btn-success">Comprar tickets</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-1 fila2c"></div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            <!-- SECCION  XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
            <section class="tres_imagenes">
                <div class="titulo_pequeño">
                    <div class="row">
                        <div class="col-12">
                            <a>CONOCE A LOS</a>
                            <section id="oradores">
                                <h5>ORADORES</h5>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="tres_imagenes">
                    <div class="row alineo_tres_imagenes">
                        <div class="col-12 tres_fotos">

                            <!-- agrego tres card -->
                            <div class="card-group">
                                <!-- card 1 -->
                                <div class="card">
                                    <img src="image/steve2.jpg" class="card-img-top" alt="Foto de Steve Jobs">
                                    <div class="card-body alineo_botes_y_texto">
                                        <button type="button" class="btn btn-warning">JavaScript</button>
                                        <button type="button" class="btn btn-info">React</button>
                                        <h5 class="card-title">Steve Jobs</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit accusantium facilis sint repudiandae. Doloribus excepturi sed voluptatibus voluptatem, quae hic odit impedit vero, nobis adipisci in inventore aliquid aspernatur sint.</p>
                                        <p class="card-text"><small class="text-body-secondary"></small></p>
                                    </div>
                                </div>
                                <!-- card 2 -->
                                <div class="card">
                                    <img src="image/bill.jpg" class="card-img-top" alt="Foto de Bill Gates">
                                    <div class="card-body alineo_botes_y_texto">
                                        <button type="button" class="btn btn-warning">JavaScript</button>
                                        <button type="button" class="btn btn-info">React</button>
                                        <h5 class="card-title">Bill Gates</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quidem iure rem animi voluptates expedita dolorem soluta neque? Facilis, omnis repellat quod assumenda sunt perspiciatis minima vitae doloribus vel dolorum.</p>
                                        <p class="card-text"><small class="text-body-secondary"></small></p>
                                    </div>
                                </div>
                                <!-- card 3-->
                                <div class="card">
                                    <img src="image/ada.jpeg" class="card-img-top" alt="Foto de Ada Lovelace">
                                    <div class="card-body alineo_botes_y_texto">
                                        <button type="button" class="btn btn-secondary">Negocios</button>
                                        <button type="button" class="btn btn-danger">Startups</button>
                                        <h5 class="card-title">Ada Lovelace</h5>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, similique repudiandae. Eius magni tenetur commodi beatae id eveniet harum rerum itaque accusamus necessitatibus culpa ipsum officiis, est repudiandae quasi sit.</p>
                                        <p class="card-text"><small class="text-body-secondary"></small></p>
                                    </div>
                                </div>

                            </div>

                            <!-- fin de las card -->

                        </div>
                    </div>
                </div>
            </section>
            <!-- SECCION imagen y texto XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
            <section class="imagen_y_texto">
                <!-- <div class="imagen_texto"> -->
                <div class="row ajusto_imagen_texto">
                    <div class="col-12 texto_octubre">
                        <!-- imagen y texto -->
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="image/honolulu.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body alineo_texto_octubre">
                                        <section id="lugar_fecha">
                                            <h5 class="card-title">Bs As - Octubre</h5>
                                        </section>
                                        <p class="card-text">Buenos Aires es la provincia y localidad mas grane del estado de Argentina. En los Estados Unidos, Honolulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad-condado consolidada que cubre toda la ciudad (aproximadamente 600 km2 de la superficie).</p>
                                        <button type="button" class="btn btn-lightmio ">Conocé más</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  fin imagen y texto -->
                    </div>
                </div>
                <!-- </div> -->
            </section>

            <!-- SECCION XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
            <section class="titulos_y_formulario">
                <div class="titulo_pequeño_formulario">
                    <div class="row">
                        <div class="col-12">
                            <section id="conviertete_orador">
                                <a> CONVIERTETE EN UN</a>
                            </section>
                            <h5>ORADOR</h5>
                            <P class="titulo_peq_form">Anótate como orador para dar una charla ignite. Cuéntanos de que quieres hablar!</P>
                        </div>
                    </div>

                </div>
                <!-- FORMULARIO OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->
                <!-- <div class="container"> -->
                <!-- <form action="procesador_oradores.php" method="post"> -->
                <form action="procesador_oradores.php" method="post">
                    <!-- primer row mmmmmmmmmmmmmmmmmmm-->
                    <div class="row">
                        <div class="col-3 izquierdoForm">
                        </div>
                        <div class="col-3">
                            <div class="col-75 form-nombre">
                                <input type="text" id="fname" name="nombre" required placeholder="Nombre">
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="col-75 form-apellido">
                                <input type="text" id="lname" name="apellido" required placeholder="Apellido">
                            </div>
                        </div>
                        <div class="col-3 derechoForm"></div>

                        <!--  agrego email mmmmmmmmmmmmmmmmmmmm-->
                        <!--  SEGUNDO ROW   EMAIL  mmmmmmmmmmmmmmmmmmmm-->

                        <div class="row">
                            <div class="col-3 izquierdoForm"></div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"></label>
                                    <input type="email" name="mail" class="form-control" id="email_oradores" placeholder="Correo">
                                    <!-- mmmmmmmmmmmm   agregado para prueba mmmmmmm-->
                                    <!-- <label for="fecha_alta">Fecha de Alta:</label>
                                 <input type="date" name="fecha_alta" required> -->
                                </div>
                            </div>
                            <div class="col-3 derechoForm"></div>
                        </div>

                        <!-- TERCER row mmmmmmmmmmmmmmmmmmm-->

                        <!--  segundo row mmmmmmmmmmmmmmmmmmmm-->
                        <div class="row">
                            <div class="col-3 izquierdoForm"></div>
                            <div class="col-6">
                                <div class="col-75">
                                    <textarea id="subject" name="tema" required placeholder="Sobre que quieres hablar?" style="height:200px"></textarea>
                                </div>
                            </div>
                            <div class="col-3 derechoForm"></div>
                        </div>

                        <!-- tercer row pequeño mensaje mmmmmmmmmmmmmmmmmmmm -->
                        <div class="row">
                            <div class="col-3 izquierdoForm"> </div>
                            <div class="col-6 pequeño_mensaje">
                                <p>Recuerda incluir un titulo para tu charla</p>
                            </div>
                            <div class="col-3 derechoForm"> </div>
                        </div>

                        <!-- cuarto row submit mmmmmmmmmmmmmmmmmmmmmmm -->
                        <div class="row">
                            <div class="col-3 izquierdoForm"></div>
                            <div class="col-6">
                                <input type="submit" value="Enviar">
                            </div>

                            <div class="col-3 derechoForm">

                            </div>
                        </div>
                        <!-- fin de tercer row -->
                </form>
                <!-- </div> -->

                <!-- FIN DE FORMULARIOS -->
            </section>
        </main>
    </div>
    <script src="./carousel.js"></script>
</body>

<!-- Incluimos el footer -->
<footer>
    <?php
    include 'footer.html';
    ?>
</footer>

</html>



<!-- ESTE ERA EL CODIGO QUE ARIEL SE DEJO COMENTADO PARA TENER A futuro ///
section class="imagen_grande">
<div class="row">
                        <div class="col-12 columna_imagen_grande">

                            <div class="col-12 fila1"> -->
<!-- incluyo imagen grande -->
<!-- <img src="image/ba11260x697barro.png" class="card-img-top" alt="Foto de Obras Sanitarias"> -->
<!-- <img src="image/ba11260x697barro.png" class="card-img-top" alt="Foto de Obras Sanitarias"> -->
<!-- sin datos -->

<!-- AGREGO CARRUSEL DE REPRODUCCION AUTOMATICA -->
<!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="image/ba1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="image/ba2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="image/ba3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div> -->
<!-- FIN DE CARROUSEL -->
<!-- 
                            </div>
                            <div class="row">
                                <div class="col-6 fila2a">

                                </div>
                                <div class="col-5 fila2b">
                                    <div class="titulo_tarjeta">
                                        <a>Conf Bs As</a>
                                    </div>
                                    <p class="parrafo_tarjeta">
                                        Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que estan creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tnemos para ti. Te esperamos!
                                    </p>
                                    <div class="botones_tarjeta">

                                        <a href="#conviertete_orador">
                                            <button type="button" class="btn btn-outline-secondary"> Quiero ser orador</button>
                                        </a>

                                        <a href="tickets.html">
                                            <button type="button" class="btn btn-success">Comprar tickets</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-1 fila2c"></div>
                            </div>
                        </div>
                    </div>
                </section> -->