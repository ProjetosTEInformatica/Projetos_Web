<?php
include '../includes/conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

// Se uma nova imagem for enviada

if (!empty($_FILES['imagem']['name'])) {
    $imagem = $_FILES['imagem']['name'];
    $caminho_temp = $_FILES['imagem']['tmp_name'];
    move_uploaded_file($caminho_temp, '../assets/imagens/' . $imagem);

    $stmt = $pdo->prepare("UPDATE produtos SET nome=?, descricao=?, preco=?, imagem=? WHERE id=?");
    $stmt->execute([$nome, $descricao, $preco, $imagem, $id]);
} else {
    $stmt = $pdo->prepare("UPDATE produtos SET nome=?, descricao=?, preco=?, WHERE id=?");
    $stmt->execute([$nome, $descricao, $preco, $id]);
}

echo "<script>alert('Produto atualizado!'); window.location.href='index.php';</script>";
?>