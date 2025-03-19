<?php

// Configuração do banco de dados
$host = 'localhost';
$dbname = 'projeto';
$username = 'root'; 
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Conexão show de bola';
} catch (PDOException $e) {
    die("Erro na conexão dessa Graxa Veia: " . $e->getMessage());
}

?>
