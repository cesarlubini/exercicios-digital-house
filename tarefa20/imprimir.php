<?php 

  foreach ($_REQUEST as $key => $value) {
    echo $key . ": " . $value . "<br>";
  }

  echo "<hr>";
////////////////////////////////////////////////////

  foreach (getAllHeaders() as $key => $value) {
    echo $key . ": " . $value . "<br>";
  }
  
  echo "<hr>";
////////////////////////////////////////////////////

  var_dump($_SERVER);
  echo "<hr>";
  var_dump($_FILES);
  echo "<hr>";
  var_dump($_REQUEST);
  echo "<hr>";
  var_dump($_SESSION);
  echo "<hr>";
  var_dump($_ENV);
  echo "<hr>";
  var_dump($_COOKIE);
  echo "<hr>";
  var_dump($GLOBAL);

?>

<style>
  hr {
    width: 25%;
    margin-left:0;
  }
</style>