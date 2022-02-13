@extends('plantilla2')
@section('titulo')
    Ingresar
@endsection
@section('id-page')
    <p class="id-page">@Ingresa</p>
@endsection
@section('pan')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Iniciar sesion</li>
  </ol>
</nav>
@endsection
@section('section')

<section class="contenedor section-div" >

    <link rel="stylesheet" type="text/css" href="estilos/login.css" />


            <table class="table">
                <tr>
                    <td>
                    </td>
                    <td>
                        <center>
                            <img class="img_usuario" src="imagenes/Usuario.png" style="width: 50px;" />

                        </center>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <center>
                            <h1>Login</h1>
                        </center>
                        <br />
                    </td>
                    <td>
                    </td>
                </tr>

                <tr>
                    <td>
                    </td>
                    <td>
                        <center>
                            <input type="text" name="Nombre" placeholder="Nombre">
                        </center>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <br />
                        <center>
                            <input type="text" name="Contraseña" placeholder="Contraseña">
                        </center>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>

                        <br />
                    </td>
                    <td>
                    </td>
                <tr>
                    <td>
                    </td>
                    <td>
                        <center>
                             <a class="boton_link" href="result">Iniciar sesion</a>
                        </center>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <br />
                        <center>
                            si no cuentas con una cuenta selecciona la opcion 
                        </center>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <center>
                            <a href="result">Registrarse</a>
                        </center>

                    </td>
                    <td>
                    </td>
                </tr>
            </table>
        
    </section>
@endsection('section')