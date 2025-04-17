<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        $linha = "$nome|$email|$mensagem\n";
        file_put_contents('dados.txt', $linha, FILE_APPEND);
        header("Location: tabela.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Página com um formulário que cadastra as informações e devolve em uma tabela">
        <meta name="keywords" content="PHP, CSS, HTML, Bootstrap, Formulário, Tabela">
        <meta name="author" content="Erick Padilha::sv77@calabria.com.br">
        <title>Formulário de cadastro simples</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    </head>
    <body class="bg-light">
        <div class="container mt-5">
            <div class="card shadow">
                <div class="card-body">
                    <h1 class="card-title mb-4 text-primary">Cadastro</h1>
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem:</label>
                            <textarea name="mensagem" id="mensagem" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-sucess">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>