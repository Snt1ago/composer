<?php

require_once "vendor/autoload.php";
$c    = $_GET['c'] ?? 'index';
$m    = $_GET['m'] ?? 'index';
$con  = ucfirst($c) . '_Controller';
$conP = 'src/controllers/' . $con . '.php';
require_once $conP;
$controller = new $con();
$controller->{$m}();