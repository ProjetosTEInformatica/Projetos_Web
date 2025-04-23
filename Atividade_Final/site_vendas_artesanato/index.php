<?php include 'includes/conexao.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="container">
    <h1 class="text-center">Destaques da Loja</h1>
    <div class="row">
        <?php

        $stmt = $pdo->query("SELECT * FROM produtos LIMIT 6");
        while ($produto = $stmt->fetch()) {
            echo '
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="imagens/' . $produto['imagem'] . '" class="card-img-top">
                    <div class="card-body">
                        <h5>' . $produto['nome'] . '</h5>
                        <p>R$ ' . number_format($produto['preco'], 2, ',', '.') . '</p>
                        <a href="carrinho.php?add=' . $produto['id'] . '" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>';
        }

        ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>