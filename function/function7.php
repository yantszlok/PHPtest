<?php
 function vending_machine ($price,$juice_name){
  if ($price >= 120){
    return $juice_name ."お買い上げありがとうございます";
  }else{
    return $juice_name ."購入金額が足りません";
  }
}

?>

