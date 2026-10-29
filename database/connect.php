<?php
// Connect to database
$dsn = 'mysql:host=localhost;dbname=myapp;charset=utf8mb4';
$username = 'wyclif';
$password = '';
try {
 $pdo = new PDO($dsn, $username, $password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch (PDOException $e) {
 die("Connection failed: " . $e->getMessage());
}