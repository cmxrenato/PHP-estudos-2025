<?php
// Assumindo conexão PDO $pdo já criada conforme acima
require 'Conexao.php';
$sql = "SELECT nome FROM usuarios";

try {
    $stmt = $pdo->query($sql);
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($usuarios as $usuario) {
        echo $usuario['nome'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Erro na consulta: " . $e->getMessage();
}
