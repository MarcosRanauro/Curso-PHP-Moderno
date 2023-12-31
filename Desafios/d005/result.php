<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resultado Desafio 05</title>
</head>

<body>
  <header>
    <h1>Resultado do Processamento</h1>
  </header>
  <main>
    <?php
    // var_dump($_GET);
    $numero = $_GET["numero"];
    echo "<p>Analisando o número " . number_format($numero, 3, ",", ".") . " informado pelo usuário</p>";

    $inteiro = intval($numero);
    $fracionaria = fmod($numero, 1);

    echo "<ul> 
              <li>A parte inteira do número é " . number_format($inteiro, 0, ",", ".") . "</li>
              <li>A parte fracionária do número é " . number_format($fracionaria, 3, ",", ".") . "</li>
            </ul>";
    ?>
    <button onclick="javascript:history.go(-1)"">Voltar</button>
  </main>
</body>
</html>