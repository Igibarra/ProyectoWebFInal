@extends('plantilla')
@section('titulo')
    Quienes Somos
@endsection('titulo')
@section('section')
 <section class="contenedor section-div">
    <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="acerca">Acerca de</a></li>
          <li>¿Quienes Somos? </li>
        </ul><br/>
        <h2 class="titulo">Quienes somos</h2>
        <div class="contenedor-section-div">
            <img class="imagen-about-use" src="imagenes/somos.jpg" />
            <div class="contenido-textos2">
                <p>
                    Hardworld es una empresa que integra todo el conocimiento 
                    sobre las computadoras y lo presenta de una manera simple 
                    y entendible para cualquier tipo de usuario,
                    ya sean expertos o inexpertos, Hardworld es para ti
                </p>
            </div>

        </div><br />
        
    </section>
@endsection('section')