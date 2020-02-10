<?php

$x = 1;
$y = 1;
echo $y . "\n";

for($i = 2; $i <= 10; $i++){
    $z = $x + $y;
    $y = $x;
    $x = $z;

    echo $z . "\n";    
}
