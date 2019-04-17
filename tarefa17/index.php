<?php 

  //criando variaveis
  $inteiro = 3;
  $decimal = 3.14;
  $strDuplas = "aspas duplas";
  $strSimples = 'aspas simples';
  $strCadeiaSimples = 'Abacate é bom pro cabelo';
  $strCadeiaDuplas = "Meu nome não é douglas";

  //imprimindo variaveis com echo
  echo $inteiro;
  echo "<br>";
  echo $decimal;
  echo "<br>";
  echo $strDuplas;
  echo "<br>";
  echo $strSimples;
  echo "<br>";
  echo $strCadeiaSimples;
  echo "<br>";
  echo $strCadeiaDuplas;

  echo "<hr>";
  //imprimindo variaveis com var_dump
  var_dump($inteiro);
  echo "<br>";
  var_dump($decimal);
  echo "<br>";
  var_dump($strDuplas);
  echo "<br>";
  var_dump($strSimples);
  echo "<br>";
  var_dump($strCadeiaSimples);
  echo "<br>";
  var_dump($strCadeiaDuplas);

  echo "<hr>";
  //alterando valor das variaveis
  $inteiro = "Meu Deus, corre berg";
  $strCadeiaSimples = "007";

  //reimprimindo variaveis
  echo $inteiro;
  echo "<br>";
  echo $strCadeiaSimples;
  echo "<br>";
  var_dump($inteiro);
  echo "<br>";
  var_dump($strCadeiaSimples);
  echo "<hr>";

  //declarando palavras nas variaveis
  $um = "Três";
  $dois = "pratos";
  $tres = "de";
  $quatro = "trigo";
  $cinco = "para";
  $seis = "três";
  $sete = "tigres";
  $oito = "tristes";

  //imprimindo frase concatenada
  echo $um . " " . $dois . " " . $tres . " " . $quatro . " " . $cinco . " " . $seis . " " . $sete . " " . $oito;
  echo "<br>";
  echo "Tinham ". $seis . " " . $dois. " " . $tres . " " . $quatro . " em cima do fogão";
  echo "<hr>";

  //declarando variaveis
  $variable01 = true;
  $variable02 = false;
  $variable03 = 0;
  $variable04 = 1;
  $variable05 = 6;
  $variable06 = '';
  $variable07 = "3";
  $variable08 ="true";
  $variable09 ='false';
  $variable10 = null;
  
  //declarando função
  function tipoDado($varN){
    if ( $varN == true ) {
      echo 'o valor ' . $varN . ' é verdadeiro.';
    } else {
      echo 'o valor ' . $varN . ' é falso.';
    }
  }
  //chamando função
  tipoDado($variable05);
  echo "<hr>";

  //declarando array de animais
  $animais = ["vaca","ganso","gato","girafa","tatu"];
  var_dump($animais);
  echo "<br>";

  //adicionando mais 2 animais ao array
  array_push($animais, "cachorro", "camelo");
  var_dump($animais);
  echo "<br>";

  //função que imprime todos os animais na tela
  function printAnimais($animais) {
    for ($i = 0; $i < count($animais); $i++) {
      //imprimindo primeiro animal
      if ($i == 0) {
        echo "Eu gosto de animais: " . $animais[$i];
        //imprimindo demais animais
      } else {
        echo ", " . $animais[$i];
      }
    }
  }

  //chama função para imprimir animais na tela
  printAnimais($animais);
  echo "<br>";

  //substitui o primeiro animal do array
  $animais[0] = "gambá";
  
  //chama função para imprimir animais na tela
  printAnimais($animais);
  echo "<br>";

  $animais[100] = "porco";
  var_dump($animais);
  echo "<br>";

  $animais[16] = "cavalo";
  var_dump($animais);
  echo "<hr>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  //definindo array associativo de um carro
  $carro = [
    "marca" => "Fiat",
    "modelo" => "Uno",
    "cor" => "Branco",
    "ano" => "2008",
    "placa" => "XJR0852"
  ];

  //acidionando informações ao array associativo
  array_push($carro[0],$carro[0] = "josé");
  array_push($carro[14],$carro[14] = "ituran");
  array_push($carro["apolice"],$carro["apolice"] = "578366-8");
  var_dump($carro);
  echo "<br>";

  //modificando informações do array associativo
  $carro["placa"] = "NJV8632";
  $carro[0] = "mario";
  var_dump($carro);
  echo "<hr>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $numInteiro = 5;
  $numDecimal = 3.8;

  //soma dois valores
  echo $numInteiro + $numDecimal;
  echo "<br>";
  //subtrai dois valores
  echo $numInteiro - $numDecimal;
  echo "<br>";
  //divide dois valores
  echo $numInteiro / $numDecimal;
  echo "<br>";
  //multiplica dois valores
  echo $numInteiro * $numDecimal;
  echo "<br>";

  //módulo de dois valores
  $moduloResult = $numInteiro % $numDecimal;
  echo $moduloResult;
  echo "<hr>";

  //adiciona +1 nas variáveis
  $numInteiro++;
  $numDecimal++;

  echo $numInteiro;
  echo "<br>";
  echo $numDecimal;
  echo "<hr>";

  //adiciona 5 ao numero inteiro e subtrai 0.6 do numero decimal;
  $numInteiro += 5;
  $numDecimal -= 0.6;

  echo $numInteiro;
  echo "<br>";
  echo $numDecimal;
  echo "<br>";

  $resultado = (($numInteiro * 2) + $numDecimal) / ($numInteiro / 2);
  echo $resultado;
  echo "<hr>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  $ola = "Olá";
  $mundo = "mundo!";

  $strConcat = $ola . " " . $mundo;
  echo $strConcat;
  echo "<br>";

  $strConcatPHP = $strConcat . " " . "PHP é o máximo";
  echo $strConcatPHP;

?>

<style>
hr {
  width: 25%;
  margin-left:0;
}
</style>

