<?php

 $arr = ['Flávio', 12, true, "Guga", "Flávinho", false, 44, "Silvia", 24.33, "Luana", []];

 $x = count($arr);
 $y = 0;

while ( $y < $x) {
  
  if(is_string($arr[$y])){
    echo $arr[$y]. "<br>";
  }
  $y++;
}