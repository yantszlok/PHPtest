<?php
fscanf(STDIN, "%d",$N);

$total=0;
$i=0;

while($total<$N){
   $i++;
   $total+=$i;
}
 
echo $i;

?>
