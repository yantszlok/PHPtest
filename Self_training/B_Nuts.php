<?php

fscanf(STDIN, "%d", $N);
$A = fgets(STDIN);
$a = explode(' ',$A);

$ans = 0;

for($i = 0; $i<$N; $i++){
if($a[$i] < 10){
}elseif( $a[$i] >10){
$ans += $a[$i] - 10;
 }
}
echo $ans;


?>
