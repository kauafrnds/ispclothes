<?php
// Configuração do banco de dados
$host = 'localhost';    // Nome do host (geralmente localhost)
$usuario = 'root';      // Nome de usuário do banco
$senha = '';            // Senha do banco (deixe vazio se não houver senha)
$dbname = 'registro';   // Nome do banco de dados

// Criando a conexão com o MySQL
$conn = new mysqli($host, $usuario, $senha, $dbname);

// Verificando se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
