<?php
function to($i){

  return $i*2;
}
echo to(4).PHP_EOL;//()は仮

function plus($a,$b){
return $a+$b;
}
echo plus(2,4).PHP_EOL;//()は仮


function piuu($arr){
  $r=1;
  foreach($arr as $a){
    $r*=$a;
  }
    return $r;
  }
  $a=array(1,3,5,7,9);
  echo piuu($a).PHP_EOL;
  

function max_array($arr){
$max_number=$arr[0];
foreach($arr as $a){
if($max_number<$a){
$max_number=$a;
}
}
return $max_number;
}

echo max_array(array(2,4,6,8,10,12,14,16));
?>