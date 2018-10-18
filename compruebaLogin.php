<?php
  require 'config.php';

  $user = trim($_POST['user']);
  $password = $_POST['password'];

  $lineasFicheroUsuarios = file(RUTA_FICHERO_USUARIOS);

  $usuarios = [];
  $usuarioLogueado = null;

  foreach ($lineasFicheroUsuarios as $linea) {
    // trimear la linea para evitar el salto de linea al final
    $lineaDividida = explode(';', trim($linea));

    array_push($usuarios, [
      'user' => $lineaDividida[0],
      'password' => $lineaDividida[1],
      'avatar' => $lineaDividida[2]
    ]);
  }

  foreach ($usuarios as $usuario) {
    // password_verify comprueba la contraseña aplicando la sal y el algoritmo almacenados en la propia contraseña
    if ($user === $usuario['user'] && password_verify($password, $usuario['password'])) {
      $usuarioLogueado = $usuario;

      setcookie(
        'usuarioLogueado',
        $usuarioLogueado['user'] . ';' . $usuarioLogueado['avatar'],
        time() + 60 * 60 * 24 * 7 /* 7 dias */
      );

      break;
    }     
  }

  if (isset($usuarioLogueado)) {
    header('Location: /');
  } else {
    echo 'Usuario o contraseña incorrectos';
  }  
?>