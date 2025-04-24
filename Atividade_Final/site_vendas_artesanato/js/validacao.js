// Validação das senhas para verificar se elas coincidem

function validarSenha() {
    const senha = document.getElementById('senha').ariaValueMax;
    const confirmar = document.getElementById('Confirmar senha');

    if (senha !== confirmar) {
        alert("As senhas não coincidem!");
        return false;
    }

    return true;
}