<?php
$age = 25;

// if($age >= 18 || $age <= 21){
//     echo "You are eligible for vote";
// }

// if(!($age <= 18)){
//     echo "You are eligible";
// }

if($age >= 18 xor $age >= 26){
    echo "You are eligible";
}
?>