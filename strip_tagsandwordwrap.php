<?php
// $str = "Mohsin <b>Raza</b> is the very <i>hard</i> worker!";

// // echo strip_tags($str);
// echo strip_tags($str,'<b>');

$str = "you are very beautiful man";

echo wordwrap($str,3,'<br>',TRUE);
?>