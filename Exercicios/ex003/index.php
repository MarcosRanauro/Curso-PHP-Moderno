<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos Primitivos em PHP</title>
</head>
<body>
  <h1>Testes de tipos primitivos</h1>
  <?php
  // 0x = hexadecimal 0b = binário 0 = octal
    $num = 0x1A;
  echo "O valor da variel é $num <br>";
  var_dump($num);

  $num2 = 3e2;
  echo "O valor da variel é $num2 <br>";
  var_dump($num2);

  $n = 4;
  $string = "4";
  $bool = true;
  $float = 4.5;
  var_dump($float);
  var_dump($bool);
  var_dump($n);
  var_dump($string);

  $vetor = array(1,2,3,4,5);
  var_dump($vetor);

  class Pessoa
  {
  private string $nome;
  }
  $pessoa = new Pessoa();
  var_dump($pessoa);
  ?>
</body>
</html>