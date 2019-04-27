<?php 

  function triangulo($lado,$altura) {
    global $funcoesExecutadas;

    $funcoesExecutadas++;

    $resultado =  "A área do triângulo é: " . ($lado * $altura) / 2;
    return $resultado;
  }

  echo triangulo(4,4);

  echo "<br>";

  function retangulo($lado,$altura) {
    global $funcoesExecutadas;

    $funcoesExecutadas++;

    $resultado = "A área do retângulo é: " . $lado * $altura;
    return $resultado;
  }

  echo retangulo(4,6);

  echo "<br>";

  function quadrado($lado) {
    global $funcoesExecutadas;

    $funcoesExecutadas++;

    $resultado = "A área do quadrado é: " . $lado * 2;
    return $resultado;
  }

  echo quadrado(4);

  echo "<br>";

  function circulo($raio) {
    global $funcoesExecutadas;

    $funcoesExecutadas++;
    
    $resultado = "A área do circulo é: " . pi() * pow($raio, 2);
    return $resultado;
  }

  echo circulo(5);
?>