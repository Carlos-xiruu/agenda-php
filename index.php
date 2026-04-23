<?php
require_once 'db.php';

$stmt = $pdo->query("SELECT * FROM clientes");
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda PHP</title>
</head>
<body>
    <h1>Clientes Cadastrados</h1>

    <a href="novo_cliente.php">+ Novo Cliente</a>

    <br><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?= $cliente['id'] ?></td>
            <td><?= $cliente['nome'] ?></td>
            <td><?= $cliente['telefone'] ?></td>
            <td><?= $cliente['email'] ?></td>
            <td><a href="deletar_cliente.php?id=<?= $cliente['id'] ?>">Deletar</a></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
