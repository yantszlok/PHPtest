<?php

fscanf(STDIN, "%d %d", $N, $D);

$ans = $N/($D+$D+1);

echo ceil($ans);

?>
