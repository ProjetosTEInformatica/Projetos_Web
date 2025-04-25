<?php
include '../includes/conexao.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM produtos WHERE id=?");
$stmt->execute([$id]);

echo "<script>alert('Produto excluído!'); window.location.href='index.php'</script>;";
?>