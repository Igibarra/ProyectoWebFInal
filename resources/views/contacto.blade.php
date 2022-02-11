@extends('plantilla')
@section('titulo')
    Contactanos
@endsection('titulo')

@section('section')
<section class="contenedor section-div" >
    <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li>Contactanos</li>
        </ul><br/>
    <link rel="stylesheet" type="text/css" href="estilos/login.css" />

            <table class="table">
                <tr>
                    <td>
                    </td>
                    <td>
                        <center>
                            <img class="img_usuario" src="imagenes/Usuario.png" />

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
                            <h1>Contactanos</h1>
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
                </tr><br/>
                <tr>
                    <td>
                    </td>
                    <td>
                        <br />
                        <center>
                            <input type="text" name="Email" placeholder="Email">
                        </center>
                    </td>
                    <td>
                    </td>
                </tr><br/>
                <tr>
                    <td>
                    </td>
                    <td>
                        <br />
                        <center>
                            <input type="text" name="Numero de Telefono" placeholder="Numero de Telefono">
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
                            <input type="text" name="Asunto" placeholder="Asunto">
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
                            <a class="boton_link" href="registro.html">Enviar mensaje</a>
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
                            Si no recibes el correo llamanos al 3112334413 
                        </center>
                    </td>
                    <td>
                    </td>
                </tr>
            </table><br />
        
    </section>
@endsection('section')