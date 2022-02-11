<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>HardWorld</title>
    <link rel="stylesheet" type="text/css" href="estilos/index.css" />
    <link rel="shortcut icon" href="imagenes/Logo.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <style></style>
</head>
<body>
    <header>
        <nav class="nav_header">
            <img class="img" src="imagenes/facebook.png">
            <img class="img" src="imagenes/twitter.png">
            <img class="img" src="imagenes/whatsapp.png">
        </nav><br />
        <section>
            <table>
                <tr>
                    <td>
                        <img class="img_header" src="Imagenes/Logo.png" />
                    </td>
                    <td>
                        <h1 class="titulos_header">HardWorld</h1>
                    </td>

                </tr>
            </table>


        </section>
    </header>

    <nav class="nav">
        <div>
            <ul class="menu">
                <li><a href="">Inicio</a></li>
                <li><a href="/result">Servicios</a>
                    <ul>
                        <li><a href="">Formateo</a></li>
                        <li><a href="">Limpieza Interna</a></li>
                        <li><a href="">Mantenimiento</a></li>
                        <li><a href="">Instalción de Software</a>
                            <ul>
                                <li><a href="">Programación</a></li>
                                <li><a href="">Office</a></li>
                                <li><a href="">Punto y venta</a></li>
                                <li><a href="">Illustrator</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="">Acerca de</a>
                    <ul>
                        <li><a href="">Quienes somos</a></li>
                        <li><a href="">Misión</a></li>
                        <li><a href="">Visión</a></li>
                        <li><a href="">Politica y Privacidad</a></li>
                    </ul>
                </li>
                <li><a href="">Contacto</a></li>
                <li>
                    <form method="get" action="https://www.google.com/search" target="_blank" class="buscador">
                        <input id="barra_buscador" type="search" name="q" placeholder="Término a buscar" autofocus required>
                        <input type="submit">
                    </form>
                </li>
                <li>
                    <a id="boton_login" href="login.html"><img class="img_login" src="imagenes/login.png"/></a>
                </li>

            </ul>
        </div>
    </nav><br />
    <section>
        <div class="contenedor-section-div">
            <div class="contenido-textos">
                <center><h3 class="titulo">ERROR INTERNO DEL SERIVODR</h3></center>
                <center><img src="{{ asset('Imagenes/Error500.png')}}" class="imagen1"></center>
               
                <center class="ti"><a href="/"> Volver a página de inicio </a></center>
            </div>
        </div><br />

    </section>

    <footer>
        <div class="footer-content">
            <center><img class="img_f" src="imagenes/Logo.png" /></center>
            <table >
                <tr>
                    <td class="td">
                        Estamos ubicados en: <br />
                        Carretera México 200, Km 9 63786, <br />
                        Col, 24 de Febrero, Xalisco, Nay.
                    </td>
                    <td class="td">
                        Tambien nos puedes contactar mediante correo electronico: <br />
                        Hardworld@gmail.com
                    </td>
                    <td class=" td">
                        Buscanos en redes sociales<br />
                        facebook: hardworld<br />
                        whatsapp: 3112334413
                    </td>
                </tr>
            </table>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy;;2021 HardWorld</p>
        </div>
    </footer>
</body>
</html>
        

        