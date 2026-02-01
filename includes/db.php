<?php
$host = 'localhost';
$dbname = 'nga_school_db';
$user = 'root';
$pass = ''; // Leave empty for XAMPP default

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    // If DB fails, stop everything and show why
    die("Database Connection Failed: " . $e->getMessage());
}
?>