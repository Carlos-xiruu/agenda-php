<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'db.php';

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO clientes (nome, telefone, email) VALUES (:nome, :telefone, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nome' => $nome,
        ':telefone' => $telefone,
        ':email' => $email
    ]);

    $mensagem = "Cliente cadastrado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Cliente</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>

    <?php if ($mensagem): ?>
        <p><?= $mensagem ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Telefone:</label><br>
        <input type="text" name="telefone"><br><br>

        <label>Email:</label><br>
        <input type="text" name="email"><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <br>
    <a href="index.php">Voltar</a>
</body>
</html>