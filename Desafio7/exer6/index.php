<?php require_once 'conversorMoeda.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Moeda</title>
</head>
<body>
    <h2>Conversor de Moeda</h2>
    <form method="post">
        <label>Valor: <input type="number" step="0.01" name="valor" required></label><br><br>
        <label>Moeda de Origem: 
            <select name="moedaOrigem" required>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="BRL">BRL</option>
            </select>
        </label><br><br>
        <label>Moeda de Destino: 
            <select name="moedaDestino" required>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="BRL">BRL</option>
            </select>
        </label><br><br>
        <button type="submit">Converter</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conversor = new conversorMoeda(
            (float)$_POST['valor'],
            $_POST['moedaOrigem'],
            $_POST['moedaDestino']
        );

        echo "<h3>Resultado:</h3>";
        echo $conversor->exibirDetalhes();
    }
    ?>
</body>
</html>