<?php
fscanf(STDIN, "%d %d", $a, $b);
fscanf(STDIN, "%s",$s);

 $ab=$a+$b;

 if( $a<1 || $b>5 ){
   echo "No";
 }elseif($ad + 1 != strlen($ab + 1)){
   echo "No";
 }elseif(!preg_match("/\A\d{{$a}}[-]\d{{$b}}\z/", $s)){
   echo "No";
 }else{
   echo "Yes";
}

?>
