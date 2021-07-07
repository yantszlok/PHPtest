<?php
fscanf(STDIN, "%d %d", $n, $k);
$s = fgets(STDIN);

$p = explode(" ",$s);

sort($p, SORT_NUMERIC);

var_dump($p);
$sum = 0;

for( $i=0; $i<$k; $i++){
   $sum += $p[$i];
}

echo $sum;


?>
