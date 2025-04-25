<?php
include '../includes/conexao.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

// Para fazer o upload da imagem
$imagem = $_FILES['imagem']['name'];
$caminho_temp = $_FILE['imagem']['tmp_name'];
move_uploaded_file($caminho_temp, '../imagens/' . $imagem);

try {
    $stmt = $pdo->prepare("INSERT INTO produtos (nome, descricao, preco, imagem) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nome, $descricao, $preco, $imagem]);
    echo "<script>alert('Produto cadastrado com sucesso!'); window.location.href='index.php';</script>";
} catch (PDOException $e) {
    echo "Erro ao salvar produto: " . $e->getMessage();
}
?>