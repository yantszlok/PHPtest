<?php

fscanf(STDIN,"%d %d",$n,$k,);
$ans = 0;
 
for ($i=1; $i <= $k; $i++) { 
    $ans += $i*$n;
}
for ($i=1; $i <= $n; $i++) { 
    $ans += $i*100*$k;
}
echo $ans;
?>
