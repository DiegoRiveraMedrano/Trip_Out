<?php
    $idusu = $_SESSION['id'];
$lugar1= rand(1,4);

if ($inc){
    $consultaf = "SELECT * FROM fav WHERE idUsuario = $idusu";
    $resultadof = mysqli_query($conn,$consultaf);
    if($resultadof){
        while($row = $resultadof->fetch_array()){
            $idfav = $row['idfav'];
            $tabla = $row['tabla'];
            $usua = $row['idUsuario'];
            $lugar = $row['idlugar'];
       

    
    $consulta = "SELECT * FROM $tabla WHERE idlugar = $lugar";
    $resultado = mysqli_query($conn,$consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $id = $row['idlugar'];
            $nombre = $row['nombre'];
            $direccion = $row['direccion'];
            $telefono = $row['telefono'];
            $latitud = $row['latitud'];
            $longitud = $row['longitud'];
            $web = $row['web'];
            $tipo = $row['tipo'];
            $ambiente = $row['ambiente'];
            $precio = $row['precio'];
            switch ($tipo) {
                case 1:
                    $txttipo='Comida';
                    break;
                case 2:
                    $txttipo='Entretenimiento';
                    break;
                case 3:
                    $txttipo='Cultura';
                    break;}
            switch ($ambiente) {
                case 1:
                    $txtambiente='Solo';
                    break;
                case 2:
                    $txtambiente='Amigos';
                    break;
                case 3:
                    $txtambiente='Pareja';
                    break;
                case 4:
                    $txtambiente='Familiar';
                    break;}
            switch ($precio) {
                case 1:
                    $txtprecio='$0 - $200';
                    break;
                case 2:
                    $txtprecio='$201 - $500';
                    break;
                case 3:
                    $txtprecio='$501 - $1000';
                    break;}
                    if ($telefono == 'SN'){
                        $tel = '';
                        ?>
                        
                        <?php
                    }else{
                        $tel = '<a href="tel:+52'.$telefono.'">Llámalos aquí</a><br>';
                    }
         
                $consulta2 = "SELECT * FROM fav WHERE idlugar = $id AND tabla = '$txttipo' AND idUsuario = $idusu ";
                $resultado2 = mysqli_query($conn,$consulta2);
               
                ?>
                <div class="card" id="card<?php echo $idfav?>">
                    
                    <a  class="fav"  id="<?php echo $idfav?>"> <div class="fav" id="heart2"></div></a>
                    <div id="mostrar_mensaje" ></div>

                <h2><?php echo $nombre; ?></h2>
                <div>
                    <p>
                        <?php echo $direccion; ?><br> 
                        <?php echo $tel; ?>   
                        <a href="<?php echo $web; ?>">Ver en Google Maps aquí</a><br> 
                        <b>Tipo: </b><?php echo $txttipo; ?><br>
                        <b>Ambiente: </b><?php echo $txtambiente; ?><br>
                        <b>Precio por persona: </b><?php echo $txtprecio; ?><br>
                    </p>
                </div>
                
            </div>
       
            <script type="text/javascript">
             var idlug= <?php echo $id; ?>;
             var tab= <?php echo $tipo; ?>;
             var longitud1= <?php echo $longitud; ?>;
             var latitud1= <?php echo $latitud; ?>;
             
             
            </script>
            <?php
        }           } 
    }
    } 
} 
            
?>