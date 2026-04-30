<!DOCTYPE html>
<html lang="pt-br" data-bs-thame="dark">
<head>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
    body {
        background-color: #121212;
        color: #ffffff;
    }
</style>
<nav class="navbar navbar-expand-lg bg-dark mb-4" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">📅 AgendaPHP</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Clientes</a>
                </li>
            </ul>

            <!-- Botões alinhados à direita -->
            <div class="d-flex gap-2">
                <a class="btn btn-outline-primary btn-sm" href="novo_cliente.php">
                    + Novo Cliente
                </a>
                <a class="btn btn-success btn-sm" href="novo_agendamento.php">
                    🗓️ Novo Agendamento
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="container">