<?php
require_once 'db.php';

$stmt = $pdo->query("SELECT * FROM clientes");
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php require_once 'header.php'; ?>

    <h1>Clientes Cadastrados</h1>

    <a <button class="btn btn-primary" href="novo_cliente.php">+ Novo Cliente</button></a>

    <br><br>


    <table class="table table-dark table-striped table-hover">
     <thead>
       <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
            <th scope="col">Ações</th>
         </tr>

    <?php foreach ($clientes as $cliente): ?>
     </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $cliente['id'] ?></th>
      <td><?= $cliente['nome'] ?></td>
      <td><?= $cliente['telefone'] ?></td>
      <td><?= $cliente['email'] ?></td>
      <td> <button class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este cliente?');">Deletar</button>
      </td>
    </tr>
  </tbody>
   <?php endforeach; ?>
</table>

</div>
</body>
</html>