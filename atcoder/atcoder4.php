<?php
fscanf(STDIN, "%d %d %d", $n, $k, $b);

$sum = 0;

for($i=1; $i<=$n; $i++){ //N 以下の整数の各桁を調べる
 
$s = str_split($i);  //N 以下の整数を分裂して、配列に入れる（１０桁以上の整数）
$ketasum=array_sum($s); //格桁を足し合わせる
  if($ketasum>=$k && $ketasum<=$b){ //もし各桁の和が$a以上$b以下だったらsumにその整数を足す
        $sum+=$i;
    }
}
echo $sum;

?>
