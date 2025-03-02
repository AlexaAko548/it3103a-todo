<?php
// config.php
$host = 'localhost';
$db   = 'todo_db';        // Your database name
$user = 'root';    // Your database username
$pass = '';    // Your database password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
  $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
  // In production, log the error instead of showing it
  die('Database Connection Failed: ' . $e->getMessage());
}
?>
