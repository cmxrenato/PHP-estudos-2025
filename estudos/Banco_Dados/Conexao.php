<?php
$host = '127.0.0.1';
$db   = 'usuario';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    // Configurar o modo de erro para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizada com sucesso!\n";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    exit;
}
