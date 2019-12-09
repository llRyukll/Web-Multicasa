<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
  <title> Login Multicasa Bienes Raices</title>
  <meta name="viewport" content="width, user-scalable=no, initial-scale=1,maxinum-scale=1">
  <link rel="stylesheet" href="css/estilo_login.css">
   
</head>
<body>
<<<<<<< HEAD
 <form action="verifica_usuario.php" method="post" onsubmit="return valida_captcha();">
=======
 <form action="verifica_usuario.php" onsubmit="return validar(this);" method="post" >
>>>>>>> 206d3c6ef7bfd43a94b95da3be3b84587ed0e894

  <h2>Login administrador Multicasa</h2>
  <input type="text" id="iusuario" placeholder="&#128272; Usuario" name="usuario" maxlength="50" required>
  <input type="password" id="iclave" placeholder="&#128272; Contraseña" name="clave" maxlength="8" required>
<<<<<<< HEAD
  <div class="g-recaptcha" id="cap" data-sitekey="6LeX13oUAAAAAN5HPNpWwuv9oRysDSoVvYxSw-LM" >  
=======
  <div class="g-recaptcha" id="cap" data-sitekey="6LeX13oUAAAAAN5HPNpWwuv9oRysDSoVvYxSw-LM">  
>>>>>>> 206d3c6ef7bfd43a94b95da3be3b84587ed0e894
  </div>
  <input type="submit" value="Ingresar">
</form>
</body>
<<<<<<< HEAD
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/validar_login.js"></script> 

=======
<script src="js/validar_login.js"></script> 
<script src='https://www.google.com/recaptcha/api.js'></script>
>>>>>>> 206d3c6ef7bfd43a94b95da3be3b84587ed0e894
</html>