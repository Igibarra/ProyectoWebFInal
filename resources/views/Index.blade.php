@extends('plantilla2')
@section('titulo')
    HardWorld
@endsection
@section('id-page')
    <p class="id-page">@Inicio</p>
@endsection
@section('pan')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
   
    <li class="breadcrumb-item active" aria-current="page">Inicio</li>
  </ol>
</nav>
@endsection
@section('hero')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner container-fluid">
			<div class="carousel-item active">
			<img src="../Imagenes/img-sl.jpg" class="d-block w-100 img-fluid" alt="...">
			</div>
			<div class="carousel-item">
			<img src="../Imagenes/img-sl1.jpg" class="d-block w-100 img-fluid" alt="...">
			</div>
			<div class="carousel-item">
			<img src="../Imagenes/img-sl2.jpg" class="d-block w-100 img-fluid" alt="...">
			</div>
            <div class="carousel-item">
                <img src="../Imagenes/yaya.png" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../Imagenes/ima.png" class="d-block w-100 img-fluid" style="width: 1024px" alt="...">
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
   <section class="conteiner-fluid">
            <div class="conteiner-fluid titu-bs">
                <h2 class="tn2">Bienvenidos</h2>
                <p>  Bienvenidos a hardworld el lugar donde puedes aprender todo el tema sobre las computadoras y como estan compuestas para su funcionamiento, tambien contamos con una seccion de soporte tecnico</p>
            </div>
         <div class="container">
            <div class="row g-2">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-3 border bg-light"><img class="img-fluid" src="Imagenes/computadora.jpg" /></div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                     <div class="p-3 border bg-light"><img class="img-fluid" src="Imagenes/soporte.jpg" /></div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-3 border bg-light"> <img class="img-fluid" src="Imagenes/teclado.jpg" /></div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-3 border bg-light"><img class="img-fluid" src="Imagenes/fuente.jpg" /></div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-3 border bg-light"><img class="img-fluid" src="Imagenes/falla.jpg" /></div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-3 border bg-light"><img class="img-fluid" src="Imagenes/reparación.jpg" /></div>
                </div>
                
                
            </div>
         </div>
         
         <div class="container">
         <div class="ldiv"></div>
            <div class="row">
                <div class="col-12 col-lg-6">
                <div class=" titu-bs" >
                    <h3 class="tn2">Computadora</h3>
                    
                    <p>
                         Una computadora es un dispositivo informático que es capaz de recibir, almacenar y procesar información de una forma útil. Una computadora está programada para realizar operaciones lógicas o aritméticas de forma automática.
                         Esta palabra se utiliza en la mayoría de países de Hispanoamérica, aunque en Chile y en Colombia es más común en masculino ('computador'). En España se usa más el término 'ordenador' (del francés ordinateur). 'Computadora' procede del inglés computer y a su vez de latín computare ('calcular').
                     </p>
                   
                </div>
                </div>
                
                <div class="col-12 col-lg-6">
                <iframe width="100%" height="400" class="imagen-about-us container-fluid" src="https://www.youtube.com/embed/xL8C5CIxDts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                </div>
            </div>
        </div>
        
        <div class="container">
         <div class="ldiv"></div>
            <div class="row">
            <div class="col-12 col-lg-6">
                <div>
                <iframe width="560" height="400" class="imagen-about-us container-fluid" src="https://www.youtube.com/embed/fZONU029MPU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                </div>
                <div class="col col-lg-6">
                <div class=" titu-bs" >
                    <h3 class="tn2">Hardware</h3>
                    
                    <p>
                    Hardware es la parte física de un ordenador o sistema informático. Está formado por los componentes eléctricos, electrónicos, electromecánicos y mecánicos, tales como circuitos de cables y luz, placas, memorias, discos duros, dispositivos periféricos y cualquier otro material en estado físico que sea necesario para hacer que el equipo funcione.
                    El término hardware viene del inglés, significa partes duras y su uso se ha adoptado en el idioma español sin traducción, siendo utilizado para para aludir a los componentes de carácter material que conforman un equipo de computación.
                     </p>
                   
                </div>
                </div>
              
            </div>
        </div>
            
        </div>
    </section>
@endsection('section')