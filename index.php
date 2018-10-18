<?php
  $logged = false;
  session_start();
  $userName = null;
  $avatar = null;

  function compruebaLogin() {
    global $logged, $userName, $avatar;

    if(isset($_COOKIE['usuarioLogueado'])) {
      $logged = true;
      
      $cookie =  explode(';', trim($_COOKIE['usuarioLogueado']));

      $userName = $cookie[0];
      $avatar = $cookie[1];
    }
  }

  compruebaLogin();

  require_once('./config.php');

  $routes = include "routes.php";
  $page = null;

  $uri = trim($_SERVER["REQUEST_URI"], "/");

  foreach($routes["routes"] as $currentRoute) {
    $route = trim($currentRoute["route"], "/");

    $routerPattern = "#^" . preg_replace('/\\\:[a-zA-Z0-9\_\-]+/', '([a-zA-Z0-9\-\_]+)', preg_quote($route)) . "$#D";

    $matchesParams = [];

    if (preg_match_all($routerPattern, $uri, $matchesParams)) {
      $keys = [];
      $params = [];

      array_shift($matchesParams);

      preg_match_all('/\\:([a-zA-Z0-9\_\-]+)/', $route, $keys);

      array_shift($keys);

      for ($i = 0; $i < count($keys[0]); $i++) {
        $params[$keys[0][$i]] = $matchesParams[$i][0];
      }

      if (count($params) > 0)  {
        // ruta hacia jugador
        $page = $currentRoute["page"].'/'.$params['id'].'.php';
      } else {
        $page = $currentRoute["page"];
      }

    }

    if ($route == $uri) {
      $page = $currentRoute["page"];
      break;
    }
  }

  if ($page != null) {
    include_once ($page);
  } else {
    include_once ($routes["error"]);
  }
?>