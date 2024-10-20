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
                    break;}
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
            <div class="card">
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
                <!-- Aquí empieza la galeria  -->


                <!-- Aquí termina la galeria  -->
            </div>
            <script>
 //Para la galeria
 var elements = ".s1, .s2, .s3"
var images = ".image1, .image2, .image3"
function myFn() {
	if ($('.s1').hasClass('active')) {
		$(elements).removeClass("active");
    	$(".s2").addClass("active");	
        $(".image1").animate({left: '-110vw'});
		$(".image2, .image3").animate({left: '0vw'});
    } else if ($('.s2').hasClass('active')) {
      	$(elements).removeClass("active");
    	$(".s3").addClass("active");
		$(".image1, .image2").animate({left: '-110vw'});
		$(".image3").css("left", "0px");
    } else {
    	$(elements).removeClass("active");
    	$(".s1").addClass( "active" );
    	$(images).animate({left: '0vw', opacity: 1});
    }
}
//This sets slider time to 7sec. You can increase/decrease as you wish
myTimer = setInterval(myFn, 7000);

$(document).ready(function(){
	//Primeiro um RESET
	$(images).css({left: '0vw', opacity: 1});

	//DA FOCO AO PRIMEIRO SLIDE
    $(".s1").click(function(){
		clearInterval(myTimer);
		myTimer = setInterval(myFn, 7000);
		$(elements).removeClass("active");
    	$(".s1").addClass( "active" );
    	$(images).animate({left: '0vw', opacity: 1});
    });

	// DA FOCO AO SEGUNDO SLIDE
	$(".s2").click(function(){
		clearInterval(myTimer);
		myTimer = setInterval(myFn, 7000);
		$(elements).removeClass("active");
    	$(".s2").addClass("active");	
        $(".image1").animate({left: '-110vw'});
		$(".image2, .image3").animate({left: '0vw'});
    });

	//DA FOCO AO TERCEIRO SLIDE
	$(".s3").click(function(){
		clearInterval(myTimer);
		myTimer = setInterval(myFn, 7000);
		$(elements).removeClass("active");
    	$(".s3").addClass("active");
		$(".image1, .image2").animate({left: '-110vw'});
		$(".image3").css("left", "0px");
 });
});
            </script>
            <script type="text/javascript">
             var id= <?php echo $id; ?>;
             var longitud1= <?php echo $longitud; ?>;
             var latitud1= <?php echo $latitud; ?>;
             
            </script>
            <?php
        }
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
                    break;}
            
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
            <div class="card">
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
             var id= <?php echo $id; ?>;
             var longitud2= <?php echo $longitud; ?>;
             var latitud2= <?php echo $latitud; ?>;
             
            </script>
            <?php
        }
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
                    break;}
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
            <div class="card">
                
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
             var id= <?php echo $id; ?>;
             var longitud3= <?php echo $longitud; ?>;
             var latitud3= <?php echo $latitud; ?>;
             
            </script>
            <?php
        }
    }
}
            
?>