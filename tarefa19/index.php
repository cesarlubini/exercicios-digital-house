<?php 

  $numRand = mt_rand(1,100);

  for ($i = 1; $i <= $numRand; $i++) {
    echo $i . " ";
  }

  echo "<hr>";
////////////////////////////////////////////////////

  for ($i = 1; $i <= 10; $i++) {
    echo "2x$i = " . 2*$i . "<br>";
  }

  echo "<hr>";
////////////////////////////////////////////////////

  $cara = 0;
  $quantJogadas = 0;

  while ($cara < 5 ) {
    $moeda = mt_rand(0,1);
    $quantJogadas++;
    if ($moeda == 1) {
      $cara++;
    }
  }
  echo "A moeda foi lançada ". $quantJogadas . " vezes <br>";


  $moedaCara = 0;
  $numJogadas = 0;

  do {
    $lancMoeda = mt_rand(0,1);
    $numJogadas++;
    if ($lancMoeda == 1) {
      $moedaCara++;
    }
  } while ($moedaCara == 1);
  echo "A moeda foi lançada ". $numJogadas . " vezes <br>";

  echo "<hr>";
////////////////////////////////////////////////////

  $nome = ["Aline", "Cesar", "Carlos", "Magda", "Antônio"];

  //percorrendo e imprimindo o array com for
  for ($i = 0; $i < count($nome); $i++) {
    echo $nome[$i] . " ";
  }
  echo "<br>";

  //percorrendo e imprimindo o array com while
  $iWhile = 0;
  while ($iWhile < count($nome)) {
    echo $nome[$iWhile] . " ";
    $iWhile++;
 }
 echo "<br>";

  //percorrendo e imprimindo o array com do/while
  $iDoWhile = 0;
  do {
    echo $nome[$iDoWhile] . " ";
    $iDoWhile++;
  } while ($iDoWhile < count($nome));

  echo "<hr>";
////////////////////////////////////////////////////

  //criando um array com 10 numeros alatórios
  for ($i = 0; $i < 10; $i++) {
    $numerosRand[$i] = mt_rand(0,10); 
  }

  //percorrendo e imprimindo o array com for
  for ($i = 0; $i < count($numerosRand); $i++) {
    if ($numerosRand[$i] == 5) {
      echo "<br>";
      echo "Encontramos um número 5!";
      break;
    } else {
      echo $numerosRand[$i] . " ";
    }
  }
  echo "<br>";

  //percorrendo e imprimindo o array com while
  $iWhileCont = 0;
  while ($iWhileCont < count($numerosRand)) {
    if ($numerosRand[$iWhileCont] == 5) {
      echo "<br>";
      echo "Encontramos um número 5!";
      break;
    } else {
      echo $numerosRand[$iWhileCont] . " ";
    }
    $iWhileCont++;
  }
  echo "<br>";

  //percorrendo e imprimindo o array com do/while
  $iDoWhileCont = 0;
  do {
    if ($numerosRand[$iDoWhileCont] == 5) {
      echo "<br>";
      echo "Encontramos um número 5!";
      break;
    } else {
      echo $numerosRand[$iDoWhileCont] . " ";
    }
    $iDoWhileCont++;
  } while ($iDoWhileCont < count($numerosRand));
  echo "<hr>";
////////////////////////////////////////////////////

  function printLetters() {
    $rangeLetters = range("a","o");
    for ($i = 0; $i < count($rangeLetters); $i++) {
      echo "Na posição $i, está o valor: $rangeLetters[$i] <br>";
    }
  }

  printLetters();

  echo "<hr>";
////////////////////////////////////////////////////

  $mascote = [
    "animal" => "gato",
    "idade" => "4",
    "altura" => "0,30",
    "nome" => "Nalla"
  ];

  foreach ($mascote as $key => $value) {
    echo $key . ": " . $value . "<br>";
  }

  echo "<hr>";
////////////////////////////////////////////////////

  $ceu = array(
    "Itália"=>"Roma",
    "Luxemburgo"=>"Luxemburgo",
    "Bélgica"=> "Bruxelas",
    "Dinamarca"=>"Copenhagen",
    "Finlândia"=>"Helsinki",
    "França" => "Paris",
    "Eslováquia"=>"Bratislava",
    "Eslovênia"=>"Liubliana",
    "Alemanha" => "Berlim",
    "Grécia" => "Atenas",
    "Irlanda"=>"Dublin",
    "Holanda"=>"Amsterdã",
    "Portugal"=>"Lisboa",
    "Espanha"=>"Madri",
    "Suécia"=>"Estocolmo",
    "Reino Unido"=>"Londres",
    "Chipre"=>"Nicósia",
    "Lituânia"=>"Vilnius",
    "RepúblicaTcheca"=>"Praga",
    "Estônia"=>"Tallinn",
    "Hungria"=>"Budapeste",
    "Letônia"=>"Riga",
    "Malta"=>"Valletta",
    "Austria" => "Viena",
    "Polônia"=>"Varsóvia"
  );

  ksort($ceu);

  foreach ($ceu as $pais => $capital) {
    echo "A capital da $pais é $capital <br>";
  }

  echo "<hr>";
////////////////////////////////////////////////////

  $ceu = [
    "Argentina" => [
      "naAmerica" => true,
      "cidades" => [
        "Buenos Aires",
        "Córdoba",
        "SantaFé"
      ],
    ],
    "Brasil" => [
      "naAmerica" => true,
      "cidades" => [
        "Brasília",
        "Rio de Janeiro",
        "São Paulo"
      ]
    ],
    "Colômbia" => [
      "naAmerica" => true,
      "cidades" => [
        "Cartagena",
        "Bogotá",
        "Barranquilla"
      ]
    ],
    "França" => [
      "naAmerica" => false,
      "cidades" => [
        "Paris",
        "Nantes",
        "Lyon"
      ]
    ],
    "Itália" => [
      "naAmerica" => false,
      "cidades" => [
        "Roma",
        "Milão",
        "Veneza"
      ]
    ],
    "Alemanha" => [
      "naAmerica" => false,
      "cidades" => [
        "Munique",
        "Berlim",
        "Frankfurt"
      ]
    ]
  ];

  foreach ($ceu as $pais => $array) {
    if ($ceu[$pais]["naAmerica"]) {

      echo "As cidades da $pais são: <br>";
      echo "<ul>";
      foreach ($ceu[$pais]["cidades"] as $cidades) {
        echo  "<li>$cidades</li>";
      }
      echo "</ul>";
    }
  }
?>

<style>
  hr {
    width: 25%;
    margin-left:0;
  }
</style>