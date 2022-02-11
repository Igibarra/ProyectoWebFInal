@extends('plantilla')
@section('titulo')
    Misión
@endsection('titulo')
@section('section')
 <section class="contenedor section-div">
    <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="acerca">Acerca de</a></li>
          <li>Misión </li>
        </ul><br/>
        <div class="contenedor-section-div">
            <div class="contenido-textos2">
                <center><h1 class="titulo">Misión</h1></center>
                <center>
                    <p>
                        Nuestra mision es poder llevar toda la informacion sobre
                        el hardware a aquellas personas que no esten familiarizadas
                        mediante una pagina de acceso gratuito de una manera facil e intuitiva
                    </p>
                </center>
            </div><br />
            <img class="imagen-about-use" src="imagenes/mision.jpg" />
    </section>
@endsection('section')