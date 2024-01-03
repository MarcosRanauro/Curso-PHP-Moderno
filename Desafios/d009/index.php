<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 09</title>
</head>

<body>
  <?php
  $v1 = $_GET['v1'] ?? 0;
  $v2 = $_GET['v2'] ?? 0;
  $peso1 = $_GET['peso1'] ?? 0;
  $peso2 = $_GET['peso2'] ?? 0;
  ?>
  <main>
    <h1>Médias Aritméticas</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">Primeira Nota</label>
      <input type="number" name="v1" id="v1" required value="<?= $_GET['v1'] ?? 0 ?>">
      <label for="peso1">Primeiro Peso</label>
      <input type="number" name="peso1" id="peso1" required value="<?= $_GET['peso1'] ?? 0 ?>">
      <label for="v2">Segunda Nota</label>
      <input type="number" name="v2" id="v2" required value="<?= $_GET['v2'] ?? 0 ?>">
      <label for="peso2">Segundo Peso</label>
      <input type="number" name="peso2" id="peso2" required value="<?= $_GET['peso2'] ?? 0 ?>">
      <button type="submit">Calcular Médias</button>
    </form>
  </main>

  <section>
    <h2>Cálculo das Médias</h2>
    <?php
    $mediaSimples = number_format(($v1 + $v2) / 2, 2, ',', '.');
    $mediaPonderada = number_format(($v1 * $peso1 + $v2 * $peso2) / ($peso1 + $peso2), 2, ',', '.');

    echo "<p>Analisando os valores $v1 e $v2</p>";
    echo "<ul>
              <li>A média Aritmética Simples entre os valores é igual a $mediaSimples</li>
              <li>A média Ponderada entre $v1 com peso $peso1 e $v2 com peso $peso2 é igual a $mediaPonderada</li>
      </ul>"
    ?>
  </section>
</body>

</html>