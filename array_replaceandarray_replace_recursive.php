<?php
// $fruit = ["apple","banana","mango","grapes","watermelon"];
// $veg = ["carrot","onion","potato"];
// $color = ["red","green","blue"]; 

// $newArray = array_replace($fruit,$veg,$color);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";
$array1 = array("a" => array("blue"),"b" => array("red","pink","purple"));
$array2 = array("a" => array("white"),"b" => array("black"));

$newArr = array_replace_recursive($array1,$array2);

echo "<pre>";
print_r($newArr);
echo "</pre>";
?>