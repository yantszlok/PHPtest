<?php

fscanf(STDIN, "%d %d", $N, $X);
$a = explode(' ',(fgets(STDIN)));

$total = 0;

for($i = 1; $i<$N; $i++){
 if($i%2 == 0){
  $a[$i]-1;
  }
 $total +=$a[$i];
}

if($X>=$total){
echo 'Yes';
}else{
echo 'No';
}

?>
