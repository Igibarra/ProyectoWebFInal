<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/../css/custom.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="shortcut icon" href="../../imagenes/Logo.png" />
    <title>Editar</title>
</head>
<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Editar Servicio</li>
        </ol>
    </nav>

    <div class="container">
        <center><h2>Editar Un Servicio</h2></center>
        <div class="formbs">
          <form action="{{route('admin.update',$servicios)}}"  enctype="multipart/form-data" method="POST">
           @csrf
           @method('put')
            <div class="mb-3">
              <label> 
                Nombre del servcio: 
                <input type="text" class="form-control fcbs" placeholder="Nombre del servicio" id="nombre" name="nombre" value="{{$servicios->NomServicio}}">
            </label> <br>
            @error('nombre')
                <small>*{{$message}}</small>
            @enderror 
            </div>
            <div class="mb-3">
              <label>
                Descripcion: 
                <textarea  class="form-control fcbs" name="descripcion" rows="2" cols="50" >{{$servicios->Descripcion}}</textarea> 
            </label> 
            @error('descripcion')
                <small>*{{$message}}</small>
            @enderror <br>
            </div>

            <label>
                Encargado: 
                <input type="text" class="form-control " name="encargado" value="{{$servicios->Encargado}}">
            </label> <br>
            @error('encargado')
                <small>*{{$message}}</small>
            @enderror
            <br>
  
            <label>
              Costo del servicio: 
              <input type="text" class="form-control " name="costo" value="{{$servicios->Costo}}">
            </label> <br>
            @error('costo')
                <small>*{{$message}}</small>
            @enderror
            <br>
            <label>
              Contacto Del encargado: 
              <input type="text" class="form-control " name="contacto"  value="{{$servicios->Contacto}}">
            </label><br>
            @error('contacto')
                <small>*{{$message}}</small>
            @enderror <br> 
            <label>
              Agregar Imagen:
              <input type="file" name="file" accept="image/*" value="{{$servicios->img}}">
            </label><br>
            @error('file')
                <small style="color: red">*{{$message}}</small>
            @enderror <br>
            <button type="submit" class="btn btn-success mt-1">Enviar formulario</button>
        </form>
        </div>
        
    </div>
    <script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>