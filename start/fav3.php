<?php
    session_start();
    $varsesion=$_SESSION['usuario'];
    $idusu = $_SESSION['id'];

   
    $id = $_POST['lugar'];
    $tipo = $_POST['tabla'];
    switch ($tipo) {
        case 1:
            $txttipo='comida';
            break;
        case 2:
            $txttipo='entretenimiento';
            break;
        case 3:
            $txttipo='cultura';
            break;}

    include("Conexion.php");
    $consulta1 = "SELECT * FROM fav WHERE idlugar = $id AND tabla = '$txttipo' AND idUsuario = $idusu ";
    $resultado1 = mysqli_query($conn,$consulta1);

    if ($resultado1 && $resultado1->num_rows > 0) /// SI EXISTE ENTONCES EL MENSAJE SERÁ:
         {
            $consulta2 = "DELETE FROM `fav` WHERE idlugar = $id AND tabla = '$txttipo' AND idUsuario = $idusu ";
            $resultado2 = mysqli_query($conn,$consulta2);

        ?>
        <script type="text/javascript">
                swal('YA NO ES TU FAVORITO', 'Se quito este lugar de tus favoritos, para volver a agregarlo puedes dar de nuevo al corazón', 'error', {button: "Aceptar",});

        </script>
        
        <div id="heart"></div>
        
        <?php
    } else{
        $consulta3 = "INSERT INTO `fav`(`tabla`, `idUsuario`, `idlugar`) VALUES ('$txttipo','$idusu','$id')";
        $resultado3 = mysqli_query($conn,$consulta3);

        ?>
        <script type="text/javascript">
                swal('TU FAVORITO', 'Se agrego este lugar a tus favoritos, para quitarlo puedes dar de nuevo al corazón', 'success', {button: "Aceptar",});

        </script>
        <div id="heart2"></div>
        

        <?php
    }


?>