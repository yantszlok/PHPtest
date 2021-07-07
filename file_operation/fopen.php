<?php

$test = 'test.txt';

$fp = fopen($test,"r");


while(!feof($fp)){

 $txt = fgets($fp);
 echo $txt;

}

fclose($fp); 

?>
