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
        <center><h2>¿Que desea realizar?</h2></center>
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
              <h5 class="card-title">Actualizar un nuevo servicio</h5>
              <p class="card-text">Aqui podremos Actualizar servicio para ofrecerlo a nuestros clientes</p>
              <a href="edit" class="btn btn-warning">Ir Actualizar</a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Eliminar un servicio</h5>
              <p class="card-text">Aqui podremos eluminar un servicio ya no disponible para nuestros usuarios</p>
              <a href="#" class="btn btn-danger">Ir A Eliminar</a>
            </div>
        </div>  
    </div>
    
@endsection