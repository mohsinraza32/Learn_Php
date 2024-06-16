<?php
$veg = ["1"=>"carrot","2"=>"potato"];
$color = [
    $veg,
    "a"=>"green",
    "b"=>"blue",
    "c"=>"black",
    "d"=>"purple"
];

// $newArr = array_walk($color,"myFunction","is a key of");
$newArr = array_walk_recursive($color,"myFunction","is a key of");

function myFunction($value , $key,$param){
echo "$key $param $value"."<br>";
};
?>