<?php

for ($contador = 0; $contador <= 30; $contador ++){
    if($contador == 20){
        continue;
    }
    echo "<h1>$contador - Trabalhando com PHP </h1> ";
}

echo '<hr>';
$x = 0;

while($x <=100){
    if ($x > 15){
        break;
    }
    echo "<h1>$x - Trabalhando com PHP </h1>";
    $x++;
}