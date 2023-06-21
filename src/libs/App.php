<?php

namespace Sofket\App\Libs;

class App
{
  public static function iniciar()
  {
    $c    = $_GET['c'] ?? 'index';
    $m    = $_GET['m'] ?? 'index';
    $con  = ucfirst($c) . '_Controller';
    $conP = 'src/controller/' . $con . '.php';
    require_once $conP;
    $controller = new $con();
    $controller->{$m}();
  }
}