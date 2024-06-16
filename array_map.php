<?php

function square($n){
    // return $n * $n; 
    // return "$n = $m"; 
    // return [$n => $m];
    return strtoupper($n); 
}
// $a = [1,2,3,4,5];
// $b = ["mango","banana","orange","grapes","milk"];

$fruit = [
    "1"=>"apple",
    "2"=>"banana",
    "3"=>"mango",
    "4"=>"orange"
];

//$newArr = array_map('square',$a,$b);
$newArr = array_map('square',$fruit);

echo "<pre>";
print_r($newArr);
echo "</pre>";
?>