<?php
    $host = 'localhost';            // Servidor do banco
    $db   = 'honkai';               // Nome do banco de dados
    $user = 'natsu';                // Nome de usuário
    $pass = '';                     // Senha
    $charset = 'utf8mb4';           // Charset recomendado

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Mostra erros como exceções
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Retorna resultados como array associativo
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Usa prepared statements nativos do MySQL
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        die("Erro na conexão: " . $e->getMessage());
    }
?>