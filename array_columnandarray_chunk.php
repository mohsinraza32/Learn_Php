<?php
// $student = [
// [
//     "id" => "1",
//     "first_name" => "Mohsin",
//     "last_name" => "Raza"
// ],
// [
//     "id" => "2",
//     "first_name" => "zain",
//     "last_name" => "baig" 
// ],
// [
//     "id" => "3",
//     "first_name" => "zulfiqar",
//     "last_name" => "ali"
// ],
// ];

// $bikes = ["honda","superstar","unique","superpower","roadprince"];

$age = [
    "zain" => "24",
    "xulfi" => "26",
    "mohsin" => "24",
    "husnain" => "30"
];

// $newStudent = array_column($student,"first_name");
// $newStudent = array_column($student,"last_name","id");

// $newarray = array_chunk($bikes,3);
$newAge = array_chunk($age,3,true);

echo "<pre>";
// print_r($newStudent);
// print_r($newarray);
print_r($newcar);
echo "</pre>";
?>