<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/custom.css" />
	<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
	<link rel="shortcut icon" href="../../imagenes/Logo.png" />
    <title>@yield('titulo')</title>
</head>
<body>
	<header>
		<section class="header-bs">
			<div>
				<a id="boton" href="/"><img class="img_header" src="../../imagenes/Logo.png"/></a>
				<h1 class="titulos_header">HardWorld</h1>
				@if(Auth::check()) {{--El check() es para validar si esta autentificado--}}
					<p style="color: aliceblue"><small style="color: aqua"> Usuario: {{ Auth::user()->name}}</small> </p>
				@else
					<p style="color: aliceblue">Usuario: <small style="color: rgb(44, 238, 238)">sin iniciar sesion</small>  </p>
				@endif

				@yield('id-page')
			</div>
           
        </section>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
		  	<div class="container-fluid">
		   		<a class="navbar-brand" href="#"><img class="img_header" src="../../imagenes/Logo.png"/></a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>

			    </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link " aria-current="page" href="/">Inicio</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="formateo">Formateo</a></li>
								<li><a class="dropdown-item" href="cambio">Componentes</a></li>
								<li><a class="dropdown-item" href="mantenimiento">Mantenimientos</a></li>
								<li><a class="dropdown-item" href="instala">Instalación de Software</a></li>
								<li><a class="dropdown-item" href="servicios">Lista de servicios</a></li>
								
								
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acerca De</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="quienes">Somos</a></li>
								<li><a class="dropdown-item" href="mision">Mision</a></li>
								<li><a class="dropdown-item" href="vision">Vision</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link " aria-current="page" href="contacto">Contactos</a>
						</li>
						
						<li class="nav-item">
							@if (Auth::check())
							
								<a style="color: rgb(230, 24, 24)" class="nav-link" href="{{ route('logout') }}"
								onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
									{{ __('Cerrar Sesion') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
	
							@else
								<a class="nav-link " aria-current="page" href="login">Iniciar sesion</a>	
							@endif
						</li>
						<li class="nav-item">
							@if (Auth::check())
								@if (Auth()->user()->role=='admin')
								<a style="color: rgb(199, 235, 41)" class="nav-link " aria-current="page" href="{{route('admin.index')}}">Administrar Pagina</a>
								@endif
							@endif
							
							
						</li>
						{{--Buscador General--}}
					</ul>
					<form class="d-flex" method="get" action="https://www.google.com/search" target="_blank" class="buscador"> 
						<input id="barra_buscador" type="search" name="q" placeholder="Término a buscar" autofocus required class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Buscar</button>
					</form>
				</div>
		    </div>
		</nav>
		<section>
       	 @yield('pan')
   		</section>
		<section>
       	 @yield('hero')
   		</section>
		
	</header>
	<section>
        @yield('section')
    </section>
	<footer class="conteiner-fluid">
		<div class="container-fluid">
		<a id="boton" href="/"><img class="img_f" src="../../imagenes/Logo.png"/></a>
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
	<script src="../libs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>