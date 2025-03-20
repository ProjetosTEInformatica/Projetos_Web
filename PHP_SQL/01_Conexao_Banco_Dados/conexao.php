<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "meu_banco";

// Criando conexão
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// Verificando conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
echo "Conexão bem-sucedida!";
?>
