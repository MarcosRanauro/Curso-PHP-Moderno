<?php

$inicio = date('m-d-Y', strtotime('-7 days'));
$fim = date('m-d-Y');

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$response = file_get_contents($url);
$data = json_decode($response, true);
// var_dump($data);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resultado ex04</title>
</head>

<body>
  <header>
    <h1>Resultado do Processamento</h1>
  </header>
  <main>
    <?php
    $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
// var_dump($_GET);
$numero = $_GET["numero"];
$dolar = $data['value'][0]['cotacaoCompra'];
// print_r($dolar);
$resultado = $numero / $dolar;
echo "<p>Seus " . numfmt_format_currency($padrao, $numero, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $resultado, "USD") . "</p>";
echo "<p>Cotação do dólar: " . numfmt_format_currency($padrao, $dolar, "BRL") . "</p>";
echo "<p>Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong></p>";
?>
    <button onclick="javascript:history.go(-1)"">Voltar</button>
  </main>
</body>
</html>