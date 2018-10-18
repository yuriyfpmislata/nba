<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Preferencias | Toronto Raptors</title>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
  <?php
   
    // if (isset($_POST['avatar'])) {
    //   $avatar = $_POST['avatar'];

    //   // actualizar cookie
    //   setcookie(
    //     'usuarioLogueado',
    //     $userName . ';' . $avatar,
    //     time() + 60 * 60 * 24 * 7 /* 7 dias */
    //   );

    //   // actualizar archivo
    //   $lineas = file(RUTA_FICHERO_USUARIOS, FILE_IGNORE_NEW_LINES);  

    //   foreach($lineas as $clave => $linea) {
    //     $lineaDividida = explode(';', trim($linea));

    //     // si es la linea del usuario actual
    //     if ($lineaDividida[0] === $userName) {
    //       // sustituir la linea por la misma pero con el nuevo avatar
    //       $lineas[$clave] = $lineaDividida[0].';'.$lineaDividida[1].';'.$avatar;
    //       break;
    //     }
    //   }

    //   $archivo = fopen(RUTA_FICHERO_USUARIOS, 'w');

    //   fwrite($archivo, implode("\n", $lineas));
    //   fclose($archivo);
    // }
    

    if(isset($_FILES['avatarSubido'])) {
      $archivo = $_FILES['avatarSubido'];

      $nombreTmp = $archivo['tmp_name'];

      move_uploaded_file($nombreTmp, RUTA_AVATARES.'/'.$userName.'.png');
    }
    
    // incluir despues de lo de arriba para tener el avatar correcto en caso de que sea actualizado
    include(RUTA_VISTAS.'/_cabecera.php'); 
  ?>  
  <div class="contenido">
    <h2>Preferencias</h2>
    <div class="avatar-actual">
      <h3>Avatar actual</h3>
      <img src="<?php echo RUTA_PUBLICA_AVATARES.'/'.$avatar ?>">
    </div>
    <div class="avatares"> 
      <!--
      <h3>Avatares de otros usuarios</h3>
       <form method="POST">
        <?php
        /*
          $contenidoCarpeta = scandir(RUTA_AVATARES);

          // filtrar . y .. del array
          $listaAvatares = array_slice($contenidoCarpeta, 2, count($contenidoCarpeta));

          foreach($listaAvatares as $imagen) {
            // ignorar el avatar actual, para evitar verlo duplicado
            if ($imagen === $avatar) continue;

            echo '<label>';
            echo '<input type="radio" name="avatar" value="' . $imagen . '">';
            echo '<img src="'.RUTA_PUBLICA_AVATARES.'/'.$imagen.'">';
            echo '</label>';
          }
          */
        ?>
        <div class="clearfix"></div>
        <input type="submit" value="Guardar">
      </form>
      <hr>
      -->
      <h3>Cambiar avatar</h3>
      <form enctype="multipart/form-data" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="999999">
        <input type="file" name="avatarSubido" accept=".png">
        <input type="submit" value="Subir">
      </form>
    </div>
  </div>
</body>
</html>