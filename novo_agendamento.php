<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'db.php';

$mensagem = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['cliente_id'])) {
    $cliente_id = $_POST['cliente_id'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO agendamentos (cliente_id, data, hora, descricao) 
            VALUES (:cliente_id, :data, :hora, :descricao)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':cliente_id' => $cliente_id,
        ':data'       => $data,
        ':hora'       => $hora,
        ':descricao'  => $descricao
    ]);

    $mensagem = "Agendamento criado com sucesso!";
}

$clientes = $pdo->query("SELECT id, nome FROM clientes")->fetchAll(PDO::FETCH_ASSOC);
?>
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Agendamento</title>
</head>
<body>
    <h1>Criar agendamento</h1>

    <?php if ($mensagem): ?>
        <p><?= $mensagem ?></p>
    <?php endif; ?>
    

    <form method="POST">
        <label>Cliente:</label><br>
        <select name="cliente_id" required>
            <option value="">Selecione um cliente</option>
            <?php foreach ($clientes as $cliente): ?>
                <option value="<?= $cliente['id'] ?>"><?= $cliente['nome'] ?></option>
            <?php endforeach; ?>

        <label>Telefone:</label><br>
        <input type="text" name="telefone"><br><br>

        <label>Email:</label><br>
        <input type="text" name="email"><br><br>

        <label>Motivo do agendamento:</label><br>
        <input type="text" name="Descricao"><br><br>
        

        <button type="submit">Criar agendamento</button>
    </form>

    <br>
    <a href="index.php">Voltar</a>
</body>
</html>