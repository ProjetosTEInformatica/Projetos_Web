<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Página para treinar PHP com HTML">
        <meta name="keywords" content="PHP, HTML, Linguagem de Programação, Introdução, Página">
        <meta name="author" content="Erick Padilha::sv77@calabria.com.br">
        <title>Título</title>
    </head>
    <body>
        <h2>Mensagem baseada na hora atual</h2>

        <?php
            date_default_timezone_set("America/Sao_Paulo");
            $hora = date("H");

            if ($hora < 12) {
                echo "<p>Bom dia!</p>";
            } elseif ($hora < 18) {
                echo "<p>Boa tarde!</p>";
            } else {
                echo "<p>Boa noite!</p>";
            }
        ?>
    </body>
</html>