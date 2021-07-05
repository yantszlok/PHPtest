<?php
 for($i=1; $i<=10; $i++){
  echo $i;
 }

 for($q=1; $q<=31; $q++){
  echo $q;
   if($q % 7==0){
  echo "<br>";
  }
 }
?>



<?php
 $I=1;

 while($I<=10){
  echo $I;
   $I++;   
 }
?>

<?php

 $z=0;

 while($z<3){
  echo $z;
   $z++;
}

?>


<?php
 $i==0;
  if($i==0){
    echo "if構文：iは0に等しい";
 }else if($i==0){
    echo "if構文：iは1に等しい";
 }else {
    echo "if構文：iは0と1のどちらでもない";
}

 switch($i){
  case 0:
    echo "switch構文：iは0に等しい";
  break;
  case 1:
    echo "switch構文：iは1に等しい";
  break;
  default:
    echo "switch構文：iは0と1のどちらでもない";
}
?>

<?php

 $i=0;
 switch($i){
   case 0:
     echo "switch構文：iは0に等しい";
   case 1:
     echo "switch構文：iは1に等しい";
 }
?>


<?php
 $i=0;
 switch($i){
   case 0:
   case 1:
     echo "iは0か1です";
     break;
   case 2:
     echo "iは2です";
     break;
}
?>



<?php

 for($i=10; $i>=0; $i--){
   echo $i;
}
?>

<?php 
 $i=10;
 while($i>=0){
  echo $i;
  $i--;
}
?>


<?php
 $i=2;
 while($i<2){
  echo"whileループの例題です";
  $i++;
}
  echo "ループの例題を抜けました";
?>




<?php
 $i=0;
 switch($i){
   case 10:
   　echo "10";
     break;
   case 20:
   　echo "20";
     break;
   default:
     echo "iは10と20のどちらでもない";
}
?>

