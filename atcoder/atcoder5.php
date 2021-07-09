<?php

fscanf(STDIN, "%s", $s);

if (preg_match('/^[A-Z]+$/', $s)) {
   $count = strlen($s); //文字列の文字数
   $s_reverse= strrev($s); //文字列を逆順する
   $A = strpos($s, 'A'); //Aの前の文字列の文字数
   $Z = strpos($s_reverse, 'Z'); //逆順した文字列のZの前の文字数
   $ans= $count - $Z - $A;

   echo $ans;
 }
?>
