
<?php
      
      




        $nombre =$_POST['nombres'];
        $apellidoPa =$_POST['apellidoPa'];
        $apellidoMa =$_POST['apellidoMa'];
        $email =$_POST['email'];
        $pass =$_POST['password'];
        $pass_confirm =$_POST['password_confirm'];
      

  
        $conn->set_charset("utf8");
        if ($pass===$pass_confirm) {
          $existente = "SELECT * FROM `bzb6tfijofywzhjscv1u`.`usuarios` where email='$email'"; /// COMPROBAR SI EL YA ESTA REGISTRADO
          $validando = $conn->query($existente);
      
          if ($validando->num_rows>0) /// SI EXISTE ENTONCES EL MENSAJE SERÁ:
          {
          ?>

            <script type="text/javascript">
          
                swal('CORREO ELECTRÓNICO YA REGISTRADO', 'Intente con otro correo electrónico', 'error', {button: "Aceptar",}
              
                );
              
            </script>
          <?php
          }
           else {
          $consulta = "INSERT INTO `bzb6tfijofywzhjscv1u`.`usuarios` ( `nombres`, `apellidoPaterno`, `apellidoMaterno`, `email`, `pass`) VALUES ('$nombre','$apellidoPa','$apellidoMa','$email','$pass')";

          $resultado = mysqli_query($conn,$consulta);
           
          if($resultado){
              ?>
              <script type="text/javascript">
                swal('SE REGISTRO CORRECTAMENTE', 'Ya puede iniciar sesión', 'success', {button: "Aceptar",});
              </script>


                
              <?php
            } else {
               ?>

              <script type="text/javascript">
                swal('OCURRIO UN ERROR AL REGISTRAR', 'Vuelva a intentarlo', 'error', {button: "Aceptar",});
              </script>
              <?php
            }
        }
      } else {
             ?>

              <script type="text/javascript">
                swal('LAS CONTRASEÑAS NO COINCIDEN', 'Vuelva a intentarlo', 'error', {button: "Aceptar",});
              </script>
              <?php
      }

?>
