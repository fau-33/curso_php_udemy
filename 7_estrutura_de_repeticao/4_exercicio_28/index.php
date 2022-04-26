<?php

$a = 4;

while($a <= 30){
  echo "Executando o loop $a <br>";

  if($a === 24){
    echo"Parando o loop <br>";
    break;
  }
  $a += 2;
}