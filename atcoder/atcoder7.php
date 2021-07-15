<?php
$N = fgets(STDIN);
$A = fgets(STDIN);

$Array = explode(" ",$A);

for($i = 0; $i<$N ; $i++){
 if($Array[$i] % 2 == 0 && $Array[$i]%3 != 0 && $Array[$i]%5 != 0){
 exit ("DENIED");
 }
}

echo "APPROVED";


?>
