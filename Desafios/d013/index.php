<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 13</title>
</head>

<body>
  <?php
  $sacar = $_GET['valor'] ?? 0;
  ?>
  <main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="valor">Qual valor você deseja sacar? (R$)*</label>
      <input type="number" name="valor" id="valor" required value="<?= $sacar ?>">
      <span>*Notas disponiveis: R$100, R$50, R$10 e R$5</span>
      <input type="submit" value="Sacar">
  </main>

  <!-- solução 1 -->
  <!-- <section>
    <h2>Saque de <?= $sacar ?> realizado</h2>
    <p>O caixa eletrônico vai te entregar as seguintes notas:</p>

    <?php
    $notas100 = floor($sacar / 100);
    $resto100 = $sacar % 100;
    $notas50 = floor($resto100 / 50);
    $resto50 = $resto100 % 50;
    $notas10 = floor($resto50 / 10);
    $resto10 = $resto50 % 10;
    $notas5 = floor($resto10 / 5);
    $resto5 = $resto10 % 5;

    echo "<ul>
              <li>
                <img class='notas' src='../img/100.jpeg' alt='nota de R$100'>
                x $notas100
              </li>
              <li>
                <img class='notas' src='../img/50.jpeg' alt='nota de R$50'>
                x $notas50
              </li>
              <li>
                <img class='notas' src='../img/10.jpeg' alt='nota de R$10'>
                x $notas10
              </li>
              <li>
                <img class='notas' src='../img/5.jpeg' alt='nota de R$5'>
                x $notas5
              </li>
      </ul>";

    ?>
  </section> -->

  <!-- solução 2 -->
  <section>
    <?php
    print "Ola mundo \u{1F30E}";

    $notasDisponiveis = [100, 50, 10, 5];
    $notas = [
      100 => '100.jpeg',
      50 => '50.jpeg',
      10 => '10.jpeg',
      5 => '5.jpeg'
    ];

    $mensagem = '';

    if ($sacar % min($notasDisponiveis) !== 0) {
      $mensagem = "<p>O caixa não possui notas disponíveis para o valor solicitado.</p>";
    } else {
      $mensagem = "<h2>Saque de $sacar realizado</h2>
                     <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
                     <ul>";

      foreach ($notas as $valorNota => $imagem) {
        $quantidadeNotas = floor($sacar / $valorNota);
        $sacar %= $valorNota;

        if ($quantidadeNotas > 0) {
          $mensagem .= "<li>
                                <img class='notas' src='../img/$imagem' alt='nota de R$$valorNota'>
                                x $quantidadeNotas
                              </li>";
        }
      }

      $mensagem .= "</ul>";
    }

    echo $mensagem;
    ?>
  </section>
</body>

</html>