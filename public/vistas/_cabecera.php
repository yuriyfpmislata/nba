<header>
  <img class="logo" src="<?php echo RUTA_PUBLICA_IMAGENES.'/logo.png' ?>" >
  <ul class="menu">
    <li><a href="<?php echo RUTA_PUBLICA?>/">Inicio</a></li>
    <li><a href="<?php echo RUTA_PUBLICA?>/historia">Historia</a></li>
    <li><a href="<?php echo RUTA_PUBLICA?>/jugadores">Jugadores</a></li>
    <li class="no-hover"><a> | </a></li>
    <?php 
      if ($logged) {
        echo '<li class="item-avatar no-hover"><img src="'.RUTA_PUBLICA_AVATARES.'/'.$avatar.'"></li>';
        echo '<li><a href="'.RUTA_PUBLICA.'/preferencias'.'">Preferencias</a></li>';
        echo '<li><a href="'.RUTA_PUBLICA.'/logout.php'.'">Logout</a></li>';
      } else {
        echo '<li><a href="'.RUTA_PUBLICA.'/login'.'">Login</a></li>';
      }
    ?>
  </ul>
</header>