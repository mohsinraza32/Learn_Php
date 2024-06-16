<?php
//$colors = array("a" => "red","b" => "green","c" => "blue","d" => "pink",);
//$animals = array("cow" => array('australion','sibbi','jangi'),"b" => "camel","f" => "tiger","elephent");


// $newArr = array_merge($colors,$animals);
// $newArr = array_merge_recursive($colors,$animals);

$name = ["mohsin","zain","zulfi"];
$age = ["24","23","26"];

$newArr = array_combine($name,$age);// it is used onli with index array.

echo "<pre>";
print_r($newArr);
echo "</pre>";
?>