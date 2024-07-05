<?php
// $string = "Hello Mohsin Raza 'How are you'";

// echo $string . "<br>";

// $newStr = addslashes($string);

// echo stripslashes($newStr);

$string = "Hello Mohsin Raza How are you";

echo $string . "<br>";

$newStr = addcslashes($string,"Hay");

echo stripcslashes($newStr);
?>