<?php include '../includes/conexao.php'; ?>
<?php include 'protect.php'; ?>
<?php include '../includes/header.php' ?>

<div class="container">
    <h2 class="text-center">Produtos Cadastrados</h2>
    <p><a href="cadastrar_produto.php" class="btn btn-dark">Novo Produto</a></p>
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->query("SELECT * FROM produtos ORDER BY id DESC");
            while ($produto = $stmt->fetch()) {
                echo "<tr>";
                echo "<td><img src='../assets/imagens/{$produto['imagem']}' width='80'></td>";
                echo "<td>{$produto['nome']}</td>";
                echo "<td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
                echo "<td>
                    <a href='editar_produto.php?id={$produto['id']}' class='btn btn-sm btn-warning'>Editar</a>
                    <a href='excluir_produto.php?id={$produto['id']}' class='btn btn-sm btn-danger' onclick=\"return confirm('Tem certeza que deseja excluir?')\">Excluir</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include '../includes/footer.php' ?>