<?php
session_start();
require 'config.php';  // Conexão com o banco de dados

$erro = '';  // Variável para armazenar a mensagem de erro

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validação de campos obrigatórios
    if (empty($email) || empty($senha)) {
        $erro = "Todos os campos são obrigatórios.";
    } else {
        // Proteção contra SQL Injection
        $email = $conn->real_escape_string($email);
        $senha = $conn->real_escape_string($senha);

        // Consulta ao banco de dados para verificar o e-mail e a senha
        $sql = "SELECT * FROM cadastro WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Caso o e-mail esteja cadastrado
            $usuario = $result->fetch_assoc();
            // Verifica se a senha fornecida corresponde à senha criptografada no banco
            if (password_verify($senha, $usuario['senha'])) {
                // Senha correta, cria a sessão e redireciona para a página principal
                $_SESSION['email'] = $usuario['email'];
                header("Location: home.php");  // Página inicial após login
                exit();
            } else {
                // Senha incorreta
                $erro = "E-mail ou senha incorretos.";
            }
        } else {
            // E-mail não encontrado
            $erro = "E-mail ou senha incorretos.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Camisa de Time</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>Login</h1>

        <!-- Exibe erro se houver algum -->
        <?php if ($erro): ?>
            <div class="error"><?= $erro ?></div>
        <?php endif; ?>

        <!-- Formulário de Login -->
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn">Entrar</button>
        </form>

        <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
    </div>

    <style>
        /* Resetando os estilos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Corpo da página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container principal */
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Cabeçalho */
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        /* Estilo dos campos do formulário */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input:focus {
            border-color: #3498db;
            outline: none;
        }

        /* Estilo do botão */
        button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        /* Estilo para mensagens de erro */
        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>

</body>
</html>
