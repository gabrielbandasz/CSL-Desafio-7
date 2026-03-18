<?php require_once 'carro.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
</head>
<body>
   <h1>Informações do Carro</h1>
    <form method="post">
          <label>Modelo: <input type="text" name="modelo" required></label><br><br>
          <label>Combustível: 
                <select name="combustivel" required>
                 <option value="gasolina">Gasolina</option>
                 <option value="etanol">Etanol</option>
                </select>
          </label><br><br>
          <label>Tanque cheio (litros): <input type="number" step="0.01" name="tanque" required></label><br><br>
          <label>Consumo (km/l): <input type="number" step="0.01" name="consumo" required></label><br><br>
          <button type="submit">Calcular</button>
     </form>
    
     <?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $carro = new carro(
                $_POST['modelo'],
                $_POST['combustivel'],
                (float)$_POST['tanque'],
                (float)$_POST['consumo']
          );
    
          echo "<h3>Resultado:</h3>";
          echo $carro->exibirDetalhes();
     }
     ?>
</body>
</html>
