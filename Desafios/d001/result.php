<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resultado Desafio 01</title>
</head>
<body>
<header>
    <h1>Resultado do Processamento</h1>
  </header>
  <main>
    <?php
      var_dump($_GET);
    $numero = $_GET["numero"] ?? 0;
    $ant = $numero - 1;
    $suc = $numero + 1;
    echo "<p>O número informado foi $numero</p>";
    echo "<p>O antecessor é $ant</p>";
    echo "<p>O sucessor é $suc</p>";
    ?>
    <button onclick="javascript:window.location.href='index.html'">Voltar</button>
  </main>
</body>
</html>