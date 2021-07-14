<?php
fscanf(STDIN, "%s", $a);

$length = strlen($a);

$A = str_split($a);
 

for($i = 0; $i < $length; $i++){

 if($i == $length - 1){
   break;}

if($A[$i] == $A[$i+1]){
}
else{
  exit('NG');
 }
}
echo'OK';


?>
