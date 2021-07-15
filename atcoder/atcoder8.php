<?php
fscanf(STDIN, "%s", $N);
fscanf(STDIN, "%s", $a);

$ans = 0;

$A = str_split($a);//文字列を配列に
 
for($i = 1; $i < $N; $i++){

if($A[$i] != $A[$i-1]){ //次の配列と異なる時はスライムの数をプラス１。
 $ans++;
 }
}
echo $ans + 1;


?>



