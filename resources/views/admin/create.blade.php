@extends('plantilla2')
@section('titulo','Agregar Servicios')
@section('id-page')
    <p class="id-page">@Agregar Servicios</p>
@endsection
@section('pan')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Acerca de</a></li>
    <li class="breadcrumb-item active" aria-current="page">Agregar Servicio</li>
  </ol>
</nav>
@endsection

@section('section')
    <div class="container">
        <center><h2>Agregar Un Servicio</h2></center>
        <div class="formbs">
          <form action="{{route('servicios.store')}}"  enctype="multipart/form-data" method="POST">
           @csrf
            <div class="mb-3">
              <label> 
                Nombre del servcio: 
                <input type="text" class="form-control fcbs" placeholder="Nombre del servicio" id="nombre" name="nombre" value="{{old('nombre')}}">
            </label> <br>
            @error('nombre')
                <small style="color: rgb(238, 255, 0)">*{{$message}}</small>
            @enderror 
            </div>
            <div class="mb-3">
              <label>
                Descripcion: 
                <textarea  class="form-control fcbs" name="descripcion" rows="2" cols="50" >{{old('descripcion')}}</textarea> 
            </label> <br>
            @error('descripcion')
                <small style="color: rgb(238, 255, 0)">*{{$message}}</small>
            @enderror <br>
            </div>

            <label>
                Encargado: 
                <input type="text" class="form-control " name="encargado" value="{{old('encargado')}}">
            </label> <br>
            @error('encargado')
                <small style="color: rgb(238, 255, 0)">*{{$message}}</small>
            @enderror
            <br>
  
            <label>
              Costo del servicio: 
              <input type="text" class="form-control " name="costo" value="{{old('costo')}}">
            </label> <br>
            @error('costo')
                <small style="color: rgb(238, 255, 0)">*{{$message}}</small>
            @enderror
            <br>
            <label>
              Contacto Del encargado: 
              <input type="text" class="form-control " name="contacto"  value="{{old('contacto')}}">
            </label><br>
            @error('contacto')
                <small style="color: rgb(238, 255, 0)">*{{$message}}</small>
            @enderror <br> 
            <label>
              Agregar Imagen:
              <input type="file" name="file" accept="image/*">
            </label><br>
            @error('file')
                <small style="color: rgb(238, 255, 0)">*{{$message}}</small>
            @enderror <br>
            <button type="submit" class="btn btn-success mt-1">Enviar formulario</button>
        </form>
        </div>
        
    </div>
    <script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>

@endsection