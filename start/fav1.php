<?php
    session_start();
    $varsesion=$_SESSION['usuario'];
    $idusu = $_SESSION['id'];

    $idfav = $_POST['id'];
    $id = $_POST['lugar'];
    $tipo = $_POST['tabla'];
    switch ($tipo) {
        case 1:
            $txttipo='comida';
            break;
        case 2:
            $txttipo='cntretenimiento';
            break;
        case 3:
            $txttipo='cultura';
            break;}

    include("Conexion.php");
    $consulta1 = "SELECT * FROM fav WHERE  idfav = $idfav AND idUsuario = $idusu ";
    $resultado1 = mysqli_query($conn,$consulta1);

    if ($resultado1 && $resultado1->num_rows > 0) /// SI EXISTE ENTONCES EL MENSAJE SERÁ:
         {
            $consulta2 = "DELETE FROM `fav` WHERE idfav = $idfav AND idUsuario = $idusu ";
            $resultado2 = mysqli_query($conn,$consulta2);

        ?>
        <script type="text/javascript">
                swal('YA NO ES TU FAVORITO', 'Se quito este lugar de tus favoritos, puedes agregar más en futuras rutas', 'error', {button: "Aceptar",});

        </script>
        
        
        <?php
    } 


?>