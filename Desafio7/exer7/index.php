<?php require_once 'viagem.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações da Viagem</title>
</head>
<body>
    <h1>Informações da Viagem</h1>
    <form method="post">
        <label>Origem: <input type="text" name="origem" required></label><br><br>
        <label>Destino: <input type="text" name="destino" required></label><br><br>
        <label>Distância (km): <input type="number" step="0.01" name="distancia" required></label><br><br>
        <label>Tempo Estimado (horas): <input type="number" step="0.01" name="tempoEstimado" required></label><br><br>
        <label>Tipo de Veículo:
            <select name="tipoVeiculo">
                <option value="carro">Carro</option>
                <option value="moto">Moto</option>
            </select>
        </label><br><br>
        <button type="submit">Exibir Detalhes</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $viagem = new Viagem(
                $_POST['origem'],
                $_POST['destino'],
                (float)$_POST['distancia'],
                (float)$_POST['tempoEstimado'],
                $_POST['tipoVeiculo']
            );

            echo "<h3>Resultado:</h3>";
            echo $viagem->exibirDetalhes();
        }
    ?>
</body>
</html>