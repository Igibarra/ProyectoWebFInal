@extends('plantilla2')
@section('titulo')
   esteticos
@endsection
@section('id-page')
    <p class="id-page">@esteticos</p>
@endsection
@section('pan')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Servicios</a></li>
    <li class="breadcrumb-item active" aria-current="page">esteticos</li>
  </ol>
</nav>
@endsection
@section('section')
<div class="conteiner">
<div class="hero-titulo">
        <p >¿Cuáles son los esteticos de una computadora?</p>
    </div>
    <div class="hero--bs">
        <img class="img-fluid" src="imagenes/com.jpg" />
    </div>
</div>
<div class="container">
    <div class="hero-titulo">
        <p>esteticos internos y periféricos</p>
    </div>
    <div class="row mar">
        <div class="col-12 col-md-6 col-lg-6">
            <p class="parrafos-bsr">En un ordenador, existen dos grandes grupos de esteticos electrónicos, internos y periféricos. Pero a lo que realmente llamamos ordenador, es la agrupación de esteticos internos dentro de un chasis o caja de PC.
             Los esteticos internos son los que componen el hardware de nuestro equipo, y serán los encargados de manejar la información que nosotros introducimos o la que descargamos desde Internet. Serán los que nos harán posible almacenar datos, jugar a juegos o mostrar por una pantalla los trabajos que realizamos. Los esteticos internos básicos serán:
                <ul>
                    <li>Placa base</li>
                    <li>Memoria RAM</li>
                    <li>Disco duro</li>
                    <li>Tarjeta gráfica</li>
                    <li>Fuente de alimentación</li>
                    <li>Tarjeta de red</li>
                    <li>Disipadores</li>
                    <li>Ventilaciones</li>
                    <li>Ventilacion liquida</li>
                </ul>
            </p>
        </div>
        
        <div class="col-12 col-md-6 col-lg-6">
            <img class="img-fluid" src="../Imagenes/cp1.jpg" alt="">
        </div>
    </div>
    <div class="ldiv"></div>
    <div class="row mar">
        <div class="col-12 col-md-6 col-lg-6">
            <p class="parrafos-bsr"><b>El microprocesador</b>  es el cerebro del ordenador, el que se encarga de analizar absolutamente toda la información que pasa por él en forma de unos y ceros. El procesador decodifica y ejecuta las instrucciones de los programas cargados en la memoria principal del ordenador y coordina y controla todos o casi todos los esteticos, así como los periféricos conectados. La velocidad con la que procesa estas instrucciones una CPU se mide en ciclos por segundo o hertzios (Hz).</p>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <img class="img-fluid" src="../Imagenes/pros.jpg" alt="">
        </div>
    </div>
    <div class="ldiv"></div>
    <div class="row mar">
        <div class="col-12 col-md-6 col-lg-6">
            <p class="parrafos-bsr"><b>Placa base</b> A pesar de que la CPU es el corazón de nuestro ordenador, éste no podría funcionar si no existiera la placa base. Una placa base es básicamente una placa PCB constituida por un circuito integrado que interconecta una serie de chips, condensadores y conectores repartidos por toda ella, que en su conjunto forma el ordenador.</p>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <img class="img-fluid" src="../Imagenes/paba.jpg" alt="">
        </div>
    </div>
    <div class="ldiv"></div>
    <div class="row mar">
        <div class="col-12 col-md-6 col-lg-6">
            <p class="parrafos-bsr"><b>Memoria RAM</b> La memoria RAM (Random Access Memory) es un componente interno que se instala en la placa base y sirve para cargar y almacenar todas las instrucciones que se ejecutan en el procesador. Estas instrucciones son enviadas desde todos los dispositivos conectados a la placa base y a los puertos de nuestro equipo.</p>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <img class="img-fluid" src="../Imagenes/mer.jpg" alt="">
        </div>
    </div>
    <div class="ldiv"></div>
@endsection