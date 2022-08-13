@extends('plantilla2')
@section('titulo')
    Lista de Servicios de genesis spa 
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
    <table class="table">
        <thead>
            <tr>
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
                
                <td>{{$itemservicios->NomServicio}}</td>
                <td>{{$itemservicios->Descripcion}}</td>
                <td>{{$itemservicios->Encargado}}</td>
                <td>{{$itemservicios->Costo}}</td>
                <td>{{$itemservicios->Contacto}}</td>
            </tr>
        @endforeach  
    </table> 
    <br><br>
    <br><br>
@endsection
