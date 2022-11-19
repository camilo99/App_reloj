<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>

    <!-- CSS de Bootstrap -->

    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">

      <link rel="stylesheet" href="../css/index.css">
      <link rel="stylesheet" href="../css/popup.css">


    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
      <?php
          include('header.php');
      ?>
<!-- Inicio de form -->
<div class="container">
     <div class="registroPanel">
       <div class="register">
         <h2>Registrarse</h2>
         <form action="">
           <input type="text" placeholder="Usuario" class="Usuario" required>
           <input type="text" placeholder="Celular" class="Celular" required>
           <input type="password" placeholder="Contraseña" class="pass" required>
           <input type="password" placeholder="Confirma contraseña" class="repass" required>
           <button type="button" class="buttonRegistro btn-abrir" name="button"><a class="button" href="">Registrarse</a></button>
         </form>
       </div>
       <hr>
       <div class="register">
         <h2>Iniciar Sesión</h2>
         <form action="">
           <input type="text" placeholder="Usuario" class="Usuario" required>
           <input type="password" placeholder="Contraseña" class="pass" required>

           <button type="button" class="buttonRegistro" name="button"><a class="button" href="Userindex.php">Ingresar</a></button>

         </form>
         <label for="" class="label"><a class="button" href="registroLogin/restaurarContrasena.php">¿ Olvido la contraseña? </a></label>
       </div>
     </div>
   </div>

   <!-- Modal Box for Login -->
  <div class="modalBox">
    <div class="modalContent">
      <span class="close"><i class='bx bx-x'></i></span>
      <div class="formHolder">
          <div class="" id="circle"></div>
        <h2>Registro Exitoso</h2>
          <i class='bx bx-check fa-5x arrow'></i>
      </div>
    </div>
  </div>




    <!-- end form -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="../js/fontawesome.js"></script>

    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="../js/popup.js"></script>



    </body>
    </html>
