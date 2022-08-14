@extends('plantilla2')
@section('titulo','Administrar pagina')
@section('id-page')
    <p class="id-page">@Administrador</p>
@endsection
@section('pan')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Acerca de</a></li>
    <li class="breadcrumb-item active" aria-current="page">Administrador</li>
  </ol>
</nav>
@endsection

@section('section')
    <div class="container">
        <center><h2>¿Que desea realizar?</h2>
        <div class="card">
            <div class="card-header">
              Servicios
            </div>  
            <div class="card-body">
              <h5 class="card-title">Agregar un nuevo servicio</h5>
              <p class="card-text">Aqui podremos agregar un nuevo servicio para ofrecerlo a nuestros clientes</p>
              <a href="{{route('servicios.create')}}" class="btn btn-success">Ir Agregar</a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Administrar Reservaciones</h5>
              <p class="card-text">Aqui podremos administrar las reservaciones de nuestros clientes</p>
              <a  href="{{route('reservaciones.index')}}" class="btn btn-success">Administrar</a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Ver Errores del sistema</h5>
              <p class="card-text">Aqui se va a poder visualizar los logs dentro del sitio</p>
              <a  href="logs" class="btn btn-success">Ver problemas de sistema</a>
            </div>
            </center>
        </div>  
    </div>
@endsection