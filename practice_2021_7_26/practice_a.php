<?php

fscanf(STDIN, "%d", $N);

for ($i = 0; $i < $N; $i++) {
fscanf(STDIN, "%d %d", $A[$i], $B[$i]);
echo $A[$i] * $B[$i].PHP_EOL;
}


?>
