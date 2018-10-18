<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login | Toronto Raptors</title>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
  <?php include(RUTA_VISTAS.'/_cabecera.php'); ?>
  <div class="contenido">
    <form id="login" action="<?php echo RUTA_PUBLICA.'/compruebaLogin.php'?>" method="POST">
      <input type="text" name="user" required autocomplete="off" placeholder="Usuario">
      <input type="password" name="password" required autocomplete="off" placeholder="Contraseña">
      <input type="submit" value="Iniciar sesión">
    </form>
  </div>
</body>
</html>