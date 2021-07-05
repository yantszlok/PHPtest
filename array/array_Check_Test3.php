<?php

$foods= array(
  "fruit" => array("ichogo", "ringo","banana"),
  "vegetable" => array("kyuri","kabocha","jagaimo")
);

var_dump($foods);


foreach($foods as $categories => $food){
 echo $categories.":".$food;
}

?>


