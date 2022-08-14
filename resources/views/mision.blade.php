@extends('plantilla2')
@section('titulo')
    Misión,Visión y Valores
@endsection
@section('id-page')
    <p class="id-page">@Mision</p>
@endsection
@section('pan')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Acerca de</a></li>
    <li class="breadcrumb-item active" aria-current="page">Misión,Visión y Valores</li>
  </ol>
</nav>
@endsection
@section('section')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 ">
        <p class="parrafos-bsr">
           <b>Nuestra Mision</b> es ayudar a cumplir la visión de nuestros clientes a través de nuestro trabajo y marcando la diferencia en el sector con servicios profesionales e innovadores.
        </p><br>
        <p class="parrafos-bsr">
           <b>Nuestra Visión</b> Nuestra visión es convertirnos en el refugio de nuestros clientes, donde puedan relajarse, hacer una pausa en su vida y por ende mejorar su calidad de vida a través de nuestros servicios.
        </p>
        <p class="parrafos-bsr">
           <b>Nuestros Valores</b>Innovación, puntualidad, honestidad, profesionalismo, resultados, empatía, ser hunano (con clientes y colaboradores)
        </p>
        </div>
        <div class="col-12 col-md-6 col-lg-6 img-bsa shadow-1-strong rounded">
            <img src="../Imagenes/13.jpg" class="img-fluid" alt="...">
        </div>
        </div>
    </div>
</div>

@endsection('section')