<?php
// function test(&$string){
//     $string .= " with extra string";
// }
// $str = "this is a string";
// test($str);
// echo $str;

function first($num){
   $num += 5;
}
$number = 10;
first($number);
echo $number;
function second(&$num){
 $num += 9;
}
$number = 10;
second($number);
echo $number;
?>