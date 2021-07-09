<?php

fscanf(STDIN, "%s", $s);

$check_A = mb_strpos( $s, "A");
$check_Z = mb_strpos( $s, "Z");

if (!preg_match('/^[A-Z]+$/', $s)) {
   echo "アルファベットの大文字のみで入力してください";
 }elseif($check_A === false){
   echo "Aを含めて入力してください";
}elseif($check_Z === false){
   echo "Zを含めて入力してください";
}else{
 $count = strlen($s); //文字列の文字数
   $s_reverse= strrev($s); //文字列を逆順する
   $A = strpos($s, 'A'); //Aの前の文字列の文字数
   $Z = strpos($s_reverse, 'Z'); //逆順した文字列のZの前の文字数
   $ans= $count - $Z - $A;

   echo $ans;
}

?>
