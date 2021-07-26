<?php

$N = fgets(STDIN);
for($i = 1; $i <= 9; $i++){
for($j = 1; $j <= 9; $j++){

if($N == $i*$j ){
echo 'Yes';
exit;
}else{
echo 'No';
}
}
}
?>
