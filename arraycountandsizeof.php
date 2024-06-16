<?php
$colors = array("red","green","blue","purple","pink","yellow","purple","black","green");

// echo count($colors);
// echo sizeof($colors);

// $food = array(
//     "Fast food" => array("zinger burger","beef burger","fries"),
//     "Desi food" => array("chicken karai","mutton karai","seekh")
// );

// echo count($food,1);
// echo sizeof($food,1);
// echo count($food['Fast food'],1);

// $length = count($colors);

// for($i = 0; $i < $length; $i++){
//     echo $colors[$i]. "<br>";
// }
echo "<pre>";
print_r(array_count_values($colors));
echo "</pre>";
?>