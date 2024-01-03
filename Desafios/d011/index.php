<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 11</title>
  <style>
    input[type="range"] {
      width: 100%;
    }
  </style>
</head>

<body>
  <?php
  $spanRange = "<span id='porcentagemExibida'>0</span>%";
  $preco = $_GET['preco'] ?? 0;
  $percentual = $_GET['percentual'] ?? 0;
  $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
  ?>
  <main>
    <h1>Reajustador de Preços</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="preco">Preço do Produto (R$)</label>
      <input type="number" name="preco" id="preco" step="0.01" required value="<?= $preco ?>">
      <label for="percentual">Qual será o percentual de reajuste? (<?= $spanRange ?>)</label>
      <input type="range" name="percentual" id="percentual" min="0" max="100" value="<?= $percentual ?>" oninput="atualizaPorcentagem()">
      <button type="submit">Reajustar</button>
  </main>
  <section>
    <h2>Resultado do Reajuste</h2>
    <?php
    $precoFormatado = numfmt_format_currency($padrao, $preco, 'BRL');
    $valorReajustado = $preco + ($preco * ($percentual / 100));
    $valorReajustadoFormatado = numfmt_format_currency($padrao, $valorReajustado, 'BRL');

    echo "<p>O produto que custava $precoFormatado, com $percentual% de aumento vai passar a custar $valorReajustadoFormatado a partir de agora.</p>";
    ?>
  </section>

</body>
<script>
  // minha solução
  // const porcentagemRange = document.getElementById('percentual');
  // const porcentagemExibida = document.getElementById('porcentagemExibida');

  // porcentagemRange.addEventListener('input', () => {
  //   const valorPorcentagem = porcentagemRange.value;
  //   porcentagemExibida.textContent = `${valorPorcentagem}%`;
  // })

  // solução do Guanabara
  function atualizaPorcentagem() {
    porcentagemExibida.innerText = percentual.value;
  }
</script>

</html>