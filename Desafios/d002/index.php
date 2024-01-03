<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link 
    rel="stylesheet" 
    href="style.css">
  <title>Desafio 02</title>
</head>
<body>
  <header>
    <h1>Trabalhando com números aleatórios</h1>
  </header>
  <section>
    <?php 
      echo "<p>Gerando um número aleatório entre 0 e 100</p>";
      $num = rand(0, 100);
      $num2 = mt_rand(100, 500);
      $num3 = random_int(0, 1000);
      echo "<p>O número gerado foi $num</p>";
      echo "<p>O número gerado foi $num2</p>";
      echo "<p>O número gerado foi $num3</p>";
    ?>
    <button onclick="window.location.reload()">&#x1F504 Gerar outro número</button>
  </section>
</body>
</html>