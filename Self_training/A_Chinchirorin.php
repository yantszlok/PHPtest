<?php

fscanf(STDIN,"%d%d%d",$a,$b,$c);

if($a==$b){
echo $c;
}elseif($a==$c){
echo $b;  
}elseif($b==$c){
echo $a;
}else{
echo 0;
}
?>
