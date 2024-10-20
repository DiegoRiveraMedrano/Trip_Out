<?php
    session_start();

    $varsesion=$_SESSION['usuario'];
    $idusu = $_SESSION['id'];
    $name = $_SESSION['name'];
    if($varsesion==null || $varsesion=''){
        header("location:Login.php");
        echo "NO se pudo";



        ?>

        <script type="text/javascript">
                swal('NO HAS INCIADO SESIÓN', 'Inicia sesión o registrate', 'error', {button: "Aceptar",});
        </script>
        <?php 
        
    }

?>
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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbbFiCL8zAaQQBmYA7mBLvOkp4HEIiMpM&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
    <link rel="icon" href="./img/logo/favicon.ico" />
</head>

<body >
<header class="header" >
    <nav class="nav" >
        <div class="container logo-nav-container">
            <a href="index_NO.php"><img src="./img/logo/Logo.svg" alt="logo"  class="logo" ></a>

            <span class="menu-icon" ><img src="./img/iconos/menu.png" alt="Menu"></span>
            <ul class="show">
                <li class="list"><a href="index_NO.php">Inicio</a></li>
                <li class="list"><a href="../cuenta.php">Cuenta</a></li>
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
  
              console.log(idlug3);
             console.log(latitud3);
             console.log(longitud3);
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
<script>
	function love()
    { 
      var parametros = 
      {
        "lugar" : idlug,
        "tabla" : tab
      };

      $.ajax({
        data: parametros,
        url: 'fav.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }


</script>
<script>
	function love2()
    { 
      var parametros = 
      {
        "lugar" : idlug2,
        "tabla" : tab2
      };

      $.ajax({
        data: parametros,
        url: 'fav2.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje2').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje2').html(mensaje);
        }
      });
    }


</script>
    <script>
	function love3()
    { 
      var parametros = 
      {
        "lugar" : idlug3,
        "tabla" : tab3
      };

      $.ajax({
        data: parametros,
        url: 'fav3.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje3').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje3').html(mensaje);
        }
      });
    }


</script>
</body>
    <footer>
        <div class="footer-container">
            <div class="footer-content-container">
                <h3 class="website-logo">TRIP OUT</h3>
                <span class="footer-info">tripoutproject@gmail.com</span>
            </div>
            <div class="footer-menus">
                <div class="footer-content-container">
                    <span class="menu-title">MENU</span>
                    <a href="index_NO.php" class="menu-item-footer">Inicio</a>
                    <a href="../cuenta.php" class="menu-item-footer">Cuenta</a>
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
            <span class="copyright">&copy; 2022 <b>Trip Out</b> - Todos los Derechos Reservados.</span>
        </div>
    </footer>
</html>