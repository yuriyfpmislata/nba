<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jugadores | Toronto Raptors</title>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
  <?php include(RUTA_VISTAS.'/_cabecera.php'); ?>

  <div class="contenido">
    <?php
      /*
      $jugadores = [
        'kawhi_leonard',
        'kyle_lowry',
        'jonas_valanciunas'
      ];
      */
      $jugadores = [
        [
          'id' => 'kawhi_leonard',
          'nombre' => 'Kawhi Leonard'
        ],
        [
          'id' => 'kyle_lowry',
          'nombre' => 'Kyle Lowry'
        ],
        [
          'id' => 'jonas_valanciunas',
          'nombre' => 'Jonas Valančiūnas'
        ],
        [
          'id' => 'danny_green',
          'nombre' => 'Danny Green'
        ],
      ];

      foreach($jugadores as $jugador) {
        echo '<div class="jugador"><a href="'.RUTA_PUBLICA.'/jugador/'.$jugador['id'].'">';
        echo '<img src="'.RUTA_PUBLICA_IMAGENES.'/'.$jugador['id'].'.jpg">';
        echo '<h2>'.$jugador['nombre'].'</h2>';
        echo '</a></div>';
      }
    ?>
  </div>
</body>
</html>