<?php
    if ($_REQUEST['trip']=='1'){
        $trip = '"DRIVING"';


    }else if($_REQUEST['trip']=='2'){
        $trip = '"BICYCLING"';

    }else if($_REQUEST['trip']=='3'){
        $trip = '"WALKING"';

    }
    ?>



    <script type="text/javascript">
    var trip= <?php echo $trip; ?>;
    
   </script>

<?php

    if ($_REQUEST['tipo']=='1'){
        $t= 'comida';
        $lugar1= 1;
        /* $lugar1= rand(1,8);*/

    }else if($_REQUEST['tipo']=='2'){
        $t= 'entretenimiento';
        /* $lugar1= rand(1,8);*/

    }else if($_REQUEST['tipo']=='3'){
        $t= 'cultura';
       /* $lugar1= rand(1,8);*/

    }

    if ($_REQUEST['tipo2']=='1'){
        $t2= 'comida';
        $lugar1= 2;
        /* $lugar1= rand(1,8);*/

    }else if($_REQUEST['tipo2']=='2'){
        $t2= 'entretenimiento';
        /* $lugar1= rand(1,8);*/

    }else if($_REQUEST['tipo2']=='3'){
        $t2= 'cultura';
        /* $lugar1= rand(1,8);*/

    }

    if ($_REQUEST['tipo3']=='1'){
        $t3= 'comida';
        /* $lugar1= rand(1,8);*/

    }else if($_REQUEST['tipo3']=='2'){
        $t3= 'entretenimiento';
        /* $lugar1= rand(1,8);*/
  
    }else if($_REQUEST['tipo3']=='3'){
        $t3= 'cultura';
        /* $lugar1= rand(1,8);*/

    }
    



    $limit = rand(1,3);
    $limit2 = rand(1,3);
    $limit3 = rand(1,3);
    if ($t==$t2){
        $limit = 1;
        $limit2 = 2;
        

    }
    if ($t == $t3){
        $limit = 1;
        $limit3 = 3;
        

    }
    if ($t==$t2 & $t == $t3){
        $limit = 1;
        $limit2 = 2;
        $limit3 = 3;
        

    }
    
/*
    $_POST['precio'];
    if ($_POST['precio']<='200'){
        $p = 1;
        echo $p;
    } else if ($_POST['precio']>='201' & $_POST['precio']<='500'){
        $p = 2;
        echo $p;
    } else if ($_POST['precio']>='501' & $_POST['precio']<='1000'){
        $p = 3;
        echo $p;
    }
    <label>¿Cuánto estimas gastar aproximandamente por persona (minimo $1 - maximo $1000)?</label><br>
    <span>$ <input class="input1" type="number" name="precio" min="1" max="1000"  id="precio"  placeholder="Ejem. 100" ></span><br><br><br>
*/
    

    if ($_REQUEST['acom']=='1'){
        $a= 1;

    }else if($_REQUEST['acom']=='2'){
        $a= 2;
 
    }else if($_REQUEST['acom']=='3'){
        $a= 3;

    }else if($_REQUEST['acom']=='4'){
        $a= 4;

    }
?>

<?php


if ($inc){
    $consulta = "SELECT * FROM $t WHERE ambiente = $a LIMIT $limit";
    $resultado = mysqli_query($conn,$consulta);
    $rowcount=mysqli_num_rows($resultado);
    //echo "The total number of rows are: ".$rowcount; 

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


if ($inc){
    $consulta = "SELECT * FROM $t2 WHERE ambiente = $a LIMIT $limit2";
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


if ($inc){
    $consulta = "SELECT * FROM $t3 WHERE ambiente = $a LIMIT $limit3";
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
