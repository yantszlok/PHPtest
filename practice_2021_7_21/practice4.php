<?php

fscanf(STDIN, "%s", $n);

$N = str_split($n);

for($i = 0; $i<3; $i++){
if($N[$i] == $N[$i+1]){
echo 'SAME';
exit;
}else{
echo 'DIFFERENT';
exit;
 }
}
