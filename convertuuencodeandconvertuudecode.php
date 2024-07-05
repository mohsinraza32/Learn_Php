<?php
$str = "Mohsin Raza";

$newstr =  convert_uuencode($str)."<br>";

echo $newstr;

echo convert_uudecode($newstr);
?>