@extends('plantilla2')
@section('titulo','Lista de Servicios de Hardworld ')
@section('id-page')
    <p class="id-page">@Lista de Servicios de Hardworld </p>
@endsection
@section('pan')


    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Servicios</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lista de Servicios</li>
      </ol>
    </nav>
@endsection
@section('section')
    <div class="card-body" align="center">
        <h1 class="card-title">LISTA DE SERVICIOS</h1>
        <div class="ldiv"></div>
        <h4 class="tn2">Busca el servicio que deseas</h4><br> 
    </div>

    {{-- buscador --}}
    <div class="container-fluid ">
            <form class="d-flex bus-bs" >
                <input name="buscarpor" class="form-control me-2 " type="search" placeholder="Buscar" aria-label="Search" >
                <button class="btn btn-outline-success" type="submit" >Buscar</button>            
            </form>
    </div>

    <div class="container contenedor-bs">
        <div class="row">
            @foreach ($servicios as $itemservicios)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="{{$itemservicios->img}}" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$itemservicios->NomServicio}}</h5>
                      <p class="card-text">{{$itemservicios->Descripcion}}</p>
                      <p class="card-text">Encargado: {{$itemservicios->Encargado}}</p>
                      <p id="cel" class="card-text">Cel: {{$itemservicios->Contacto}}</p>
                      <a href="#" class="btn btn-primary">Solicitar Servicio</a>
                    </div>
                  </div>
              </div>
            @endforeach  
         
        </div>
    </div>
    <div class="bus-bs">
        {{$servicios->links('vendor.pagination.bootstrap-5')}}
    </div>
    
@endsection
{{-- {{$itemservicios->NomServicio}} --}}