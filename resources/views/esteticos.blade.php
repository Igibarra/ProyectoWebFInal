@extends('plantilla2')
@section('titulo')
   Tratamientos esteticos
@endsection
@section('id-page')
    <p class="id-page">@esteticos</p>
@endsection
@section('pan')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Servicios</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tratamientos Esteticos</li>
  </ol>
</nav>
@endsection
@section('section')
<div class="container">
    <div class="hero-titulo">
        <p>Tu Belleza Estetica</p>
    </div>
    <div class="row mar">
        <div class="col-12 col-md-6 col-lg-6">
            <p class="parrafos-bsr">Es una de las mejores opciones en tratamientos faciales, corporales y depilación, además te ofrecemos productos de la mejor calidad para el cuidado de tu piel.
                Nuestra misión es mejorar el bienestar de nuestros clientes con servicios de la más alta calidad. Nuestros especialistas están altamente calificados en cada uno de los tratamientos que ofrecemos. 
                Somos una de las mejores compañías en ofrecer tratamientos faciales y corporales, de la mas alta calidad, servicio y resultados además te ofrecemos productos de la mejorar la calidad del cuidado de tu piel.<br>
                <center><h2>Ventajas</h2></center>
                <ul class="n-service">
                    <li><h3>Retrasa el envejecimiento del rostro<h3></li>
                    <li><h3>Relaja la musculatura</h3></li>
                    <li><h3>Aporta luminosidad y brillo</h3></li>
                    <li><h3>Eliminando impurezas y células muertas</h3></li>
                    <li><h3>Mejora la salud general y psicofísica</h3></li>
                    <li><h3>Favorece una mejor calidad de vida</h3></li>
                    <li><h3>Aumenta la autoestima y la confianza de quienes se someten a estos procedimientos</li>
                    <li><h3>Embellecimiento de la cara y cuello</h3></li>
                </ul>
            </p>
        </div>
        
        <div class="col-12 col-md-6 col-lg-6">
        <div class="lightbox">
        <div class="row">
            <div class="col-lg-6">
            <div class="ldiv"></div>
            <img
                src="../Imagenes/esteticos1.jpg"
                alt="Table Full of Spices"
                class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
            />
            <img
                src="../Imagenes/estetica2.jpg"
                alt="Coconut with Strawberries"
                class="w-100 h-89 mb-2 mb-md-4 shadow-1-strong rounded"
            />
            <div class="ldiv"></div>
            </div>
            <div class="col-lg-6">
            <div class="ldiv"></div>
            <img
                src="../Imagenes/esteticos3.jpg"
                data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Vertical/1.webp"
                alt="Dark Roast Iced Coffee"
                class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
            />
            <img
                src="../Imagenes/estetica4.jpg"
                alt="Coconut with Strawberries"
                class="w-100 h-89 mb-2 mb-md-4 shadow-1-strong rounded"
            />
            <div class="ldiv"></div>
@endsection