<?php
$funcoesExecutadas = 0;

INCLUDE "funcoes.php";
INCLUDE "superficie.php";

echo "<hr>";

function maiorCirculo ($num1,$num2,$num3) {
  $maiorCirculo = maior($num1,$num2,$num3);
  return $resultado = circulo($maiorCirculo);
}

echo maiorCirculo(2,1,6) . "<br>";
echo "<hr>";
echo "Número de funções executadas: " . $funcoesExecutadas;

  echo "<hr>";
/////////////////////////////////////////////////////////

echo strpos("Adoro php, Eu também adoro php!", "php");

  echo "<hr>";
/////////////////////////////////////////////////////////



?>