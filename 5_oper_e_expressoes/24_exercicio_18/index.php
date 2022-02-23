<?php

if(12 < 5 || "Joao" === "Joao") { //false or true -> true
  echo "Verificando if 1<br>";
}

if(1 > 5 || 1) { // false or true -> true
  echo "Verificando if 2<br>";
}

if(20 === "20" && 51 >= 31) { // false e true -> false
  echo "Verificando if 3<br>";
}

if(20 == "20" && 51 >= 31) { // true e true -> true
  echo "Verificando if 4 teste<br>";
}