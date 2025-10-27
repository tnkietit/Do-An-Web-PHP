<?php
class Db {
  private $pdo;

  public function __construct() {
    $host = getenv('DB_HOST') ?: '127.0.0.1'; // KHÔNG dùng 'localhost'
    $port = getenv('DB_PORT') ?: '3306';
    $name = getenv('DB_NAME') ?: 'app';
    $user = getenv('DB_USER') ?: 'root';
    $pass = getenv('DB_PASS') ?: '';

    $dsn = "mysql:host={$host};port={$port};dbname={$name};charset=utf8mb4";

    $options = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    // Nếu DB yêu cầu TLS/SSL, bật thêm (tuỳ nhà cung cấp):
    // $options[PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT] = false;
    // $options[PDO::MYSQL_ATTR_SSL_CA] = '/path/to/ca.pem';

    $this->pdo = new PDO($dsn, $user, $pass, $options);
  }

  public function pdo() { return $this->pdo; }
}
