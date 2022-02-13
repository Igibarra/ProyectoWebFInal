@extends('plantilla2')
@section('titulo')
    Quienes Somos
@endsection
@section('id-page')
    <p class="id-page">@¿Quienes Somos?</p>
@endsection
@section('pan')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Acerca de</a></li>
    <li class="breadcrumb-item active" aria-current="page">Somos</li>
  </ol>
</nav>
@endsection
@section('hero')
 <div class="hero--bs">
 <img class="img-fluid" src="imagenes/qs.jpg"/>
 </div>
@endsection
@section('section')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 ">
        <p class="parrafos-bsr">
           <b>Hardworld</b>  es una empresa que integra todo el conocimiento 
             sobre las computadoras y lo presenta de una manera simple 
            y entendible para cualquier tipo de usuario,
            ya sean expertos o inexpertos, Hardworld es para ti
        </p>
        </div>
        <div class="col-12 col-md-6 col-lg-6 img-bsa">
            <img src="../Imagenes/gru.jpg" class="img-fluid" alt="...">
        </div>
    </div>
</div>
@endsection('section')