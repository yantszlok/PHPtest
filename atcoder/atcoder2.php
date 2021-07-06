<?php
fscanf(STDIN, "%d %d", $a, $b);
fscanf(STDIN, "%s",$s);

 $ab=$a+$b;

$c = strlen($ab);

var_dump($c);

 if( $a<1 || $b>5 ){
   echo "No1";
 }elseif($ab + 1 != strlen($s)){
// }elseif($ad + 1 != strlen($ab + 1)){
   echo "No2";
 }elseif(!preg_match("/\A\d{{$a}}[-]\d{{$b}}\z/", $s)){
   echo "No3";
 }else{
   echo "Yes";
}

?>
