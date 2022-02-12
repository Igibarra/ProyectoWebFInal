<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/custom.css" />
	<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
    <title>HardWorld</title>
</head>
<body>
	<header>
		<section class="header-bs">
			<div>
				<a id="boton" href="/"><img class="img_header" src="imagenes/Logo.png"/></a>
				<h1 class="titulos_header">HardWorld</h1>
			</div>
           
        </section>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
		  	<div class="container-fluid">
		   		<a class="navbar-brand" href="#"><img class="img_header" src="imagenes/Logo.png"/></a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>

			    </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link " aria-current="page" href="#">Inicio</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Formateo</a></li>
								<li><a class="dropdown-item" href="#">Componentes</a></li>
								<li><a class="dropdown-item" href="#">Mantenimientos</a></li>
								<li><a class="dropdown-item" href="#">Instalción de Software</a></li>
								
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acerca De</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Somos</a></li>
								<li><a class="dropdown-item" href="#">Mision</a></li>
								<li><a class="dropdown-item" href="#">Vision</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link " aria-current="page" href="#">Contactos</a>
						</li>
					</ul>
					<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Buscar</button>
					</form>
				</div>
		    </div>
		</nav>
		<section>
       	 @yield('pan')
   		 </section>
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
	</header>
	<section>
        @yield('section')
    </section>
	<footer class="conteiner-fluid">
		<div class="container-fluid">
		<a id="boton" href="/"><img class="img_f" src="imagenes/Logo.png"/></a>
			<div class="row">
				<div class="col-12 col-lg-6">
						Estamos ubicados en: <br />
                        Carretera México 200, Km 9 63786, <br />
                        Col, 24 de Febrero, Xalisco, Nay.
				</div>
				
				<div class="col-12 col-lg-6">
				Buscanos en redes sociales<br />
                        facebook: hardworld<br />
                        whatsapp: 3112334413
				</div>
			</div>
		</div>
        <div class="footer-bottom">
            <p>Copyright &copy;;2021 HardWorld</p>
        </div>
    </footer>
	<script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>