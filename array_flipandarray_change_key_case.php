<?php
$age = [
    "Zain" => "24",
    "Zulfi" => "26",
    "Mohsin" => "21",
    "Husnain" => "30"
];

// $newAge = array_flip($age);
// $newAge = array_change_key_case($age,CASE_UPPER);
$newAge = array_change_key_case($age,CASE_LOWER);// bydefault is set on case_lower

echo "<pre>";
print_r($newAge);
echo "</pre>";
?>