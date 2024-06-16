<?php
$Friend = ["a" => "salman","b" => "ali","c" => "waseem","d" => "salman"];

// $newFriend = array_values($Friend);
$newFriend = array_unique($Friend);
echo "<pre>";
print_r($newFriend);
echo "<pre>";
?>