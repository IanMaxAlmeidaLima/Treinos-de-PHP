<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta - Atividade 001</title>
</head>
<body>
    <div class="container">
        <?php
            if(isset($_GET['numberInput'])){
                $number = $_GET['numberInput'];
                $previous = $number - 1;
                $next = $number + 1;

                echo "<h2>Número informado: $number</h2>";
                echo "<p>Número anterior: $previous</p>";
                echo "<p>Número posterior: $next</p>";
            } else {
                echo "<p>Nenhum número foi informado.</p>";
            }
        ?>
    </div>
</body>
</html>