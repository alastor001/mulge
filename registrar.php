<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/style.css">
   <script src="js/jquery-latest.min.js" type="text/javascript"></script>
   <title>Sweet Dreams</title>
</head>
<body>
<?php 
include('menu.php');
?>
<div class="group">
  
  <h2><em>Formulario de Registro</em></h2>  
     
  <form action="guardaRegistro.php" method="post">
        <label for="nombre">Nombre <span></span></label><div></div>
      <input type="text" name="nombre" class="form-input" required/><br>
      <label for="apellido">Apellido <span></span></label><div></div>
      <input type="text" name="apellido" class="form-input" required/><br>
      <label for="rut">rut <span></span></label><div></div>
      <input type="text" name="rut" id="rut" class="form-input" required/> <br> <img src="images/2016-06-08.png" style="float: right"/> </right>
      <label for="email">Email <span></span></label><div></div>
      <input type="email" name="email" class="form-input" /><br>
      <label for="password">password <span></span></label><div></div>
      <input type="text" name="password" class="form-input" required/><br>
      <label for="ciudad">ciudad <span></span></label><div></div>
      <input type="text" name="ciudad" class="form-input" required/><br>
      <label for="direccion">direccion <span></span></label><div></div>
      <input type="text" name="direccion" class="form-input" required/><br>
      <label for="tarjeta">tarjeta <span></span></label><div></div>
      <input type="text" name="tarjeta" class="form-input" required/><br>
      <br>
      <br>
      <right> <input class="form-btn" name="registrarse" type="submit" value="registrarse"/></right>
  </form>
    
  
</div>
</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="footer"> diseñado por Mulge </div>