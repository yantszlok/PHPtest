<?php

 function get_price($price){
   $price = $price *1.1;

   return round($price);

 }
 echo get_price(300);

?>
