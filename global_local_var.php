<?php
// $a = 10;   //local variable

// function check(){
//     global $a;
//     global $b;
//      $b = 5;
//     echo $a;
// }
// check();
// echo $b;

// $a = 30;
// $b = 20;

// function check(){
//     global $a , $b;
//     $c = $a + $b;
//     echo $c;
// }
// check();

function test(){
    $a = 10;
}
test();
echo $a;
?>