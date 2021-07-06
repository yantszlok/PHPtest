<?php

$foods= array(
  "fruit" => array("ichogo", "ringo","banana"),
  "vegetable" => array("kyuri","kabocha","jagaimo")
);

foreach($foods as $categories => $food){
 foreach($food as $name => $food2){
  echo $categories.":".$food2;
 }
}

?>


