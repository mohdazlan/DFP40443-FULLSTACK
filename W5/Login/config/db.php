<?php
$host = 'localhost';
$db   = 'school_db';
$user = 'root';
$pass = ''; 

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}
?>          