<?php

fscanf(STDIN, "%s",$s);

$test = 'test.txt';

$fp = fopen($test,"w");

if($fp){
 fwrite($fp,$s);
 fclose($fp);
 echo "書き込みしました";
}else{
 echo "エラー";
}


?>

