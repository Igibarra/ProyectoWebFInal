@extends('plantilla')
@section('titulo')
    Visión
@endsection('titulo')
@section('section')
 <section class="contenedor section-div">
    <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="acerca">Acerca de</a></li>
          <li>Visión </li>
        </ul><br/>
        <div class="contenedor-section-div">
            <img class="imagen-about-use" src="imagenes/dd.png" />
            <div class="contenido-textos2">
                <center><h3 class="titulo">Visión</h3></center>
                <center>
                    <p>
                        Nuestra vision es que la mayoria de las personas esten familiarizadas con el hardware 
                        y les sea mas facil identificar un poblema en sus computadoras
                    </p>
                </center>
            </div><br />
        </div>
        
    </section>
    @endsection('section')