<?php include 'protect.php'; ?>
<?php include '../includes/conexao.php'; ?>
<?php include '../includes/header.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = ?");
$stmt->execute([$id]);
$produto = $stmt->fetch();
?>

<div class="container">
    <h2>Editar Produto</h2>
    <form action="atualizar_produto.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $produto['id'] ?>">
        <div class="mb-3">
            <label for="nome" class="form-label fw-bold">Nome</label>
            <input type="text" name="nome" class="form-control" value="<?= $produto['nome'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label fw-bold">Descrição</label>
            <textarea name="descricao" class="form-control"><?= $produto['descricao'] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label fw-bold">Preço</label>
            <input type="number" name="preco" step="0.01" class="form-control" value="<?= $produto['preco'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label fw-bold">Imagem Atual</label>
            <img src="../assets/imagens/<?= $produto['imagem'] ?>" width="150"><br>
            <label>Nova Imagem (opcional)</label>
            <input type="file" name="imagem" class="form-control">
        </div>
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-dark">Atualizar</button>
        </div>
    </form>
</div>

<?php include '../includes/footer.php'; ?>