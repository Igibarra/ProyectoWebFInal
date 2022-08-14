@extends('plantilla2')
@section('titulo')
    GENESIS SPA
@endsection
@section('id-page')
    <p class="id-page">@Inicio</p>
@endsection
@section('hero')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img src="../Imagenes/spa12.jpg" class="d-block w-100 img-fluid">
            <div class="carousel-caption">
            <h3>GENESIS SPA</h3>
            <p>El mejor lugar para relajarse</p>
            </div>
			</div>
			<div class="carousel-item">
			<img src="../Imagenes/img-sl-4.jpeg" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption">
            <h3>EL MEJOR SERVICIO DE SPA</h3>
            <p>Cuenta con los mejores profesionales</p>
            </div>
			</div>
			<div class="carousel-item">
			<img src="../Imagenes/img-sl.jpg" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption">
            <h3>CONTAMOS CON PRODUCTOS NATURISTAS</h3>
            <p>100% mexicana</p>
            </div>
			</div>
            <div class="carousel-item">
                <img src="../Imagenes/img-sl2.jpg" class="d-block w-100 img-fluid" style="width: 1024px" alt="...">
                <div class="carousel-caption">
                <h3>RESERVA JUNTO CON TU PAREJA</h3>
                <p>Contamos con varios servicios todos los días</p>
            </div>
            </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
		</div>
@endsection
@section('section')
   <section class="conteiner-fluid">
         <div class="container">
         <div class="conteiner-fluid titu-bs">
                <center><h2 class="tn2 ">Hola</h2></center>
                <p>  Bienvenidos a Genesis Spa, el servicio de relajación mas importante de todo Nayarit,donde encontraras una experencia unica con nuestros servicios y productos naturales 100%</p>
            </div>
            <div class="row g-2" data-aos="flip-down">
                <div class="col-12 col-md-1 col-lg-4">
                    <div class="p-1 border bg-light"><img class="img-fluid" src="Imagenes/1.jpg" /></div>
                </div>
                <div class="col-12 col-md-1 col-lg-4">
                     <div class="p-1 border bg-light"><img class="img-fluid" src="Imagenes/2.jpg" /></div>
                </div>
                <div class="col-12 col-md-1 col-lg-4">
                    <div class="p-1 border bg-light"> <img class="img-fluid" src="Imagenes/3.jpg" /></div>
                </div>
                <div class="col-12 col-md-1 col-lg-4">
                    <div class="p-1 border bg-light"><img class="img-fluid" src="Imagenes/4.jpg" /></div>
                </div>
                <div class="col-12 col-md-1 col-lg-4">
                    <div class="p-1 border bg-light"><img class="img-fluid" src="Imagenes/5.jpg" /></div>
                </div>
                <div class="col-12 col-md-1 col-lg-4">
                    <div class="p-1 border bg-light"><img class="img-fluid" src="Imagenes/6.jpg" /></div>
                </div>                
            </div>
         </div>
         <div class="container">
         <div class="ldiv"></div>
            <div class="row">
                <div class="col-12 col-lg-6">
                <div class=" titu-bs" >
                <div class="service">
                        <h3 class="tn2 ">Nuestros Servicios</h3>
                        <h2 class="n-service"><span class="number">1</span>TRATAMIENTOS CORPORALES</h2>
                        <p> Tenemos una variedad de tratamientos en los cuales podemos obtener excelentes resultados en tratamientos reductores como el Masaje de Reducción, Drenaje Linfático y Masaje Anti-Celulítico.<br>
                            Utilizamos productos de la linea Repechage 100% Naturales
                            en Exfoliación de Cranberry o Miel. Y productos a base de algas marinas en 'European Seaweed y Sea Spa Glow'.
                        </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span>CURACIÓN NATURAL CON MEDICINA HOLÍSTICA</h3>
                        <p>La Medicina Holística, es una terapia alternativa o complementaria que se basa en los poderes de sanación naturales del organismo, devolviendole el equilibrio energético.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span>TRATAMIENTOS FACIALES</h3>
                        <p> Los faciales ayudan a mantener la piel limpia y saludable. Durante los tratamientos faciales estamos limpiando, exfoliando y activando la circulación nutriendo la piel, devolviendo el brillo, elasticidad y tonalidad al rostro.</p>
                    </div>
                   
                </div>
                </div>
                
                <div class="col-12 col-lg-6">
                <img src="imagenes/spa3.jpg" height=90% class="imagen-about-us container-fluid "alt="">
    
                </div>
                </div>
            </div>
        </div>
        
        <div class="container">
         <div class="ldiv"></div>
            <div class="row">
            <div class="col-12 col-lg-6">
                <div>
                <iframe width="560" height="400" class="imagen-about-us container-fluid" src="https://www.youtube.com/embed/v-D3XEPIGAY?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                </div>
                <div class="col col-lg-6">
                <div class=" titu-bs" >
                    <h3 class="tn2">La mejores instalaciones</h3>
                    
                    <p>
                    Dentro de Genesis Spa se cuenta con instalaciones muy equipadas en las que disfrutara una experencia increible,contamos con una variedad de salas de relajación en donde te sentiras en el cielo.
                     </p>
                   
                </div>
                </div>
              
            </div>
        </div>
        <div class="container">
        <div class="ldiv"></div>
         <div class="conteiner-fluid titu-bs">
                <center><h2 class="tn2 ">Ubicanos</h2>
                <p>Contamos con varias sucursales en donde podras vivir la experencia de Genesis Spa</p></center>
            </div>
            <body>
    <div id="map"></div>
        <script>
            function initMap() {
                //variable que permite inicializar el mapa de preferencia lo mas centrico posible alos lugares que se marcaran en el mismo
                var map = new google.maps.Map(document.getElementById('map'), { zoom:14 , center: { lat: 21.452342, lng: -104.898838 } });
                infoWindow = new google.maps.InfoWindow;
                //Crear una variable de tipo para determinar los caracteres albetitos que tendra cada marcador
                var labels = "ABCDFGHIJKLMNOPQRSTUVWYZ";
                //Añadir al mapa los marcaores en base al arreglo de ubicaciones
                var markers = locations.map(function (location, i) {
                    return new google.maps.Marker({
                        position: location,
                        label: labels[i % labels.length]
                    });
                });
                var markerCluster = new MarkerClusterer(map, markers, { imagePath: 'imagenes/m' });
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (position) {
                        var pos = { lat: position.coords.latitude, lng: position.coords.longitude };
                        infoWindow.setPosition(pos);
                        infoWindow.setContent('Aqui estás');
                        infoWindow.open(map);
                        map.setCenter(pos);
                    }, function () {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });//Fin  function(position)

                }
                else {
                    handleLocationError(false, infoWindow, map.getCenter());
                }// fin else
            }//fin del init map
            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(browserHasGeolocation ? 'Error:Falló el servicio de geolocalización' :
                    'Error: Tu navegador no soporta geolocalización');
                infoWindow.open(map);
            }
            var locations = [
                { lat: 21.444846, lng: -104.898633 },
                { lat: 21.451373, lng: -104.899430 },
                { lat: 21.450717, lng: -104.894080 },
                { lat: 21.454821, lng: -104.904839 }
            ]
        </script>
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?Key=AIzaSyC99WJ4j8SX9l8uYOHfBjGnoW9hYlZUixw&callback=initMap">
        </script>
        </body>
         </div><br>        
    </div>
    </section>
@endsection('section')