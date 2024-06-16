<?php
function compareFunction($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a > $b)? 1 : -1;
}
function compareValue($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a > $b)? 1 : -1;
}
$Friend1 = ["a" => "salman","b" => "ali","c" => "waseem","d" => "ashraf"];
$Friend2 = ["a" => "salman","b" => "ali","c" => "waseem"];

// $arrayDiff = array_diff($Friend1,$Friend2);
// $arrayDiff = array_diff_key($Friend1,$Friend2);
// $arrayDiff = array_diff_assoc($Friend1,$Friend2);

// $arrayDiff = array_diff_uassoc($Friend1,$Friend2,"compareFunction");
$arrayDiff = array_udiff_uassoc($Friend1,$Friend2,"compareFunction","compareValue");




echo "<pre>";
print_r($arrayDiff);
echo "<pre>";
?>