<?php
  return [
    'routes' => [
     '/' => [
        'route' => '/',
        'page' => RUTA_VISTAS.'/principal.php'
     ],
     'Historia' => [
        'route' => '/historia',
        'page' => RUTA_VISTAS.'/historia.php'
     ],
     'Jugadores' => [
      'route' => '/jugadores',
      'page' => RUTA_VISTAS.'/jugadores.php'
     ],
     'Jugador' => [
        'route' => '/jugador/:id',
        'page' => RUTA_JUGADORES
     ],
     'Login' => [
       'route' => '/login',
       'page' => RUTA_VISTAS.'/login.php'
     ],
     'Preferencias' => [
      'route' => '/preferencias',
      'page' => RUTA_VISTAS.'/preferencias.php'
     ],
    ],
    'error' => RUTA_VISTAS.'/error.php'
  ];
?>
