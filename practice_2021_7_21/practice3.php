<?php

fscanf(STDIN, "%d", $A);
fscanf(STDIN, "%d", $B);
fscanf(STDIN, "%d", $C);

if($A>$B && $A>$C){
echo '1'. "\n";
}elseif($C>$A && $B>$A){
echo '3'. "\n";
}else{
echo '2'. "\n";
}

if($B>$A && $B>$C){
echo '1'. "\n";
}elseif($C>$B && $A>$B){
echo '3'. "\n";
}else{
echo '2'. "\n";
}

if($C>$A && $C>$B){
echo '1'. "\n";
}elseif($A>$C && $B>$C){
echo '3'. "\n";
}else{
echo '2'. "\n";
}





?>
