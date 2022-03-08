<?php

$idade = 18;
$idade1 = 15;
$idade2 = 22;

$maioridade = 18;
$msg = "Pessoa é maior de idade!";
$msg1 = "Pessoa é menor de idade!";

// Condição verdadeira
if($idade >= $maioridade){ 
  echo "1 - ";
  echo $msg . "<br>"; 
}else {
  echo "1 - ";
  echo $msg1 ."<br>";
}

// Condição false
if($idade1 >= $maioridade) {
  echo "2 - ";
  echo $msg . "<br>"; 
}else {
  echo "2 - ";
  echo $msg1 ."<br>";
}

// Condição verdadeira
if($idade2 >= $maioridade){
  echo "3 - ";
  echo $msg . "<br>"; 
}else {
  echo "3 - ";
  echo $msg1 ."<br>";
}