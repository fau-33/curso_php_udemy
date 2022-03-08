<?php

$numero1 = 5;
$numero2 = 2;
$numeroLogico = "Se for maior! vai entrar no if";

// Condição verdadeira
if($numero1 > $numero2) {
  echo $numeroLogico . "<br>";
}

$nome = "Matheus";
$nome_1 = "Pedro";

// Condição verdadeira
if($nome != $nome_1) {  
  echo "Se o nome for diferente! vai entrar no if 2 <br>";
}

$numero2 = 12;
$numero4 = 11;
$numeroLogico1 = "Se o numero for menor ou igual! vai entrar no if 3 <br>";

// Condição false
if($numero2 <= $numero4) {
  echo $numeroLogico1 . "<br>";
}

