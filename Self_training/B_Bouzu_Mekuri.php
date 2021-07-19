<?php
$n = trim(fgets(STDIN));
$cards = trim(fgets(STDIN));
 
$bad_card = strpos($cards, '1');
 
if($bad_card % 2 == 0){
    echo 'Takahashi';
}else{
    echo 'Aoki';
}

?>
