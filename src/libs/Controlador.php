<?php

namespace Sofket\App\Libs;

class Controlador
{
  public $datos;

  public function __construct()
  {
  }
  public function cargarVista($rutaVista, $datos = null)
  {
    $this->datos = $datos;
    require_once("src/vista/" . $rutaVista . ".php");
  }
}