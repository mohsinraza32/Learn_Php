<?php
// function myName($f_Name , $l_Name){
//     $s = "$f_Name $l_Name";
//     return $s;
// }
// $name = myName("Mohsin" , "Raza");
// echo "Hello " . $name;

function sum($eng , $math, $computer){
    $c = $eng + $math + $computer;

    return $c;
}
function perc($st){
    $per = $st / 3;
   echo $per . "%"; 
}

$total = sum(50 , 40 , 70);
perc($total);
?>