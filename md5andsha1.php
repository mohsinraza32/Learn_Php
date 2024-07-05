<?php
$str = "Mohsin";

echo "string is: ". $str . "<br><br>";

echo "md5 Binary: " . md5($str,TRUE). "<br><br>";//16 char

echo "md5 hex: " . md5($str). "<br><br>";//32 char

echo "sha1 Binary: " . sha1($str,TRUE). "<br><br>";//20 char

echo "sha1 hex: " . sha1($str). "<br><br>";//40char
?>