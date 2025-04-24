<?php include 'includes/conexao.php'; ?>
<?php include 'includes/header.php'; ?>
<div class="container">
    <h1 class="text-center">Todos os Produtos</h1>
    <div class="row">
        <?php
        $stmt = $pdo->query("SELECT * FROM produtos");
        while ($prduto = $stmt->fetch()) {
            echo '
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="imagens/' . $produto['imagem'] . '" class="card-img-top">
                    <div class="card-body">
                        <h5>' . $produto['nome'] . '</h5>
                        <p>' . number_format($produto['preco'], 2, ',', '.') . '</p>
                        <a href="carrinho.php?add=' . $produto['id'] . '" class="btn btn-dark">Comprar</a>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>
<?php include 'includes/footer.php'; ?>