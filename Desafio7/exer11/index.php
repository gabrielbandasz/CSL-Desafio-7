<?php require_once 'calculadora_geometrica.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Hotel</title>
</head>
<body>
    <h1>Reserva de Hotel</h1>

    <form method="post">
        <label>Nome do Hóspede: <input type="text" name="nomeHospede" required></label><br><br>
        <label>Número de Noites: <input type="number" name="noites" min="1" required></label><br><br>
        <label>Tipo de Quarto:
            <select name="tipoQuarto">
                <option value="simples">Simples – R$ 120,00/noite</option>
                <option value="luxo">Luxo – R$ 200,00/noite</option>
                <option value="suite">Suíte – R$ 350,00/noite</option>
            </select>
        </label><br><br>
        <button type="submit">Calcular Reserva</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $reserva = new ReservaHotel(
                $_POST['nomeHospede'],
                (int)$_POST['noites'],
                $_POST['tipoQuarto']
            );

            echo "<h3>Resultado:</h3>";
            echo $reserva->exibirDetalhes();
        }
    ?>
</body>
</html>