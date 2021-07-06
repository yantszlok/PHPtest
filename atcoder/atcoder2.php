<?php
fscanf(STDIN, "%d %d %s", $a, $b, $s);

$ab=$a+$b;

 if($a<1 || $b>5){
   echo "no1";
}elseif($ad+1 != strlen($ab+1)){
   echo "no2";
}elseif(!preg_match("/\A\d{{$a}}[-]\d{{$b}}\z/", $s)){
   echo "no3";
}else{
   echo "yes";
}

?>
