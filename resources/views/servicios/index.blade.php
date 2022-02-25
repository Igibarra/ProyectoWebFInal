@extends('plantilla2')
@section('titulo')
    Lista de Servicios de Hardworld 
@endsection
@section('id-page')
    <p class="id-page">@lista_de_servicios</p>
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
        <h4 class="tn2">Ingresa el NOMBRE del servicio</h4><br> 
    </div>

    {{-- buscador --}}
    <div class="container-fluid">
            <form class="d-flex" >
                <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" >
                <button class="btn btn-outline-success" type="submit" >Buscar</button>            
            </form>
        </div>
    <table class="table">
        <thead align="center">
            <tr >
              <th scope="col">Nombre del Servicio</th>
              <th scope="col">Descripción del Servicio</th>
              <th scope="col">Encargado</th>
              <th scope="col">Costo</th>
              <th scope="col">Contacto</th>
            </tr>
      </thead>
      <tbody>
             @foreach($servicios as $itemservicios)
                <tr> 
                    <td><a class="linka" href="{{route('servicios.show', $itemservicios)}}">{{$itemservicios->NomServicio}}</a></td>
                    <td><a class="linka" href="{{route('servicios.show', $itemservicios)}}">{{$itemservicios->Descripcion}}</a></td>
                    <td><a class="linka" href="{{route('servicios.show', $itemservicios)}}">{{$itemservicios->Encargado}}</a></td>
                    <td><a class="linka" href="{{route('servicios.show', $itemservicios)}}">{{$itemservicios->Costo}}</a></td>
                    <td><a class="linka" href="{{route('servicios.show', $itemservicios)}}">{{$itemservicios->Contacto}}</a></td>
                </tr>
            @endforeach  
        </table> 
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
@endsection
