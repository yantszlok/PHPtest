<?php
$N = fgets(STDIN);

$array = [];

 for($i = 0; $i < $N; $i++){ //ガチャを回した回数を、景品の入力数にする。
$array[] = fgets(STDIN);//入れた景品を配列に入れる。
}

$array = array_unique($array);//重複した景品を配列から削除する。
echo count($array);

?>
