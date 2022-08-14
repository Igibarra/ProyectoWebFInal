@extends('plantilla2')
@section('titulo')
    Tratamientos Naturales PC
@endsection
@section('id-page')
    <p class="id-page">@Tratamientos Naturaless</p>
@endsection
@section('pan')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Servicios</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tratamientos Naturales</li>
  </ol>
</nav>
@endsection
@section('hero')
<div class="container col-lg-10">
<!-- Carousel wrapper -->
<div
  id="carouselVideoExample"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <video class="img-fluid" autoplay loop muted>
        <source src="https://mdbcdn.b-cdn.net/img/video/forest.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Relajate de la forma mas natural</h5>
        <p>
          Dentro de Genesis Spa ofrecemos la mejor experencia naturista
        </p>
      </div>
    </div>

   
</div>
<!-- Carousel wrapper -->
@endsection
@section('section')
<div class="container">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-6">
      <p class="parra-bs">
        <b>Nuestros Tratamientos Naturales</b> desarrollamos completas líneas de tratamientos de dermo-estética natural y ecológica certificada  para uso profesional y personal. Productos con los que cubrir las diferentes necesidades de la piel, a la vez que limitamos nuestro impacto en el medioambiente, a través de una cuidadosa selección tanto de las materias primas como de los envases de los productos.

Formulación, aroma, textura, diseño… trabajamos al lado de nuestros clientes para dar forma a una completa gama de cosméticos naturales que se ajuste a la identidad y personalidad de cada negocio.
        <br>
        A todos nos gusta encender el ordenador y que la pantalla de inicio de sesión aparezca de inmediato. Introducimos usuario y contraseña, abrimos un par de programas y aparecen en pantalla en segundos. Así da gusto.
      </p>
      <img
                src="../Imagenes/ww.jpg"
                alt="Coconut with Strawberries"
                class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
            />
    </div>
    <div class=" col-md-6 col-lg-6">
        <img src="../Imagenes/10.jpg" class="img-fluid" alt="...">
        <img
                src="../Imagenes/estetica4.jpg"
                alt="Coconut with Strawberries"
                class="w-100 h-89 mb-2 mb-md-4 shadow-1-strong rounded"
            />
    </div>
  </div>
</div>

<div class="container">
    
    <div class="row">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Exfoliantes
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>La exfoliación</strong> elimina ese exceso de células muertas acumuladas en la epidermis que el cuerpo es incapaz de retirar. Es un proceso que complementa este fenómeno natural y ayuda a que la piel se vea nueva, fresca y luminosa.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Envolturas, mascarillas y todo tipo de aceites y aromas para masajes.
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>Ofrecemos</strong> una gran cantidad de recursos naturista.Para ayudar de limpiar, exfoliar la piel y eliminar las células muertas, por ello, son perfectas para las pieles grasas. Es una de las mejores maneras de hidratar tu rostro ya que sus principios activos humedecen y nutren las capas más profundas
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Mas información
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>Para más información</strong>comunicate en nuestras redes sociales y nuestras sucursales.
      </div>
    </div>
  </div>
</div>
    </div><br><br>
@endsection