<?php

$j = 0;

$teste = 'Flávio';

do {
  echo "testando o do while $j <br>";
  if ($j == 3) {
    echo "$teste<br>";
  }

  $j++;
}while($j < 10);

$i = 10;

do {
  echo "testando o do while 2 $i <br>";
  if ($i == 3) {
    echo "$teste<br>";
  }
  $i--;
}while($i > 0);
