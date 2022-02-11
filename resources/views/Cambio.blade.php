@extends('plantilla')
@section('titulo')
    Cambio de Componentes
@endsection('titulo')
@section('section')
<section class="contenedor section-div">
    <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="servicios">Servicios</a></li>
          <li>Cambio de Componentes</li>
        </ul><br/>
        <h2 class="titulo">Cambios de Componentes</h2>   
        <div class="contenedor-section-div">
            <div class="contenido-textos">
                <p>

                    Se denomina hardware a todos los elementos tangibles de la computadora: procesador, monitor, teclado, tarjetas, circuitos integrados, cables, etc.

                    El hardware de una computadora está compuesto por la unidad central, los dispositivos periféricos de entrada, de salida y de entrada/salida, así como por los cables, conexiones y puertos que permiten la interacción de todos ellos. Todos estos elementos en conjunto constituyen la arquitectura básica de la computadora.

                    Los componentes de hardware básicos de una computadora son tres: unidad central de proceso o CPU, monitor y teclado.
                </p>
            </div>

        </div>
        
            <div class="contenedor-section-div">
                <div class="contenido-textos">
                    <center><h3 class="titulo">Externas</h3></center>
                    <center>
                        <p>
                            El hardware externo es un conjunto de componentes físicos que no forman parte del dispositivo principal, sino que funcionan como elementos complementarios a este.
                            <br />Además, el hardware externo puede ser de por sí un dispositivo central, puesto que a su vez puede interactuar con otros hardware que actuarían como externos.


                        </p>
                    </center>
                </div><br />
                      <img class="imagen-about-use" src="imagenes/teclado.jpg" />
            </div><br /><br /><br />
            <div class="contenedor-section-div">
                <img class="imagen-about-use" src="imagenes/reparación.jpg"/>
                <div class="contenido-textos">
                    <center><h3 class="titulo">Internas</h3></center>
                    <center>
                        <p>
                            El hardware interno es el conjunto de componentes físicos que forman parte del dispositivo principal, siendo inseparable de este.

                            En otras palabras, cada parte del hardware interno es una pieza fundamental de cara al funcionamiento correcto del dispositivo. Ya que si faltara alguna de las partes de este, podría bien no ejecutar alguna tarea e incluso directamente no funcionar.
                        </p>
                    </center>
                </div><br />
            </div>
        
    </section>
    <footer>
@endsection('section')