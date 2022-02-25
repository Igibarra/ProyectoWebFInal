@extends('plantilla')
@section('titulo')
    Acerca de 
@endsection('titulo')
@section('section')
<section class="contenedor section-div">
    <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li>Acerca de</li>
        </ul><br/>
        <h2 class="titulo">Acerca</h2>
        <center> <img src="imagenes/hola.png" width="600px" /></center>
         <center>
                <p class=" ti">
                    En esta sección conoceras todo acerca de Hardworld
                </p>
                <ul class="ti">
                        <li><a href="quienes">Quienes somos</a></li>
                        <li><a href="mision">Misión</a></li>
                        <li><a href="vision">Visión</a></li>
                </ul>
        </center>
                
            </div>
    </section>
@endsection('section')