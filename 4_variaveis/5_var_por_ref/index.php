<?php

$x = 10;
$y = & $x;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 15;

echo "Atríbuição após ref";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$x = 20;

echo "Atríbuição após ref 2";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$nome = "Flávio";
$nome2 = & $nome;

echo "Atríbuição após ref 3";
echo "<br>";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

$nome2 = "Pedro";

echo "Atríbuição após ref 4";
echo "<br>";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

