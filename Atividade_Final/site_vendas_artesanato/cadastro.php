<?php include 'includes/header.php'; ?>
<div class="container">
    <h2 class="text-center">Cadastro de usuário</h2>
    <form action="salvar_usuario.php" method="post" class="w-50 mx-auto" onsubmit="return validarSenha()">
        <div class="mb-3">
            <label for="nome" class="form-label fw-bold">Nome<span class="text-danger">*</span></label>
            <input type="text" name="nome" placeholder="Digite seu nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">E-mail<span class="text-danger">*</span></label>
            <input type="email" name="email" placeholder="exemplo@email.com" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label fw-bold">Senha<span class="text-danger">*</span></label>
            <input type="password" name="senha" placeholder="Digite sua senha" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="confirmar_senha" class="form-label fw-bold">Confirmar senha<span class="text-danger">*</span></label>
            <input type="password" name="confirmar_senha" placeholder="Confirme sua senha" class="form-control" required>
        </div>
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-dark">Cadastrar</button>
        </div>
    </form>
</div>
<?php include 'includes/footer.php'; ?>