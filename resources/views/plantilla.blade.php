<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>@yield('titulo','genesis spa')</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="shortcut icon" href="imagenes/Logo.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>genesis spa</style>
</head>
<body>
    <header>
        <nav class="nav_header">
            <img class="img" src="imagenes/facebook.png">
            <img class="img" src="imagenes/twitter.png">
            <img class="img" src="imagenes/whatsapp.png">
        </nav>
        <section>
            <table>
                <tr>
                    <td>
                        <a id="boton" href="/"><img class="img_header" src="imagenes/Logo.png"/></a>
                    </td>
                    <td>
                        <h1 class="titulos_header">genesis spa</h1>
                    </td>

                </tr>
            </table>


        </section>
    </header>

    <nav class="nav">
        <div>
            <ul class="menu">
                <li><a href="/">Inicio</a></li>
                <li><a href="servicios">Servicios</a>
                    <ul>
                        <li><a href="masajes">masajes</a></li>
                        <li><a href="esteticos">esteticos</a></li>
                        <li><a href="Tratamientos Naturales">Tratamientos Naturales</a></li>
                        <li><a href="instala">Instalción de Software</a>
                            <ul>
                                <li><a href="office">Office</a></li>
                                <li><a href="punto">Punto y venta</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="acerca">Acerca de</a>
                    <ul>
                        <li><a href="quienes">Quienes somos</a></li>
                        <li><a href="mision">Misión</a></li>
                        <li><a href="vision">Visión</a></li>
                    </ul>
                </li>
                <li><a href="contacto">Contacto</a></li>
                <li>
                    <form method="get" action="https://www.google.com/search" target="_blank" class="buscador">
                        <input id="barra_buscador" type="search" name="q" placeholder="Término a buscar" autofocus required>
                        <input type="submit">
                    </form>
                </li>
                <li>
                    <a id="boton_login" href="login"><img class="img_login" src="imagenes/login.png"/></a>
                </li>
            </ul>
        </div>
    </nav> 


    <section>
        @yield('section')
    </section>

    <footer>
        <div class="footer-content">
            <center><a id="boton" href="/"><img class="img_f" src="imagenes/Logo.png"/></a></center>

            <table >
                <tr>
                    <td class="td">
                        Estamos ubicados en: <br />
                        Carretera México 200, Km 9 63786, <br />
                        Col, 24 de Febrero, Xalisco, Nay.
                    </td>
                    <td class="td">
                        Tambien nos puedes contactar mediante correo electronico: <br />
  
                        genesis spa@gmail.com
                    </td>
                    <td class=" td">
                        Buscanos en redes sociales<br />
                        facebook: genesis spa<br />
                        whatsapp: 3112334413
                    </td>
                </tr>
            </table>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy;;2021 genesis spa</p>
        </div>
    </footer>
</body>
</html>