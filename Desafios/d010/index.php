<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 10</title>
</head>

<body>
  <?php
  $atual = date('Y');
  $nascimento = $_GET['nascimento'] ?? 2000;
  $ano = $_GET['ano'] ?? $atual;
  ?>
  <main>
    <h1>Calculando a sua Idade</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="ano">Em que ano você nasceu?</label>
      <input type="number" name="nascimento" id="nascimento" required value="<?= $nascimento ?>">
      <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em <?= $atual ?>)</label>
      <input type="number" name="ano" id="ano" required value="<?= $atual ?>">
      <button type="submit">Calcular Idade</button>
  </main>

  <section>
    <h2>Resultado</h2>
    <?php
    $idade = $ano - $nascimento;

    echo $nascimento > $atual ? "<p>O ano de nascimento não pode ser maior que o ano atual!</p>" : '';
    echo $idade < 0 ? "<p>O ano atual não pode ser menor que o ano de nascimento!</p>" : '';
    echo $idade > 0 ? "<p>Quem nasceu em $nascimento vai ter $idade anos em  $ano </p>" : '';
    ?>
  </section>
</body>

</html>