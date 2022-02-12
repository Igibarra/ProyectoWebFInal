@extends('plantilla2')
@section('titulo')
    Formateo de PC
@endsection
@section('id-page')
    <p class="id-page">@Formateos</p>
@endsection
@section('pan')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Servicios</a></li>
    <li class="breadcrumb-item active" aria-current="page">Formateo</li>
  </ol>
</nav>
@endsection
@section('hero')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner container-fluid">
			<div class="carousel-item active">
			<img src="../Imagenes/fm1.jpg" class="d-block w-100 img-fluid" alt="...">
			</div>
			<div class="carousel-item">
			<img src="../Imagenes/fm2.jpg" class="d-block w-100 img-fluid" alt="...">
			</div>
			<div class="carousel-item">
			<img src="../Imagenes/fm3.jpg" class="d-block w-100 img-fluid" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
		</div>
@endsection

@section('section')
<div class="ldiv"></div>
<div class="row row--bs">
    <div class="card col-12 col-md-4 col-lg-4" >
    <img src="../Imagenes/Logo.png" class="card-img-top" alt="Logo">
    <div class="card-body">
        <h5 class="card-title">Formatea tu Computadora</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Ir a formatear</a>
    </div> <div class="ldiv"></div>
    </div>
    <div class="card  col-12 col-md-4 col-lg-4" ">
    <img src="../Imagenes/p.png" class="card-img-top" alt="Logo">
    <div class="card-body">
        <h5 class="card-title">Actualiza tu software</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Ver actualizaciones</a>
    </div> <div class="ldiv"></div>
    </div>
    <div class="card  col-12 col-md-4 col-lg-4" ">
    <img src="../Imagenes/laptop.png" class="card-img-top" alt="Logo">
    <div class="card-body">
        <h5 class="card-title">Instala programas</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Ver Programas</a>
    </div> <div class="ldiv"></div>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-6">
      <p class="parra-bs">
        <b>Formatear el PC es</b> , básicamente, borrar absolutamente todo lo que contiene su medio de almacenamiento principal, incluyendo el propio sistema operativo. Una tarea que puede servir para venderlo a otra persona, para cambiar la función de su disco duro o para ‘empezar de cero’, por ejemplo, con una instalación limpia del mismo o de otro sistema operativo. Como en las versiones anteriores, podemos formatear el PC en Windows 10 con las herramientas específicas de Microsoft, de forma sencilla. Te explicamos cómo en este tutorial paso a paso, una guía con todo lo que necesitas.
      </p>
    </div>
    <div class="col-12 col-md-6 col-lg-6 img-bsa">
        <img src="../Imagenes/for.jpg" class="img-fluid" alt="..."><div class="ldiv"></div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
  <div class="col-12 col-md-6 col-lg-6 img-bsa">
        <img src="../Imagenes/for2.jpg" class="img-fluid" alt="..."><div class="ldiv"></div>
    </div>
    
    <div class="col-12 col-md-6 col-lg-6">
      <p class="parra-bs">
        <b>Motivos por los que formatear</b> Hay algunos motivos por los que podemos notar que Windows va mal y que todo lo que vas a leer aquí es necesario cuanto antes. Si tiene alguno de estos síntomas, empieza a estudiar las opciones para hacer copias de seguridad y formatear antes de que sea demasiado tarde.
        <br>
        <b>No se enciende </b> <br>
        Puede que no se encienda por muchos motivos diferentes, pero una de las soluciones es formatear el ordenador. No tiene por qué ser algún problema de software, pero podemos comprobarlo formateando si no sabemos ya qué hacer. Puede que esto no solucione el problema o sí. En caso de que no, podremos descartarlo y buscar qué es lo que sucede.
      </p>
    </div>
    
  </div>
</div>
@endsection('section')
