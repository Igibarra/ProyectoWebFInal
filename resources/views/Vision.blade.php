@extends('plantilla2')
@section('titulo')
    Visión
@endsection
@section('id-page')
    <p class="id-page">@Vision</p>
@endsection
@section('pan')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Acerca de</a></li>
    <li class="breadcrumb-item active" aria-current="page">Vision</li>
  </ol>
</nav>
@endsection
@section('hero')
 <div class="hero--bs">
 <img class="img-fluid" src="imagenes/vis.png"/>
 </div>
@endsection
@section('section')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 ">
        <p class="parrafos-bsr">
           <b>Nuestra Vision</b>   Nuestra vision es que la mayoria de las personas esten familiarizadas con el hardware 
                        y les sea mas facil identificar un poblema en sus computadoras
        </p>
        </div>
        <div class="col-12 col-md-6 col-lg-6 img-bsa">
            <img src="../Imagenes/vis2.jpg" class="img-fluid" alt="...">
        </div>
    </div>
</div>
@endsection