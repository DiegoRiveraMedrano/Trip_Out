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
    <link rel="stylesheet" href="Styles_Cuestionario.css" />
    <link rel="icon" href="./img/logo/favicon.ico" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<main>
<div class="terminos">
            <input class="checkbox" type="checkbox" value="1"name="Aceptar terminos" id="box" checked ="">
            <label for="Aceptar terminos"> Acepta los <a href="Terminos.php" class="ter">Términos y Condiciones</a>.</label><br><br><br>
            </div>
<div class="botones">
    <a href="crear_ruta.php"><button href="" name="button" id="btn1" class="ruta" >Crear Ruta Aleatoria</button></a>
    <p>
    ó <br>
    Contesta las siguientes preguntas para crear la mejor ruta para ti <?php echo $name; ?>
    </p><br>
    
</div>
<form  name="" class="card" action="Ruta.php " method="POST">
            <label for="tipo">¿Qué buscas para tu ruta?</label>
           <label>Lugar 1: 
            <select name="tipo">
                <option value="1" selected>Comida</option>
                <option value="2" >Entretenimiento</option>
                <option value="3" >Cultura</option>
            </select></label>
            <label>Lugar 2: 
            <select name="tipo2">
                <option value="1" selected>Comida</option>
                <option value="2" >Entretenimiento</option>
                <option value="3" >Cultura</option>
            </select></label>
            <label>Lugar 3: 
            <select name="tipo3">
                <option value="1" selected>Comida</option>
                <option value="2" >Entretenimiento</option>
                <option value="3" >Cultura</option>
            </select></label><br>
            
            

            <label>¿Vas con alguien <?php echo $name; ?>?</label>
            <select name="acom">
                <option value="1" selected>Solo</option>
                <option value="2" >Amig@s</option>
                <option value="3" >Pareja</option>
                <option value="4" >Familia</option>
            </select><br>

            <label>¿En que vas?</label>
            <select name="trip">
                <option value="1" selected>Automóvil</option>
                <option value="2" >Bicicleta</option>
                <option value="3" >Caminando</option>
            </select>
            
            <div class="botones">
            <a href="Ruta.php"><button type="submit" class="btn btn--1"  id="btn2">Crear Ruta</button></a>

            <script type="text/javascript">

            var checkbox = document.getElementById('box');
            checkbox.addEventListener("change", validaCheckbox, false);
            var checked = checkbox.checked;
             if(checked){
            } else{

                const button1 =document.getElementById('btn1').disabled = true;
        
               const button2 =document.getElementById('btn2').disabled = true;
            }
            function validaCheckbox()
            {
             var checked = checkbox.checked;
             if(checked){
             
             const button1 = document.getElementById('btn1').disabled = false;
        
             const button2 =document.getElementById('btn2').disabled = false;
            } else{
                const button1 =document.getElementById('btn1').disabled = true;
        
                const button2 =document.getElementById('btn2').disabled = true;

                
                swal('ESPERA...', 'Por favor, acepte los Términos y Condiciones del recuadro azul anterior para continuar.', 'warning', {button: "Entendido",});
                
                
            }
            }
            </script>


        </form >
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