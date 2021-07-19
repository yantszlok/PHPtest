<?php

fscanf(STDIN, "%d %d %d", $A, $B, $C);

$ans = array($A+$B,$A+$C,$B+$C);

echo max($ans);

?>
