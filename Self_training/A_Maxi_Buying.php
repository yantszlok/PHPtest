<?php

fscanf(STDIN,"%d",$N);

$ans = floor(1.08*$N);

if($ans<206){
    echo "Yay!";
}elseif($ans == 206){
    echo "so-so";
}else{
    echo ":(";
}
?>
