<?php

// Crie um array de 1 até  20
// Crie um loop for para este array
// Imprima os numeros pares

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

for ($index = 0; $index < count($numbers); $index++) {
  if ($numbers[$index] % 2 == 0) {
    echo "Numero: $numbers[$index] <br>";
  }
}