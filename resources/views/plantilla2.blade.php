<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/custom.css" />
	<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="../../imagenes/Logo.png" />
    <title>@yield('titulo')</title>
	<style>
        #map{
            width:100%;
            height:400px;
            background-color:gray;
        }
    </style>
</head>
<body>
	<header>
		<section class="header-bs">
        </section>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
		  	<div class="container-fluid">
		   		<a class="navbar-brand" href="#"><img class="img_header" src="../../imagenes/Logo.png"/></a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>

			    </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent"><br>
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link " aria-current="page" href="/">Inicio</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="servicios">Lista de servicios disponible</a></li>
                <li><a class="dropdown-item" href="masajes">Masajes</a></li>
								<li><a class="dropdown-item" href="esteticos">Tratamientos esteticos</a></li>
								<li><a class="dropdown-item" href="naturales">Tratamientos Naturales</a></li>
								<li><a class="dropdown-item" href="instala">Tratamientos Terapeuticos</a></li>	
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
						<li>
						@if(Auth::check()) {{--El check() es para validar si esta autentificado--}}
							<p style="color: white" class="nav-link "><small style="color: white"> Usuario: {{ Auth::user()->name}}</small> </p>
						@else
							<p style="color: gray" class="nav-link ">Usuario: <small style="color: gray">sin iniciar sesion</small>  </p>
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
	<!-- Footer -->
<footer class="text-center text-lg-start bg-black text-muted">
<center><div class="container-fluid">
		<a id="boton" href="/"><img class="img_f" src="../../imagenes/Logo.png"/></a>
		</div></center>
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Genesis Spa
          </h6>
          <p>
           Genesis Spa, el mejor servicio de relajación de todo Nayarit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Productos
          </h6>
          <p>
            Jabones
          </p>
          <p>
            Velas Aromaticas
          </p>
          <p>
            Masajes
          </p>
          <p>
            Paquetes Parejas
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Links
          </h6>
          <p>
            <a href="/" class="text-reset">Inicio</a>
          </p>
          <p>
            <a href="/servicios" class="text-reset">Servicios</a>
          </p>
          <p>
            <a href="/quienes" class="text-reset">Acerca de Nosotros</a>
          </p>
          <p>
            <a href="/login" class="text-reset">Iniciar Sesión</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Xalisco,Paseo de la Rivera #45, MX</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            GenesisSpaOficialMx@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +52 311-154-58-21</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright: <p class="text-reset fw-bold" href="#">Genesis Spa</p>
    
  </div>
  <!-- Copyright -->
</footer>
	<script src="../libs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>