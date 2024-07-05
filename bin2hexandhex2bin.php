<?php
$str = "hello how are you gdfdfgdgd";

$newstr = bin2hex($str);

echo $newstr . "<br>";

echo hex2bin($newstr);
?>