<?php

$numero1 = 100;
$numero2 = 10;
$nome = "Carro";



if(is_int($numero1) || is_float($numero1)) {
  $multi = $numero1 * 2;

  if($multi > 100) {  

    echo "O número é maior que 100 <br>";
  }else {

    echo "Esse não é maior que 100 <br>";
  }
}else {

  echo "Não é um numero <br>";
}

if(is_int($numero2) || is_float($numero2)) {
  $multi = $numero2 * 2;

  if($multi > 100) {  

    echo "O número é maior que 100 <br>";
  }else {

    echo "Esse não é maior que 100 <br>";
  }
}else {
  
  echo "Não é um numero <br>";
}

if(is_int($nome) || is_float($nome)) {
  $multi = $nome * 2;

  if($multi > 100) {  

    echo "O número é maior que 100 <br>";
  }else {

    echo "Esse não é maior que 100 <br>";
  }
}else {
  
  echo "Não é um numero <br>";
}