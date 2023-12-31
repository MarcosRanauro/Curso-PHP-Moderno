<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 06</title>
</head>

<body>
  <?php
  $dividendo = $_GET['dividendo'] ?? 0;
  $divisor = $_GET['divisor'] ?? 0;
  ?>
  <main>
    <h1>Anatomia de uma Divisão</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="dividendo">Dividendo</label>
      <input type="number" name="dividendo" id="dividendo" value="<?= $_GET['dividendo'] ?? 0 ?>">
      <label for="divisor">Divisor</label>
      <input type="number" name="divisor" id="divisor" value="<?= $_GET['divisor'] ?? 0 ?>">
      <input type="submit" value="Analisar">
    </form>
  </main>

  <section>
    <h2>Estrutura da Divisão</h2>
    <?php
    if ($divisor == 0) {
        echo "<h3 style='color: red;'>Não é possível dividir por zero</h3>";
        exit;
    }

    $resultado = intdiv($dividendo, $divisor); // Calcula o resultado da divisão inteira
  $resto = $dividendo % $divisor; // Calcula o resto da divisão

  ?>

    <table class="divisao">
      <tr>
        <td><?= $dividendo ?></td>
        <td><?= $divisor ?></td>
      </tr>
      <tr>
        <td><?= $resto ?></td>
        <td><?= $resultado ?></td>
      </tr>
    </table>
  </section>
</body>

</html>