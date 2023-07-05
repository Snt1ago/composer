<?php
class Singleton {
  private static $instancia;
  private $pdo;


  private function __construct() {
    $host     = constant('HOST');
$port     = constant('PORT_DB');
$db       = constant('DB');
$user     = constant('USER');
$password = constant('PASSWORD');
$charset  = constant('CHARSET');

    try {
    $connection = "mysql:host={$host};port={$port};dbname={$db};charset={$charset}";
    $options    = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $this->pdo = new PDO($connection, $this->user, $this->password, $options);
} catch (PDOException $e) {
    print_r('Error connection: ' . $e->getMessage());
}

  }


  public function getPdo() {
    return $this->pdo;
  }

  public function getPdo() {

  }

  
}
?>