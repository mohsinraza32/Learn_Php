<?php
$str = 'Mohsin Raza';

// $newArr = str_split($str,2);
// $newArr = chunk_split($str,1,".");
// $newArr = chunk_split($str,1,"-");
$newArr = chunk_split($str,1,"<br>");


echo "<pre>";
print_r($newArr);
echo "</pre>";
?>