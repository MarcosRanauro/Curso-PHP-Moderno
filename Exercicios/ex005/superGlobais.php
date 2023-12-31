<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex 005</title>
</head>

<body>
  <main>
    <pre>
      <?php
      setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

      session_start();
      $_SESSION["nome"] = "João";

      echo "<h1>Super Globais GET</h1>";
      var_dump($_GET);

      echo "<h1>Super Globais POST</h1>";
      var_dump($_POST);

      echo "<h1>Super Globais REQUEST</h1>";
      var_dump($_REQUEST);

      echo "<h1>Super Globais COOKIE</h1>";
      var_dump($_COOKIE);

      echo "<h1>Super Globais SESSION</h1>";
      var_dump($_SESSION);

      echo "<h1>Super Globais ENV</h1>";
      var_dump($_ENV);
      foreach (getenv() as $c => $v) {
        echo "$c = $v <br>";
      }

      echo "<h1>Super Globais SERVER</h1>";
      var_dump($_SERVER);

      echo "<h1>Super Globais GLOBALS</h1>";
      var_dump($GLOBALS);
      ?>
    </pre>
  </main>
</body>

</html>