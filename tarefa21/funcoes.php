<?php 
  $numeroMagico = 97;

  function maior($num1,$num2,$num3 = false) {
    global $numeroMagico, $funcoesExecutadas;

    $funcoesExecutadas++;

    if (!$num3) {
      $num3 = $numeroMagico;
    }

    if ($num1 > $num2 && $num1 > $num3) {
      $numMaior = $num1;
    } else if ($num2 > $num1 && $num2 > $num3) {
      $numMaior = $num2;
    } else {
      $numMaior = $num3;
    }
    return $numMaior;
  }

  echo maior(27,14);

  echo "<hr>";
//////////////////////////////////////////////////

  function tabela($base, $limite = false) {
    global $numeroMagico, $funcoesExecutadas;

    $funcoesExecutadas++;

    $arrayNumeros = [];

    if (!$limite) {
      $limite = $numeroMagico;
    }

    for ($i = $base; $i <= $limite; $i++) {
      array_push($arrayNumeros, $i);
    }

    return $arrayNumeros;
  }

  foreach (tabela(15) as $value) {
    echo $value . " ";
  }

  echo "<hr>";
?>