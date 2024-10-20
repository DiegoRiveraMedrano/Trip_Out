<?php
    session_start();

    $varsesion=$_SESSION['usuario'];
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
    <link rel="stylesheet" href="Styles_cuenta.css" />
    <link rel="icon" href="./img/logo/favicon.ico" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
    <?php
 $inc = include("Conexion.php");
 ?>
</head>

<body >
<header class="header" >
    <nav class="nav" >
        <div class="container logo-nav-container">
            <a href="./start/index_NO.php"><img src="./img/logo/Logo.svg" alt="logo"  class="logo" ></a>

            <span class="menu-icon" ><img src="./img/iconos/menu.png" alt="Menu"></span>
            <ul class="show">
                <li class="list"><a href="./start/index_NO.php">Inicio</a></li>
                <li class="list"><a href="cuenta.php">Cuenta</a></li>
                <li class="list"><a href="./start/Cuestionario.php">Ruta</a></li>
            </ul>
        </div>
    </nav>
</header> 
<main class="main">


<div class="usuario">
<?php

$usu=$_SESSION['usuario'];

$lugar1= 4;

if ($inc){
    $consulta = "SELECT * FROM usuarios WHERE email = '$usu'";
    $resultado = mysqli_query($conn,$consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $id = $row['idUsuario'];
            $nombre = $row['nombres'];
            $paterno = $row['apellidoPaterno'];
            $materno = $row['apellidoMaterno'];
            $email = $row['email'];
            $cont = $row['pass'];
            ?>
               <svg class="hover" viewBox="0 0 33 35">
  <polygon class="triangulo" fill="none" stroke="#fff" stroke-width="1" points="16,1 32,32 1,32" />
</svg>
                <h2>HOLA  <?php echo $nombre; ?></h2>
                <div>
                    <p>
                        <b>NOMBRE: </b><?php echo $nombre; ?> <?php echo $paterno; ?> <?php echo $materno; ?><br> 

                        <b>EMAIL: </b><?php echo $email; ?><br>  
                    </p>
                </div>
            
            
            <?php
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $nombre;
        }
    }
}
            
?>


<a href="cerrar_sesion.php"><button >Cerrar Sesión</button></a>
  </div> 
  <h1>Tus lugares favoritos...</h1>
  <div class="tarjetas">

<?php
include("./start/favoritos.php");
?>
</div>
</main>

<script type="text/javascript">
$(document).ready(function() {
$( ".fav" ).click(function() {
    var id = $(this).attr("id");

    var parametros = 
      {
        "lugar" : idlug,
        "tabla" : tab,
        "id": id
      };

    url = "./start/fav1.php";
        $.ajax({
            type: "POST",
            url: url,
            data: parametros,
            beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
            $('#mostrar_mensaje').html(mensaje);
            $("#card" + id).hide();



        }
        }); 
        
    }); 
});

</script>
</body>
    <footer>
        <div class="footer-container">
            <div class="footer-content-container">
                <h3 class="website-logo">TRIP OUT</h3>
                
            </div>
            <div class="footer-menus">
                <div class="footer-content-container">
                    <span class="menu-title">MENU</span>
                    <a href="./start/index_NO.php" class="menu-item-footer">Inicio</a>
                    <a href="cuenta.php" class="menu-item-footer">Cuenta</a>
                    <a href="./start/Cuestionario.php" class="menu-item-footer">Ruta</a>
                    <a href="./start/Terminos.php" class="menu-item-footer">Términos y Condiciones</a>
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