<?php

fscanf(STDIN, "%s", $S);
fscanf(STDIN, "%d", $w);

$l = strlen($S);


for ($i = 0; $i * $w < $l; $i++ ){
	echo substr($S, $i * $w, 1);
}

?>
