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
@section('section')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 ">
        <p class="parrafos-bsr">
           <b>Somos</b> un centro dirigido a ambos sexos, donde nuestro objetivo principal es lograr que las personas se sientan mejor consigo mismas, mediante  nuestros servicios de  cuidado facial y  corporal, para mantener y/o mejorar la apariencia física, elevando la autoestima y por ende, obtener  una mejor salud física y  emocional;  así como, el lograr  olvidarse   por  un   momento   del   estrés   bajo  el  que  vivimos,   en  un  espacio  lleno  de  armonía  y profesionalismo para satisfacer las necesidad de verse y sentirse bien.
           <br><b>En GENESIS SPA</b>, contamos con personal calificado, productos farmacomecéuticos y aparatología médico-estético que cumple los mayores estándares calidad a nivel mundial, esto nos permite lograr excelentes resultados.
        </p>
        </div>
        <div class="col-12 col-md-6 col-lg-6 img-bsa shadow-1-strong rounded">
            <img src="../Imagenes/12.jpg" class="img-fluid" alt="...">
        </div>
    </div>
</div>
@endsection('section')