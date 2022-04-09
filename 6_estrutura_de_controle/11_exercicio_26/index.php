<?php

$velocidade = 35;
$velocidade_maxima = 40;

if($velocidade < $velocidade_maxima){
  echo "O motorista está na velocidade correta <br>";
}else if ($velocidade == 40){
  echo "Motorista tomar cuidado! Velocidade permitida! <br>";
}else {
  echo "Motorista será multado! Velocidade acima do permitido! <br>";
}

$velocidade = 40;

if($velocidade < $velocidade_maxima){
  echo "O motorista está na velocidade correta <br>";
}else if ($velocidade == 40){
  echo "Motorista tomar cuidado! Velocidade permitida! <br>";
}else {
  echo "Motorista será multado! Velocidade acima do permitido! <br>";
}

$velocidade = 45;

if($velocidade < $velocidade_maxima){
  echo "O motorista está na velocidade correta <br>";
}else if ($velocidade == 40){
  echo "Motorista tomar cuidado! Velocidade permitida! <br>";
}else {
  echo "Motorista será multado! Velocidade acima do permitido! <br>";
}