<?php
function myFunction($n,$m){
//  return $n . "-". $m;
// return $n + $m;
// return $n - $m;
return $n * $m;
}
// $a = ['apple','banana','orange'];
$a = [1,2,3,4,5];

$newArr = array_reduce($a,'myFunction',2);

echo "<pre>";
print_r($newArr);
echo "</pre>";
?>