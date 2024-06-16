<?php
$arr = ["mohsin","zain","waseem","sahil"];

echo "<b>Current value is:</b>".current($arr)."<br>";
echo "<b>key is:</b>".key($arr)."<br>";
echo "<b>pos is:</b>".pos($arr)."<br>";//current and pos are same

next($arr);
echo "<b>Current value is:</b>".current($arr)."<br>";
next($arr);
echo "<b>Current value is:</b>".current($arr)."<br>";
prev($arr);
echo "<b>current value is:</b>".current($arr)."<br>";
end($arr);
echo "<b>Current value is:</b>".current($arr)."<br>";
echo "<b>key is:</b>".key($arr)."<br>";
reset($arr);
echo "<b>Current value is:</b>".current($arr)."<br>";

// echo "<pre>";
// print_r(each($arr));
// echo "</pre>";
?>