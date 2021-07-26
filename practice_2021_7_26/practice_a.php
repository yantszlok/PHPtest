<?php

fscanf(STDIN, "%d", $N);

$ans_array = [];

for ($i = 0; $i < $N; $i++) {
	fscanf(STDIN, "%d %d", $A[$i], $B[$i]);
	  $ans_array[] = $A[$i] * $B[$i];
}	

	foreach($ans_array as $answer){
	  echo $answer.PHP_EOL;
        }
?>

