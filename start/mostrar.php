<?php
$lugar1= rand(1,12);

if ($inc){
    $consulta = "SELECT * FROM comida WHERE idlugar = $lugar1";
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
                    break;}}
                $consulta2 = "SELECT * FROM fav WHERE idlugar = $id AND tabla = '$txttipo' AND idUsuario = $idusu ";
                $resultado2 = mysqli_query($conn,$consulta2);
               
                ?>
                <div class="card">
                <?php

                if ($resultado2 && $resultado2->num_rows > 0) /// SI EXISTE ENTONCES EL MENSAJE SERÁ:
                     {
                    ?>
                    
                    <a  class="fav" onclick="love();"  id="mostrar_mensaje" ><div id="heart2"></div></a>
                    
                    <?php
                } else{
                    ?>

                    <a class="fav" onclick="love();"  id="mostrar_mensaje"><div id="heart"></div></a>

                    <?php
                }

                    ?>
                    <?php 
                            if ($telefono == 'SN'){
                                $tel = '';
                                ?>
                                
                                <?php
                            }else{
                                $tel = '<a href="tel:+52'.$telefono.'">Llámalos aquí</a><br>';
                            }
                        ?>

                <h2>A. <?php echo $nombre; ?></h2>
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
        
    }
}
            
?>
<?php
$lugar2= rand(1,12);
if ($inc){
    $consulta = "SELECT * FROM entretenimiento WHERE idlugar = $lugar2";
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
                    break;}}
                    $consulta3 = "SELECT * FROM fav WHERE idlugar = $id AND tabla = '$txttipo' AND idUsuario = $idusu ";
                    $resultado3 = mysqli_query($conn,$consulta3);
                   
                    ?>
                    <div class="card">
                    <?php
    
                    if ($resultado3 && $resultado3->num_rows > 0) /// SI EXISTE ENTONCES EL MENSAJE SERÁ:
                         {
                        ?>
                        
                        <a  class="fav" onclick="love2();"  id="mostrar_mensaje2" ><div id="heart2"></div></a>
                        
                        <?php
                    } else{
                        ?>
    
                        <a class="fav" onclick="love2();"  id="mostrar_mensaje2"><div id="heart"></div></a>
    
                        <?php
                    }
    
                        ?>
                        <?php 
                            if ($telefono == 'SN'){
                                $tel = '';
                                ?>
                                
                                <?php
                            }else{
                                $tel = '<a href="tel:+52'.$telefono.'">Llámalos aquí</a><br>';
                            }
                        ?>
                <h2>B. <?php echo $nombre; ?></h2>
                <div >
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
            var idlug2= <?php echo $id; ?>;
             var tab2= <?php echo $tipo; ?>;
             var longitud2= <?php echo $longitud; ?>;
             var latitud2= <?php echo $latitud; ?>;
             
            </script>
            <?php
        
    }
}
            
?>
<?php
$lugar3= rand(1,12);

if ($inc){
    $consulta = "SELECT * FROM cultura WHERE idlugar = $lugar3";
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
                    break;}}
                    $consulta4 = "SELECT * FROM fav WHERE idlugar = $id AND tabla = '$txttipo' AND idUsuario = $idusu ";
                    $resultado4 = mysqli_query($conn,$consulta4);
                   
                    ?>
                    <div class="card">
                    <?php
    
                    if ($resultado4 && $resultado4->num_rows > 0) /// SI EXISTE ENTONCES EL MENSAJE SERÁ:
                         {
                        ?>
                        
                        <a  class="fav" onclick="love3();"  id="mostrar_mensaje3" ><div id="heart2"></div></a>
                        
                        <?php
                    } else{
                        ?>
    
                        <a class="fav" onclick="love3();"  id="mostrar_mensaje3"><div id="heart"></div></a>
    
                        <?php
                    }
    
                        ?>
                        <?php 
                            if ($telefono == 'SN'){
                                $tel = '';
                                ?>
                                
                                <?php
                            }else{
                                $tel = '<a href="tel:+52'.$telefono.'">Llámalos aquí</a><br>';
                            }
                        ?>
                <h2>C. <?php echo $nombre; ?></h2>
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
             var idlug3= <?php echo $id; ?>;
             var tab3= <?php echo $tipo; ?>;
             var longitud3= <?php echo $longitud; ?>;
             var latitud3= <?php echo $latitud; ?>;
             
            </script>
            <?php
        
    }
}
            
?>