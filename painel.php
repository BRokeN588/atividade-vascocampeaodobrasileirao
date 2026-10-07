<?php
include 'verificar_sessao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Biblioteca</title>
</head>

<body>
    <div class="container">
        <h1>Olá, <?php echo $_SESSION['nome_usuario']; ?></h1>
        <p class="subtitulo">Bem-vindo ao painel de gerenciamento da biblioteca.</p>
    </div>
    <div class="painel-cards">
        <div class="card">
            <h2>Gerenciar Livros</h2>
            <p>Acesse a área de gerenciamento de livros.</p>
        </div>
        <div class="card">
            <h2>Gerenciar Usuários</h2>
            <p>Acesse a área de gerenciamento de usuários.</p>
        </div>
        <div class="card">
            <h2>Configurações</h2>
            <p>Acesse as configurações do sistema.</p>
        </div>
        <div class="card">
            <h2>Sair</h2>
            <p>Encerre sua sessão e saia do sistema.</p>
        </div>
        <div class="dica-navegador">
            <strong>Fluxo:</strong>
            Painel → Gerenciar Livros → Adicionar/Editar/Excluir Livros.
        </div>
    </div>
    </div>
</body>

</html>