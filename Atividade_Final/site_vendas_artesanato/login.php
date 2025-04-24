<?php include 'includes/header.php'; ?>
<div class="container">
    <h2 class="text-center">Entrar</h2>
    <form action="valida_login.php" method="post" class="w-50 mx-auto">
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">E-mail<span class="text-danger">*</span></label>
            <input type="email" name="email" placeholder="exemplo@email.com" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label fw-bold">Senha<span class="text-danger">*</span></label>
            <input type="password" name="senha" placeholder="Digite sua senha" class="form-control" required>
        </div>
        <div class="container-fluid d-flex justify-content-center align-itens-center">
            <button type="submit" class="btn btn-dark"> Entrar</button>
        </div>
    </form>
</div>
<?php include 'includes/footer.php'; ?>