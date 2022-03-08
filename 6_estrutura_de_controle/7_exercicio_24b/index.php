<?php

$peso = 80.50;
$peso1 = 70;

$pesado = 80;
$msg = "Está pesado demais";
$msg1 = "Peso dentro do limite";

if($peso >= $pesado){
  echo "1 - ";
  echo $msg . "<br>";
}else {
  echo "1 - ";
  echo $msg1 . "<br>";
}

if($peso1 >= $pesado){
  echo "2 - ";
  echo $msg . "<br>";
}else {
  echo "2 - ";
  echo $msg1 . "<br>";
}