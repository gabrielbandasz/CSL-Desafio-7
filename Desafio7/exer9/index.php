<?php require_once 'pessoa.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>

    <form method="post">
        <label>Nome: <input type="text" name="nome" required></label><br><br>
        <label>Peso (kg): <input type="number" step="0.01" name="peso" required></label><br><br>
        <label>Altura (m): <input type="number" step="0.01" name="altura" required></label><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pessoa = new Pessoa(
                $_POST['nome'],
                (float)$_POST['peso'],
                (float)$_POST['altura']
            );

            echo "<h3>Resultado:</h3>";
            echo $pessoa->exibirDetalhes();
        }
    ?>
</body>
</html>