
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
    <link rel="stylesheet" href="Styles_registro.css" />
    <link rel="icon" href="./img/logo/favicon.ico" />
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

<main>
<form  method="post" accept-charset="UTF-8">
        <h1>Formulario de Registro </h1>
        <input type="text" placeholder="Nombre(s)" name="nombres" required pattern="[a-zA-ZáéíóúÁÉÍÓÚÑñ ]+" minlength="3"   id="name" onKeyUp="document.getElementById('name').value=document.getElementById(this.id).value.toUpperCase()" >
        <input type="text" placeholder="Apellido Paterno" name="apellidoPa" required pattern="[a-zA-ZáéíóúÁÉÍÓÚÑñ ]+" minlength="3" maxlength="50"  id="paternoap" onKeyUp="document.getElementById('paternoap').value=document.getElementById(this.id).value.toUpperCase()">
        <input type="text" placeholder="Apellido Materno" name="apellidoMa" required pattern="[a-zA-ZáéíóúÁÉÍÓÚÑñ ]+" minlength="3" maxlength="50"  id="maternoap" onKeyUp="document.getElementById('maternoap').value=document.getElementById(this.id).value.toUpperCase()">
        <input type="email" placeholder="Correo electrónico" name="email"required id="campo" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()">
        <input type="password" placeholder="Contraseña entre 8 y 20 caracteres" name="password" required pattern="[_A-Za-z0-98,20}">
        <input type="password" placeholder="Confirma tu contraseña" required name="password_confirm" pattern="[_A-Za-z0-9@#$%]{8,20}">
        <p class="acuerdo">Al registrarte, aceptas nuestras condiciones de uso y Política de privacidad.</p>
        <input type="submit" value="Registrarse" name="registrarse" class="button"> 
        <p class="link"><a href="Login.php">¿Ya tienes cuenta?</a></p>
    </form>

</main>
<div class="conexion">
    <?php
    include('Conexion.php');
    ?>

    <?php
    if(isset($_POST['registrarse'])){
        include('Proceso.php');
    }
    ?>

</div>
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