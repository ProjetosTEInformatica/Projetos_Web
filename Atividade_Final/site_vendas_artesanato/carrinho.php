<?php
session_start();
include 'includes/header.php';

include 'includes/conexao.php';

// Adiciona produto ao carrinho
if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $_SESSION['carrinho'][$id] = ($_SESSION['carrinho'][$id] ?? 0) + 1;
}

// Remove produto do carrinho
if (isset($_GET['remover'])) {
    $id = $_GET['remover'];
    unset($_SESSION['carrinho'][$id]);
    header('Location: carrinho.php');
    exit;
}
?>

<div class="container">
    <h2 class="text-center">Carrinho de Compras</h2>
    <?php
    if (!isset($_SESSION['carrinho']) || empty($_SESSION['carrinho'])) {
        echo '<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 200px;">';
        echo '<p class="text-center">Seu carrinho está vazio.</p>';
        echo '</div>';
    } else {
        echo '<table class="table">';
        echo '<thead><tr><th>Produto</th><th>Quantidade</th><th>Preço</th><th>Total</th><th>Ações</th></tr></thead><tbody>';
        $totalGeral = 0;
        foreach ($_SESSION['carrinho'] as $id => $qtd) {
            $stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = ?");
            $stmt->execute([$id]);
            $produto = $stmt->fetch();
            $subtotal = $produto['preco'] * $qtd;
            $totalGeral += $subtotal;
            echo "<tr>
                <td>{$produto['nome']}</td>
                <td>{$qtd}</td>
                <td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>
                <td>R$ " . number_format($subtotal, 2, ',', '.') . "</td>
                <td>
                    <a href='carrinho.php?remover={$id}' class='btn btn-danger btn-sm' onclick=\"return confirm('Deseja remover este produto?')\">Remover</a>
                </td>
            </tr>";
        }
        echo "<tr><td colspan='4'><strong>Total</strong></td><td><strong>R$ " . number_format($totalGeral, 2, ',', '.') . "</strong></td></tr>";
        echo '</tbody></table>';

        // Botão de Finalizar Compra
        echo '<div class="text-center mt-4">';
        echo '<a href="finalizar_pedido.php" class="btn btn-success btn-lg">Finalizar Compra</a>';
        echo '</div>';
    }
    ?>
</div>

<?php include 'includes/footer.php'; ?>