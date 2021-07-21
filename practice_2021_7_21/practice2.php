<?php
fscanf(STDIN, "%s",$X);

$a = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

for($i=0 ; $i<25 ; $i++){
 if($a[$i]==$X){
  echo $i+1;
 }
} 

?>

