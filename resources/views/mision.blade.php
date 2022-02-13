@extends('plantilla2')
@section('titulo')
    Misión
@endsection
@section('id-page')
    <p class="id-page">@Mision</p>
@endsection
@section('pan')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Acerca de</a></li>
    <li class="breadcrumb-item active" aria-current="page">Mision</li>
  </ol>
</nav>
@endsection
@section('hero')
 <div class="hero--bs">
 <img class="img-fluid" src="imagenes/mis.png"/>
 </div>
@endsection
@section('section')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 ">
        <p class="parrafos-bsr">
           <b>Nuestra Mision</b>   es poder llevar toda la informacion sobre
                        el hardware a aquellas personas que no esten familiarizadas
                        mediante una pagina de acceso gratuito de una manera facil e intuitiva
        </p>
        </div>
        <div class="col-12 col-md-6 col-lg-6 img-bsa">
            <img src="../Imagenes/mis2.jpg" class="img-fluid" alt="...">
        </div>
    </div>
</div>

@endsection('section')