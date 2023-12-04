document.addEventListener('DOMContentLoaded', function () {
    console.log('EL SCRIPT SE CARGO')
    var carouselInner = document.querySelector('.carousel-inner');
    var images = [
        // "./image/ba11290x780barro.png",
        "./image/berkshire.jpg",
        "./image/alexandre-pellaes-6vAjp0pscX0-unsplash-1-1.jpg",
        "./image/hawaii3.jpg"
    ];

    var content = `
        <div class="carousel-item">
            <img src="{{imageSrc}}" class="d-block w-100" alt="...">
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
    `;

    // Agrega contenido a cada elemento del carrusel 
    images.forEach(function (imageSrc, index) {
        console.log('Agregando imagen:', imageSrc);
        var isActive = index === 0 ? 'active' : '';
        carouselInner.innerHTML += content.replace('{{imageSrc}}', imageSrc).replace('{{ACTIVE_CLASS}}', isActive);
        console.log('ESTE ES EL CAROUSEL INNER HTML', carouselInner.innerHTML)
    });


});
