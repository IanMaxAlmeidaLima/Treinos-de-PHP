<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta - Atividade 001</title>
</head>
<body>
    <div class="container">
        <?php
            if(isset($_GET['num'])){
                $number = $_GET['num'];
                $previous = $number - 1;
                $next = $number + 1;

                echo "<h2>Número informado: $number</h2>";
                echo "<p>Número anterior: $previous</p>";
                echo "<p>Número posterior: $next</p>";
            } else {
                echo "<p>Nenhum número foi informado.</p>";
            }
        ?>
        <button onclick="window.history.back(-1)">Voltar</button>
    </div>
</body>
</html>