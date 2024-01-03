<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 08</title>
</head>

<body>
  <?php
  $numero = $_GET['numero'] ?? 0;
  ?>
  <main>
    <h1>Informe um número</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <input type="number" name="numero" id="numero" required value="<?= $_GET['numero'] ?? 0 ?>">
      <button type="submit">Calcular Raízes</button>
  </main>

  <section>
    <h2>Resultado Final</h2>
    <?php
    echo "Analisando o número $numero, temos: <br>";

    $raiz = sqrt($numero);
    $raizcubica = pow($numero, 1 / 3);
    
    echo "<ul>
              <li>A sua raiz quadrada é " . number_format($raiz, 3, ",", ".") . "</li>
              <li>A sua raiz cúbica é " . number_format($raizcubica, 3, ",", ".") . "</li>
      </ul>"
    ?>
  </section>
</body>

</html>