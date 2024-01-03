<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 07</title>
</head>
<body>
  <?php
  $salarioMinimo = 1_380.60;
  $salario = $_GET['salario'] ?? $salarioMinimo;
  ?>
  <main>
    <h1>Informe seu Salário</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <input type="number" name="salario" id="salario" step="0.01" required value="<?= $_GET['salario'] ?? $salarioMinimo ?>">
      <p>Considerando o salário mínimo de R$1.380,00</p>
      <button type="submit">Calcular</button>
  </main>

  <section>
    <h2>Resultado Final</h2>
    <?php
      $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
      $quantidadeSalarios = floor($salario / $salarioMinimo);
      $resto = $salario % $salarioMinimo;
      echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha $quantidadeSalarios salários mínimos + " . numfmt_format_currency($padrao, $resto, "BRL") . "</p>";
    ?>
  </section>
</body>
</html>