<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resultado Desafio 03</title>
</head>

<body>
  <header>
    <h1>Resultado do Processamento</h1>
  </header>
  <main>
    <?php
    $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
    $numero = $_GET["numero"];
    $dolar = 4.88;
    $resultado = $numero / $dolar;
    echo "<p>Seus " . numfmt_format_currency($padrao, $numero, "BRL") . " valem " . numfmt_format_currency($padrao, $resultado, "USD") . " dólares</p>";
    echo "<p>Cotação fixa de R$$dolar informada diretamente no código</p>"
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
  </main>
</body>

</html>