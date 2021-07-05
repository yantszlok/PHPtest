<?php

 $result = array(
  "Japanese" => 80,
  "math" =>75,
  "science" =>90
);

var_dump($result);

 $result["math"] = 85;
var_dump($result);

$result["music"] = 90;
var_dump($result);

?>

