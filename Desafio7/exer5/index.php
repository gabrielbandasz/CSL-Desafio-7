<?php require_once 'produto.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h2>Informações do Produto</h2>
    <form method="post">
        <label>Nome: <input type="text" name="nome" required></label><br><br>
        <label>Valor: <input type="number" step="0.01" name="valor" required></label><br><br>
        <label>Quantidade em Estoque: <input type="number" name="quantidade" required></label><br><br>
        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $produto = new Produto(
            $_POST['nome'],
            (float)$_POST['valor'],
            (int)$_POST['quantidade']
        );

        echo "<h3>Resultado:</h3>";
        echo $produto->exibirDetalhes();
    }
    ?>
</body>
</html>
        