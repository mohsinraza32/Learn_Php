<?php
// $animals = [
//     "cow",
//     "goat",
//     "horse",
//     "cat"
// ];

// foreach($animals as $extendanimal){
//     echo $extendanimal."<br>";
// }

$age = [
    "zain" => 23,
    "zulfi" => 26,
    "shan" => 28
];
echo "<ul>";
foreach($age as $key => $value){
    echo "<li> $key  =  $value </li>";
}
echo "<ul>";
?>