<?php
// config.php
$host = ''; 
$dbname = '';
$username = '';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //define atributos de conexão
} catch(PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
