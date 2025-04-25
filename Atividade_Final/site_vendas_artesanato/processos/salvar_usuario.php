<?php
include '../includes/conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

try {
    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $email, $senha]);
    header("Location: login.php?cadastro=ok");
} catch (PDOException $e) {
    echo "Erro ao cadastrar: " . $e->getMessage();
}
?>