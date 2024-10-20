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
    <link rel="stylesheet" href="Styles_index-no--sesion.css" />
    <link rel="icon" href="./img/logo/favicon.ico" />
</head>

<body >
<header class="header" >
    <nav class="nav" >
        <div class="container logo-nav-container">
            <a><img src="./img/logo/Logo.svg" alt="logo"  class="logo" ></a>

            <span class="menu-icon" ><img src="./img/iconos/menu.png" alt="Menu"></span>
            <ul class="show">
                <li class="list"><a href="index.php">Inicio</a></li>
                <li class="list"><a href="Login.php">Cuenta</a></li>
                <li class="list"><a href="Cuestionario.php">Ruta</a></li>
            </ul>
        </div>
    </nav>
</header> 
<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15048.863598478223!2d-99.11241465!3d19.4462562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f94577f4607f%3A0x94466dd7e76118e8!2zMTnCsDI2JzQ4LjgiTiA5OcKwMDYnNTQuNCJX!5e0!3m2!1ses-419!2smx!4v1649201641177!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php
$lugar1= 4;
$inc = include("Conexion.php");
if ($inc){
    $consulta = "SELECT * FROM usuarios WHERE email = 'rivmedrano@gmail.com'";
    $resultado = mysqli_query($conn,$consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $id = $row['idUsuario'];
            $nombre = $row['nombres'];
            $direccion = $row['apellidoPaterno'];
            $latitud = $row['apellidoMaterno'];
            $longitud = $row['email'];
            $web = $row['pass'];
            ?>
            <div>
                <h2><?php echo $nombre; ?></h2>
                <div>
                    <p>
                        <b>Id: </b><?php echo $id; ?><br> 
                        <b>Nombre: </b><?php echo $nombre; ?><br> 
                        <b>Direccion: </b><?php echo $direccion; ?><br> 
                        <b>Latitud: </b><?php echo $latitud; ?><br>
                        <b>Longitud: </b><?php echo $longitud; ?><br>  
                        <b>Web: </b><?php echo $web; ?><br> 
                    </p>
                </div>
            </div>

             
            </script>
            <?php
        }
    }
}
            
?>
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
                    <a href="" class="social-link"></a>
                </div>
            </div>
        </div>
        <div class="copyright-container">
            <span class="copyright">&copy; 2022 <b>Trip Out</b> - Todos los Derechos Reservados.</span>
        </div>
    </footer>
</html>