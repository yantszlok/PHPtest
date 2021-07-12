<?php
fscanf(STDIN, "%d", $A);
fscanf(STDIN, "%d", $B);
fscanf(STDIN, "%d", $C);
fscanf(STDIN, "%d", $X);

$ans = 0;

for($a = 0; $a<=$A; $a++ ){
 for($b = 0; $b<=$B; $b++ ){
  for($c = 0; $c<=$C; $c++ ){
   if(500*$a + 100*$b + 50*$c == $X){
    $ans++;
     }
    }
  }
}

echo $ans;

?>
