<?php

fscanf(STDIN, "%s", $s);

$ans =  substr_replace($s,' ',4,0);

echo $ans;
?>
