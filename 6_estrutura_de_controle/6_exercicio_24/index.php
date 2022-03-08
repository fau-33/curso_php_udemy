<?php

$nome = "Flávio";
$idade = 39;
$logico = true;

if(is_int($idade)){
  echo "É um inteiro! <br>";
}else {
  echo "Não é um inteiro! <br>";
}

if(is_int($nome)){
  echo "É um inteiro! 2<br>";
}else {
  echo "Não é um inteiro! 2<br>";
}

if(is_int($logico)){
  echo "É um inteiro! 3<br>";
}else {
  echo "Não é um inteiro! 3<br>";
}