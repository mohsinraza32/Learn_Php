<?php
// $color = ["green","blue","black","purple","pink"];
$color = ["a"=>"green","b"=>"blue","c"=>"black","d"=>"purple"];

// $newColor = array_rand($color,2);
 shuffle($color);

echo "<pre>";
// print_r($newColor);
print_r($color);
echo "</pre>";

// echo $color[$newColor];
// echo $color[$newColor[0]]."<br>";
// echo $color[$newColor[1]];
?>