<?php
    session_start();
    $varsesion=$_SESSION['usuario'];
    $idusu = $_SESSION['id'];
    $name = $_SESSION['name'];
    if($varsesion==null || $varsesion=''){
        header("location:Login.php");
        die();
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
    <link rel="stylesheet" href="Styles_index-no--sesion.css" />
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
        <h1 >Es increíble tenerte aquí <?php echo $name; ?></h1>
        <p>
    <div class="botones">
        <ul class="ds" >
            <li class="lit"><a href="Cuestionario.php"><button href="" name="button" class="ruta">Crear ruta</button></a></li>
            <li class="lit"><a href="../cuenta.php"><button name="button"> Cuenta</button></a></li>
            <li class="lit"><a href="https://youtu.be/u8D9ZGg5ink"><button  name="button">¿Qué es?</button></a></li>
        </ul>
    </div>
</main>
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