<?php

fscanf(STDIN, "%d %d", $N, $X);

$al = 0;

for($i=0; $i<$N; $i++){
	fscanf(STDIN, "%d %d", $V, $P);
        $al += $V * $P/100;

	if($X<$al){
	   echo $i+1;
	   exit;
	
	}
}

echo -1;


?>
