<?php require_once 'calculadoraFinanceira.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Financeira</title>
</head>
<body>
    <h1>Calculadora Financeira</h1>

    <form method="post">
        <label>Valor da Compra (R$): <input type="number" step="0.01" name="valor" required></label><br><br>
        <label>Número de Parcelas: <input type="number" name="parcelas" min="1" required></label><br><br>
        <label>Taxa de Juros Mensal (%): <input type="number" step="0.01" name="taxaJuros" required></label><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $calculadora = new CalculadoraFinanceira(
                (float)$_POST['valor'],
                (int)$_POST['parcelas'],
                (float)$_POST['taxaJuros']
            );

            echo "<h3>Resultado:</h3>";
            echo $calculadora->exibirDetalhes();
        }
    ?>
</body>
</html>