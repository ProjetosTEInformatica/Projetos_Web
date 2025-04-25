<?php include 'protect.php'; ?>

<?php include '../includes/header.php' ?>
<div class="container">
    <h2 class="text-center">Cadastrar Produto</h2>
    <form action="salvar_produto.php" method="post" enctype="multipart/form-data" class="w-50 mx-auto">
        <div class="mb-3">
            <label for="nome" class="form-label fw-bold">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label fw-bold">Descrição</label>
            <textarea name="descricao" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label fw-bold">Preço</label>
            <input type="number" name="preco" step="0.01" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label fw-bold">Imagem</label>
            <input type="file" name="imagem" class="form-control" required>
        </div>
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-dark">Salvar Produto</button>
        </div>
    </form>
</div>
<?php include '../includes/header.php' ?>