<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2? family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
    <title>TripOut</title>
    <link rel="stylesheet" href="Style_ruta.css" />
    <link rel="icon" href="./img/logo/favicon.ico" />
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbbFiCL8zAaQQBmYA7mBLvOkp4HEIiMpM&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    

</head>

<body >
<header class="header" >
    <nav class="nav" >
        <div class="container logo-nav-container">
            <a href="index.php"><img src="./img/logo/Logo.svg" alt="logo"  class="logo" ></a>

            <span class="menu-icon" ><img src="./img/iconos/menu.png" alt="Menu"></span>
            <ul class="show">
                <li class="list"><a href="index.php">Inicio</a></li>
                <li class="list"><a href="Login.php">Cuenta</a></li>
                <li class="list"><a href="Cuestionario.php">Ruta</a></li>
            </ul>
        </div>
    </nav>
</header> 

<main class="main">
<script type="text/javascript">
                swal('IMPORTANTE', 'Puedes recargar la pagina para recibir una nueva ruta', 'warning', {button: "Aceptar",});
</script>
<div id="map" class="map"></div>
<?php
$inc = include("Conexion.php");
?>
<div class="tarjetas">
<?php
include("mostrar2.php");
?>
</div>

<script type="text/javascript">
  
             console.log(id);
             console.log(latitud1);
             console.log(longitud1);
             console.log(trip);
             var waypts = [{ location: { lat: latitud2, lng: longitud2  }, stopover: true }];
             </script>
           

<script>
      // inicia la Configuración
     
      function initMap() {
        const directionsRenderer = new google.maps.DirectionsRenderer({});
        const directionsService = new google.maps.DirectionsService();
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 14,
          center: { lat: 6.244338, lng: -75.573553 },
          mapId: '508cd09b34a6f6c8'
        });
        directionsRenderer.setMap(map);
        calculateAndDisplayRoute(directionsService, directionsRenderer);
      }

      function calculateAndDisplayRoute(directionsService, directionsRenderer) {

        directionsService.route(
          {
            origin: { lat:latitud1, lng: longitud1 }, 
            destination: { lat: latitud3, lng: longitud3 },
            waypoints: waypts,
            optimizeWaypoints: true,
            
            
            // tambien se puede usar de otro modo WALKING - BICYCLING - TRANSIT
            travelMode: google.maps.TravelMode[trip],
          },
          (response, status) => {
            if (status == "OK") {
              directionsRenderer.setDirections(response);
            } else {
              window.alert("Directions request failed due to " + status);
            }
          }
        );
      }
    </script>
</main>
</body>
    <footer>
        <div class="footer-container">
            <div class="footer-content-container">
                <h3 class="website-logo">TRIP OUT</h3>

            </div>
            <div class="footer-menus">
                <div class="footer-content-container">
                    <span class="menu-title">MENU</span>
                    <a href="index.php" class="menu-item-footer">Inicio</a>
                    <a href="Login.php" class="menu-item-footer">Cuenta</a>
                    <a href="Cuestionario.php" class="menu-item-footer">Ruta</a>
                    <a href="Terminos.php" class="menu-item-footer">Términos y Condiciones</a>
                </div>
            </div>
            
            <div class="footer-content-container">
                <span class="menu-title">Redes Sociales</span>
                <div class="social-container">
                    <a href="https://www.facebook.com/Trip-Out-100375529169111" class="social-link"></a>
                    <a href="https://www.instagram.com/tripout_project/" class="social-link"></a>
                </div>
            </div>
        </div>
        <div class="copyright-container">
        <p class="copyright">&copy; <span id="anio"></span> <b>Diego Rivera</b> - Todos los Derechos Reservados.</p>
    </div>
</footer>
<script>
    function actualizarAno() {
        const anioActual = new Date().getFullYear();
        const elementoAno = document.getElementById('anio'); // Asegúrate de tener un elemento con id="anio" donde quieres mostrar el año
        elementoAno.textContent = anioActual;
    }

    // Ejecutar la función al cargar la página
    actualizarAno();
</script>

</html>
</html>