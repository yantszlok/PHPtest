<?php

$test = 'test.txt';

$lines = file($test);

$second_line = $lines[1];

echo $second_line;

?>
