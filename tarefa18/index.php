<?php 

  $primeiroNum = 8;
  $segundoNum = 14;

  if ($primeiroNum > $segundoNum) {
    echo "O maior número é " . $primeiroNum;
  } else {
    echo "O maior número é " . $segundoNum;
  }
  echo "<hr>";

/////////////////////////////////////////////////

  $numAleatorio = mt_rand(1,5);
  if ($numAleatorio == 3 || $numAleatorio == 5) {
    echo $numAleatorio;
    echo "<br>";
  }

  if ($numAleatorio != 3) {
    echo "o numero não é 3";
  } else {
    echo $numAleatorio;
  }

  echo "<hr>";
/////////////////////////////////////////////////

  $numRand = mt_rand(1,100);

  if ($numRand < 50) {
    echo "O número é menor que 50";
  } else if ($numRand > 50) {
    echo "O número é maior que 50";
  } else {
    echo "o número é igual a 50";
  }

  echo "<br>";

  if ($numRand > 50 && $numRand % 2 == 0 || $numRand == 0) {
    echo "O número cumpre a condição";
  } else {
    echo "O número não cumpre a condição";
  }

  echo "<hr>";
/////////////////////////////////////////////////

  $idade = 19;
  $casado = true;
  $sexo = "Outro";

  if ($idade > 18 && !$casado || $sexo == "Outro") {
    echo "Boas-vindas";
  }

  echo "<hr>";
/////////////////////////////////////////////////

  $quantidadeDeAlunos = "1";

  if ($quantidadeDeAlunos) {
    echo "true";
  } else {
    echo "false";
  }

  echo "<br>";

  if ($quantidadeDeAlunos == 1) {
    echo "true";
  } else {
    echo "false";
  }


  echo "<hr>";
/////////////////////////////////////////////////

 $numero = 8;
 echo $numero % 2 == 0 ? "O número é par" : "O número é impar";

 echo "<hr>";
/////////////////////////////////////////////////

 $i = mt_rand(1,5);

 switch ($i) {
   case 1:
    echo "i é igual a 1";
    break;
   case 2:
    echo "i é igual a 2";
    break;
   case 3:
    echo "Não é igual a 1 ou 2";
    break;
   case 4:
    echo "Não é igual a 1 ou 2";
    break;
   case 5:
    echo "Não é igual a 1 ou 2";
    break;
 }

 echo "<hr>";
/////////////////////////////////////////////////

 $x = mt_rand(1,100);
 $y = mt_rand(1,100);

 if ($x > $y) {
   echo "\$x";
 } else if ($x < $y) {
   echo "\$y";
 } else {
   echo "\$x e \$y são iguais";
 }
?>

<style>
  hr {
    width: 25%;
    margin-left:0;
  }
</style>