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
    <link rel="stylesheet" href="Styles_Terminos.css" />
    <link rel="icon" href="./img/logo/favicon.ico" />/>
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
<img src="./img/logo/LogoCorto_Final.svg" alt="Logo"  class="logo-main" >
    
    <h1>Términos y Condiciones</h1>
    <p>
        Trip Out hace de su conocimiento que al acceder a esta página web, usted se sujeta a los términos y condiciones de uso de la misma. Conforme a la competencia y jurisdicción de la justicia en México.
    </p>
    <p>
        Toda la información, publicaciones, imágenes, fotografías, videos, logotipos, marcas, denominaciones, eslogan y/o cualquiera otros que sean objeto de derechos de autor o propiedad intelectual 
        son propiedad de Trip Out, por lo que su uso, impresión, explotación, divulgación, duplicado, modificación, o cualquier otra acción que requiera del consentimiento de autor y/o propietario en
        términos de la ley de propiedad industrial y de la ley de derechos de autor, deberá ser previamente autorizada por Trip Out.
    </p>
    <p>
        Cualquier violación a las disposiciones en materia de propiedad intelectual y/o industrial será sancionada por las autoridades e instituciones protectoras de dichos derechos, asi como coaccionar
        las vias judiciales para demandar del daño mencionado o perjuicio al imputable.
    </p> 
    <p>
        Los contenidos privados de las páginas web a los que los usuarios acceden a través de los servicios de este sitio web no son controlados por TripOut.com Por lo que en ningún caso TripOut.com se hace 
        responsable de ellos.
    </p> 
    <p>
        Trip Out excluye cualquier responsabilidad por los daños y perjuicios de toda naturaleza que puedan derivarse del acceso a los contenidos, informaciones, publicidad, opiniones, conceptos e imágenes 
        facilitados a los usuarios, o por los contenidos accesibles a través del sitio web, que sean contrarios a la ley, la moral, la buena fe y al orden público, infrinjan derechos de propiedad intelectual,
        industrial o contengan cualquier vicio, defecto, virus informático o rutina de software similar.
    </p>  
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