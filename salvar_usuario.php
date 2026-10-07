<?php
// salvar_usuário.php
// recebe os dados do formulário de cadastro e salva o usuário no banco de dados.
//Conceitos: POST, password_hash, mySQL, INSERT, verificação de E-mail duplicado.
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//====================================================
// Verifica se o email já está cadastrado
//Antes de cadastrar um novo usuário, é importante verificar se o email fornecido já existe no banco de dados. Isso evita duplicidade e garante a integridade dos dados.
//====================================================

// Monta a consulta SQL para verificar se o email já existe
$sql_verifica_email = "SELECT id FROM usuarios WHERE email = '$email'";
$resultadoVerificar = mysqli_query($conexao, $sql_verifica_email);

if (mysqli_num_rows($resultadoVerificar) > 0) {
    // Se o email já existe, redireciona para a página de cadastro com uma mensagem de erro
    header("Location: cadastro.php?erro=email_duplicado");
    exit();
}

$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES;
('$nome', '$email', '$senhaCriptografada')";

mysqli_query($conexao, $sql);

header("Location: login.php?sucesso=usuario_cadastrado");
exit();