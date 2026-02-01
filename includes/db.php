/* includes/db.php */
<?php
$host = 'localhost';
$dbname = 'nga_school_db';
$user = 'root';
$pass = ''; // Set your password
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) { die("DB Connection failed"); }
?>