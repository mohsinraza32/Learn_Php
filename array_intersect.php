<?php
function compare($a1,$a2){
    if($a1 === $a2){
        return 0;
    }
    return ($a1 > $a2)? 1 : -1;
}

$student1 = [
    "Mohsin" => "12",
    "Faizan" => "44",
    "Elon" => "55"
];

$student2 = [
   "Mohsin" => "12",
    "Faizan" => "44",
    "Waseem" => "65"
];


 //$bestStudent = array_intersect($student1,$student2);
// $bestStudent = array_intersect_key($student1,$student2);
// $bestStudent = array_intersect_assoc($student1,$student2);
$bestStudent = array_intersect_uassoc($student1,$student2,"compare");


echo "<pre>";
print_r($bestStudent);
echo "</pre>";
?>