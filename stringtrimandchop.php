<?php
$str = "Mohsin Raza";
echo $str . "</br>";

//echo trim($str,"MRza"); // both left and right
// echo rtrim($str,"Rza");
// echo ltrim($str,"M");

echo chop($str,"Maza"); // work like rtrim
?>