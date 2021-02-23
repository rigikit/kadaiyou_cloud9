<?php 
$name="rk";

if($name=="rk"){
echo "私はあなたの名前です".PHP_EOL;
} else {
echo "あなたの名前ではありません";
}

for($i=1; $i<10001; $i++){
  $total+=$i;
}

echo $total.PHP_EOL;

$fruits=["apple","banana","lemon","orange","pineapple"];
foreach($fruits as $a){
 echo $a.PHP_EOL;}
/* for文の始めの値を定義する*/
 $start=1;
 /* for文の終わりの値を定義する */
 $end=101;

 for($i=$start; $i<$end; $i++){
   if($i%5==0){
     echo $i.PHP_EOL;
   }
 }
?>