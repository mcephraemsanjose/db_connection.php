<?php
$host = 'localhost'; // Database host
$db = 'signupandregistrationforms'; // Ensure this matches the database name
$user = 'root'; // Database username (default for XAMPP)
$pass = ''; // Database password (default is empty for XAMPP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
