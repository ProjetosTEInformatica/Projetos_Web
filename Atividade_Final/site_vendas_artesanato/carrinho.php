<?php
session_start();
include 'includes/header.php';

if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $_SESSION['carrinho'][$id] = ($_SESSION['carrinho'][$id] ?? 0) + 1;
}

include 'includes/conexao.php';
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
        echo '<thead><tr><th>Produto</th><th>Quantidade</th><th>Preço</th><th>Total</th></tr></thead><tbody>';
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
            </tr>";
        }
        echo "<tr><td colspan='3'><strong>Total</strong></td><td><strong>R$ " . number_format($totalGeral, 2, ',', '.') . "</strong></td></tr>";
        echo '</tbody></table>';
    }
    ?>
</div>

<?php include 'includes/footer.php'; ?>