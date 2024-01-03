<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 12</title>
</head>
<body>
  <?php 
    $segundos = $_GET['segundos'] ?? 0;
  ?>
  <main>
    <h1>Calculadora de Tempo</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="segundos" name="segundos">Qual é o total de segundos?</label>
      <input type="number" name="segundos" id="segundos" required value="<?= $segundos ?>">
      <button type="submit">Calcular</button>
    </form>
  </main>

  <section>
    <h2>Totalizando tudo</h2>
    <p>
      <?php 
        echo "<p>Analisando o valor que você digitou, " . number_format($segundos, 0, ",", ".") . " de segundos equivalem a um total de:</p>";

        $semanas = floor($segundos / 604800);
        $dias = floor(($segundos % 604800) / 86400);
        $horas = floor((($segundos % 604800) % 86400) / 3600);
        $minutos = floor(((($segundos % 604800) % 86400) % 3600) / 60);
        $segundos = floor(((($segundos % 604800) % 86400) % 3600) % 60);

        echo "<ul>
                <li>$semanas semanas</li>
                <li>$dias dias</li>
                <li>$horas horas</li>
                <li>$minutos minutos</li>
                <li>$segundos segundos</li>
              </ul>"
      ?>
  </section>
</body>
</html>