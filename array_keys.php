<?php
// $fruit = array("apple","grapes","banana","pineapple");

$employe = [
    "zain" => 23,
    "zulfi" => 26,
    "shan" => 24
];

// $newFruit = array_keys($employe);
//$newFruit = array_key_first($employe);
//$newFruit = array_key_last($employe);
//$newFruit = array_key_exists("zulfi",$employe);
$newFruit = key_exists("shan",$employe);

if($newFruit){
    echo "key exist";
}else{
    echo "key does not exist";
}


echo "<pre>";
print_r($newFruit);
echo "</pre>";
?>