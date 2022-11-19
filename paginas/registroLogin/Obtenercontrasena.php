<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>

	<link href="../../css/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="../../css/index.css">
      <link rel="stylesheet" href="../../css/popup.css">
</head>
<body>
	<?php
      include('../header.php');
    ?>
		<div class="container">
		     <div class="registroPanelcontrasena">
		<div class="register2">

			<div class="relojeriaImg" id="logo2"></div>

			<form action="">
				<label class="label" for=""> Nueva contraseña</label><br>
				<input type="password" placeholder="contraseña" class="password" required>


				<button type="button" class="buttonRegistro registrocontra" id="recuperarcontraseña" name="button"><a class="button" href="Obtenercontrasena.php">restaurar contraseña</a></button>

			</form>

		</div>
	</div>
</div>

<div class="modalBox modalBox2">
  <div class="modalContent">
    <span class="close"><i class='bx bx-x'></i></span>
    <div class="formHolder">
        <div class="" id="circle"></div>
      <h2>Tu contraseña se ha restaurado</h2>
        <i class='bx bx-check fa-5x arrow'></i>

    </div>
    <button type="button" class="buttonRegistro" name="button"><a class="button" href="../Userindex.php">Empezar</a></button>

    <div class="volver">

    </div>
  </div>
</div>
<!--
	<div class="row editRow">
    	<div class="container">

    		<div class="col-md-4">
    			<div class="img1"></div>
    		</div>

    			<div class="col-md-4">
    				<div class="img2"></div>

    			</div>
    				<div class="col-md-4">
    			 		<div class="img3"></div>
    				</div>
    	</div>
    </div> -->

    <!-- Bootstrap core JavaScript
     -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="../../js/fontawesome.js"></script>

    <script src="../../js/bootstrap/bootstrap.min.js"></script>
    <script src="../../js/popup.js"></script>

</body>
</html>

