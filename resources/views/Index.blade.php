@extends('plantilla')
@section('section')
        <section class="contenedor section-div">
        <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li>Inicio</li><br/>
        </ul>
        <h2 class="titulo">Bienvenidos</h2>
        <div class="contenedor-section-div">
            <div class="contenido-textos">
                <p>
                    Bienvenidos a hardworld el lugar donde puedes aprender todo el tema sobre las computadoras y como estan compuestas para su funcionamiento, tambien contamos con una seccion de soporte tecnico
                </p>
            </div>

        </div>
        <div>
            <table class="table">
                <tr>
                    <td>
                        <img class="img_table" src="Imagenes/computadora.jpg" />
                    </td>
                    <td>
                        <img class="img_table" src="Imagenes/soporte.jpg" />
                    </td>
                    <td>
                        <img class="img_table" src="Imagenes/teclado.jpg" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="img_table" src="Imagenes/fuente.jpg" />
                    </td>
                    <td>
                        <img class="img_table" src="Imagenes/falla.jpg" />
                    </td>
                    <td>
                        <img class="img_table" src="Imagenes/reparación.jpg" />
                    </td>
                </tr>
            </table><br />
            <div class="contenedor-section-div">
                <div class="contenido-textos">
                    <center><h3 class="titulo">Computadora</h3></center>
                    <center>
                        <p>
                           
                            Una computadora es un dispositivo informático que es capaz de recibir, almacenar y procesar información de una forma útil. Una computadora está programada para realizar operaciones lógicas o aritméticas de forma automática.<br />

                            Esta palabra se utiliza en la mayoría de países de Hispanoamérica, aunque en Chile y en Colombia es más común en masculino ('computador'). En España se usa más el término 'ordenador' (del francés ordinateur). 'Computadora' procede del inglés computer y a su vez de latín computare ('calcular').
                        </p>
                    </center>
                </div><br />
                <iframe width="180" height="300" class="imagen-about-us" src="https://www.youtube.com/embed/xL8C5CIxDts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div><br /><br /><br />
            <div class="contenedor-section-div">
                <iframe width="560" height="315" class="imagen-about-us" src="https://www.youtube.com/embed/fZONU029MPU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="contenido-textos">
                    <center><h3 class="titulo">Hardware</h3></center>
                    <center>
                        <p>
                            Hardware es la parte física de un ordenador o sistema informático. Está formado por los componentes eléctricos, electrónicos, electromecánicos y mecánicos, tales como circuitos de cables y luz, placas, memorias, discos duros, dispositivos periféricos y cualquier otro material en estado físico que sea necesario para hacer que el equipo funcione. <br />

                            El término hardware viene del inglés, significa partes duras y su uso se ha adoptado en el idioma español sin traducción, siendo utilizado para para aludir a los componentes de carácter material que conforman un equipo de computación.
                        </p>
                    </center>
                </div><br />
            </div>
        </div>
    </section>
@endsection('section')