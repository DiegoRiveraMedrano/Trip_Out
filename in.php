<?php
    session_start();
    $email =$_POST['email'];
    $pass =$_POST['password'];
    $_SESSION['usuario'] = $email;
    
?>

<!DOCTYPE html>
<html class="carga">
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
    <link rel="stylesheet" href="carga.css" />
    <link rel="icon" href="./img/logo/favicon.ico" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<div class="waiter__wrapp">
  <div class="waiter__box">
    <div class="waiter">
      Danos un segundo 
      <div class="waiter__line"></div>
    </div>
  </div>
</div>

</html>
<?php
    include('Conexion.php');
    
    $cosulta="SELECT*FROM usuarios WHERE email='$email' AND pass='$pass'";
    $resultado = mysqli_query($conn, $cosulta);
    
    $filas=mysqli_num_rows($resultado);
    if($filas){
      while($row = $resultado->fetch_array()){
          $passdb = $row['pass'];

          if($pass === $passdb){
            header("location:cuenta.php");
    
            ?>
            
            <script>window.location="cuenta.php";</script>
            
            <?php
        } else{
            ?>
            <?php include('Login.php');
            ?>
            
                  <script type="text/javascript">
                    swal('CONTRASEÑA INCORRECTA', 'Verifica tus datos e intenta de nuevo', 'error', {button: "Aceptar",});
                  </script>
                          <script>
                          setTimeout("redireccionar()", 2500);</script>
            <?php
        }

      }} else{
        ?>
        <?php include('Login.php');
        ?>
        
              <script type="text/javascript">
                swal('EMAIL DESCONOCIDO', 'Si ya tienes una cuenta, verifica tus datos e intenta de nuevo', 'error', {button: "Aceptar",});
              </script>
                      <script>
                      setTimeout("redireccionar()", 2500);</script>
        <?php
    }








mysqli_free_result($resultado);
?>
<script>function redireccionar(){
  window.location="Login.php";
}</script>